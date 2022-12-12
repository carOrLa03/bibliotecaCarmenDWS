<?php
namespace biblioteca\App\repository;
use biblioteca\App\entity\Prestamos;
use biblioteca\Core\Database\QueryBuilder;

class PrestamosRepositorio extends QueryBuilder
{
    public function __construct($tabla = 'prestamos', $entidad = Prestamos::class, $argumentos = ['Cod_libro', 'Cod_usuario', 'Fecha_salida', 'Fecha_maxima_dev', 'Fecha_devolucion', 'Devuelto'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}
