<?php
class Libros implements IEntity
{
    private $nombre_libro;
    private $autor;
    private $genero;
    private $pais_autor;
    private $num_paginas;
    private $ano_edicion;

    public function __construct($nombre, $autor, $genero, $pais, $paginas, $ano)
    {
        $this->nombre_libro = $nombre;
        $this->autor = $autor;
        $this->genero = $genero;
        $this->pais_autor = $pais;
        $this->num_paginas  = $paginas;
        $this->ano_edicion = $ano;
    }
    public function getNombre()
    {
        return $this->nombre_libro;
    }
    public function getAutor()
    {
        return $this->autor;
    }
    public function getGenero()
    {
        return $this->genero;
    }
    public function getPais()
    {
        return $this->pais_autor;
    }
    public function getPaginas()
    {
        return $this->num_paginas;
    }
    public function getAno()
    {
        return $this->ano_edicion;
    }

    public function toArray() /*lo usaremos para crear el método save() en queryBuilder*/
    {
        return [
            'nombre' => $this->getNombre(),
            'autor' => $this->getAutor(),
            'genero' => $this->getGenero(),
            'pais' => $this->getPais(),
            'paginas' => $this->getPaginas(),
            'ano' => $this->getAno()
        ];
    }
}
