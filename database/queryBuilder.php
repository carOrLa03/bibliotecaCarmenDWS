<?php
require_once __DIR__ . "/../core/App.php";
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
