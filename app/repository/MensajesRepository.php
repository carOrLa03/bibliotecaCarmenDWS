<?php
namespace bibliotecaCarmenDWS\app\repository;
require_once __DIR__ . "/../database/queryBuilder.php";
class MensajesRepositorio extends QueryBuilder
{
    public function __construct($tabla = 'mensajes', $entidad = 'Mensajes', $argumentos = ['nombre', 'mail', 'mensaje'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}
