<?php
class Libros
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
        return $this->nombre;
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
}
