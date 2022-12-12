<?php
namespace bibliotecaCarmenDWS\app\repository;
//require_once __DIR__ . "/../database/queryBuilder.php";
use bibliotecaCarmenDWS\Core\Database\queryBuilder;
class LibrosRepository extends QueryBuilder
{
    public function __construct($tabla = 'libros', $entidad = 'Libros', $argumentos = ['nombre_libro', 'autor', 'genero', 'pais_autor', 'paginas', 'ano_edicion'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}