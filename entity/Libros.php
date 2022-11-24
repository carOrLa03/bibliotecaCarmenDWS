<?php
class Libros implements IEntity
{
    private $nombre_libro;
    private $editorial;
    private $autor;
    private $genero;
    private $pais_autor;
    private $paginas;
    private $precio;
    private $ano_edicion;

    public function __construct($nombre, $editorial, $autor, $genero, $pais, $paginas, $precio, $ano)
    {
        $this->nombre_libro = $nombre;
        $this->editorial = $editorial;
        $this->autor = $autor;
        $this->genero = $genero;
        $this->pais_autor = $pais;
        $this->num_paginas  = $paginas;
        $this->precio = $precio;
        $this->ano_edicion = $ano;
    }
    public function setNombre($nombre)
    {
        $this->nombre_libro = $nombre;
    }
    public function setEditorial($editorial)
    {
        $this->editorial = $editorial;
    }
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }
    public function setGenero($genero)
    {
        $this->genero = $genero;
    }
    public function setPais($pais)
    {
        $this->pais_autor = $pais;
    }
    public function setPaginas($paginas)
    {
        $this->paginas = $paginas;
    }
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }
    public function setAnoEdicion($ano)
    {
        $this->ano_edicion = $ano;
    }
    public function getNombre()
    {
        return $this->nombre_libro;
    }
    public function getEditorial()
    {
        return $this->editorial;
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
        return $this->paginas;
    }
    public function getPrecio()
    {
        return $this->precio;
    }
    public function getAno()
    {
        return $this->ano_edicion;
    }

    public function toArray() /*lo usaremos para crear el método save() en queryBuilder*/
    {
        return [
            'nombre_libro' => $this->getNombre(),
            'editorial' => $this->getEditorial(),
            'autor' => $this->getAutor(),
            'genero' => $this->getGenero(),
            'pais_autor' => $this->getPais(),
            'paginas' => $this->getPaginas(),
            'precio' => $this->getPrecio(),
            'ano_edicion' => $this->getAno()
        ];
    }
}
