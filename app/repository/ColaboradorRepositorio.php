<?php
namespace biblioteca\App\repository;

use biblioteca\Core\Database\QueryBuilder;
use biblioteca\App\entity\Colaborador;

class ColaboradorRepositorio extends QueryBuilder
{
    public function __construct($tabla = 'colaboradores', $entidad = Colaborador::class, $argumentos = ['nombre', 'descripcion', 'archivo'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}
