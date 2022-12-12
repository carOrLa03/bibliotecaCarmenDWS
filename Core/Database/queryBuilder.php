<?php
namespace bibliotecaCarmenDWS\Core\Database;
use core\App;
abstract class QueryBuilder
{
    private $conexion;
    private $tabla;
    private $entidad;
    private $args;
    public function __construct($tabla, $entidad, $args)
    {
        $this->conexion = App::getConexion();
        $this->tabla = $tabla;
        $this->entidad = $entidad;
        $this->args = $args;
    }
    // método que nos devuelve un array con todos los datos de la tabla solicitada
    public function findAll()
    {
        try {
            $sql = "SELECT * from $this->tabla";
            $pdoStatment = $this->conexion->prepare($sql);
            $pdoStatment->execute();
            return $pdoStatment->fetchAll(PDO::FETCH_CLASS |
                PDO::FETCH_PROPS_LATE, $this->entidad, $this->args);
        } catch (DataBException $e) {
            throw new DataBException("No se ha podido ejecutar la Query solicitada");
        }
    }
    // funcion para devolver los datos con una condición
    // si el cod_libro no existe en la tabla prestamos, ese libro está disponible
    public function findLibrosDisponibles()
    {
        try {
            $sql = "SELECT *
                    FROM $this->tabla
                    WHERE Cod_libro NOT IN (SELECT Cod_libro
                                            FROM  prestamos
                                            WHERE devuelto = false)";
            $pdoStatment = $this->conexion->prepare($sql);
            $pdoStatment->execute();
            return $pdoStatment->fetchAll(PDO::FETCH_CLASS |
                PDO::FETCH_PROPS_LATE, $this->entidad, $this->args);
        } catch (DataBException $e) {
            throw new DataBException("No se ha podido ejecutar la Query solicitada");
        }
    }
    // funcion para cargar los generos de los libros en un select
    public function rellenaSelect($columna)
    {
        try {
            $sql = "SELECT DISTINCT $columna
                    FROM $this->tabla";
            $pdoStatment = $this->conexion->prepare($sql);
            $pdoStatment->execute();
            return $pdoStatment->fetchAll(PDO::FETCH_CLASS |
                PDO::FETCH_PROPS_LATE, $this->entidad, $this->args);
        } catch (DataBException $e) {
            throw new DataBException("No se ha podido ejecutar la Query solicitada");
        }
    }
    // funcion para saber el total de los préstamos de un usuario
    public function totalPrestamosUsuario($codUsuario)
    {
        try {
            //todos los prestamos de un usuario que no hayan sido devueltos todavía
            $sql = "SELECT 'COUNT (*)'
                    FROM $this->tabla
                    WHERE Cod_usuario = '$codUsuario' AND 
                          Devuelto = 'false'";
            $pdoStatement = $this->conexion->prepare($sql);
            $pdoStatement->execute();
            return $pdoStatement->rowCount();
        } catch (DataBaseException $e) {
            throw new DataBaseException("No se ha podido ejecutar la Query solicitada");
        }
    }
    public function prestamosUsuarios($codUsuario)
    {
        try {
            $sql = "SELECT *
                    FROM $this->tabla
                    WHERE Cod_usuario = '$codUsuario'";
            $pdoStatment = $this->conexion->prepare($sql);
            $pdoStatment->execute();
            return $pdoStatment->fetchAll(PDO::FETCH_CLASS |
                PDO::FETCH_PROPS_LATE, $this->entidad, $this->args);
        } catch (DataBException $e) {
            throw new DataBException("No se ha podido ejecutar la Query solicitada");
        }
    }
    // función para modificar registro de una tabla
    public function updateRegistro($datoNuevo, $numRegistro)
    {
        try {
            $sql = "UPDATE $this->tabla
                    SET Fecha_devolucion = '$datoNuevo', Devuelto = 'true'
                    WHERE Num_pedido = '$numRegistro'";
            $pdoStatment = $this->conexion->prepare($sql);
            $pdoStatment->execute();
            return "El registro ha sido modificado";
        } catch (DataBException $e) {
            throw new DataBException("No se ha podido ejecutar la Query solicitada");
        }
    }

    // método para insertar registros en las tablas
    public function save($entidad)
    {
        try {
            $parametros = $entidad->toArray();
            $sql = sprintf(
                'insert into %s (%s) values (%s)',
                $this->tabla,
                implode(',', array_keys($parametros)),
                ':' . implode(', :', array_keys($parametros))
            );
            $statment = $this->conexion->prepare($sql);
            $statment->execute($parametros);
        } catch (DataBException $e) {
            throw new DataBException("No se ha podido ejecutar la Query solicitada");
        }
    }
}
