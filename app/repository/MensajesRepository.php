<?php
namespace biblioteca\App\repository;
use biblioteca\App\entity\Mensajes;
use biblioteca\Core\Database\QueryBuilder;

class MensajesRepository extends QueryBuilder
{
    public function __construct($tabla = 'mensajes', $entidad = Mensajes::class, $argumentos = ['nombre', 'mail', 'mensaje'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}
