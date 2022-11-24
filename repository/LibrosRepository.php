<?php
require_once __DIR__ . "/../database/queryBuilder.php";
class LibrosRepository extends QueryBuilder
{
    public function __construct($tabla = 'libros', $entidad = 'Libros', $argumentos = ['nombre_libro', 'editorial', 'autor', 'genero', 'pais_autor', 'paginas', 'precio', 'ano_edicion'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}
