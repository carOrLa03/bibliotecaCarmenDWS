<?php
require_once("./exceptions/DataBaseException.php");
class QueryBuilder
{
    private $conexion;
    public function __construct(PDO $conexion)
    {
        $this->conexion = $conexion;
    }
    public function findAll($tabla, $entidad, $args)
    {
        $sql = "SELECT * from $tabla";
        $pdoStatment = $this->conexion->prepare($sql);
        if ($pdoStatment->execute() === false) {
            throw new DataBException('No se ha podido ejecutar la query 
    solicitada');
        }
        return $pdoStatment->fetchAll(PDO::FETCH_CLASS |
            PDO::FETCH_PROPS_LATE, $entidad, $args);
    }
}
