<?php
namespace bibliotecaCarmenDWS\app\repository;
require_once __DIR__ . "/../database/queryBuilder.php";
class PrestamosRepositorio extends QueryBuilder
{
    public function __construct($tabla = 'prestamos', $entidad = 'Prestamos', $argumentos = ['Cod_libro', 'Cod_usuario', 'Fecha_salida', 'Fecha_maxima_dev', 'Fecha_devolucion', 'Devuelto'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}
