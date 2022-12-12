<?php
namespace bibliotecaCarmenDWS\app\repository;
use database\QueryBuilder;
class ColaboradorRepositorio extends QueryBuilder
{
    public function __construct($tabla = 'colaboradores', $entidad = 'Colaborador', $argumentos = ['nombre', 'descripcion', 'archivo'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}
