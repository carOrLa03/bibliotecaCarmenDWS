<?php
namespace biblioteca\App\repository;

use biblioteca\App\entity\Libros;
use biblioteca\Core\Database\QueryBuilder;

class LibrosRepository extends QueryBuilder
{
    public function __construct($tabla = 'libros', $entidad = Libros::class, $argumentos = ['nombre_libro', 'autor', 'genero', 'pais_autor', 'paginas', 'ano_edicion'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}
