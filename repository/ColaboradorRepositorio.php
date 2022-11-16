<?php
require_once __DIR__ . "/../database/queryBuilder.php";
class ColaboradorRepositorio extends QueryBuilder
{
    public function __construct($tabla = 'colaboradores', $entidad = 'Colaborador', $argumentos = ['nombre', 'descripcion', 'archivo'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}
