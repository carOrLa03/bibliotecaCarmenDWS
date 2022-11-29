<?php
class Libros implements IEntity
{
    private $Cod_libro;
    private $nombre_libro;
    private $autor;
    private $genero;
    private $pais_autor;
    private $paginas;
    private $ano_edicion;

    public function __construct($nombre, $autor, $genero, $pais, $paginas, $ano)
    {
        $this->Cod_libro = 0;
        $this->nombre_libro = $nombre;
        $this->autor = $autor;
        $this->genero = $genero;
        $this->pais_autor = $pais;
        $this->paginas  = $paginas;
        $this->ano_edicion = $ano;
    }
    public function setNombre($nombre)
    {
        $this->nombre_libro = $nombre;
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
    public function setAnoEdicion($ano)
    {
        $this->ano_edicion = $ano;
    }
    public function getCodigo()
    {
        return $this->Cod_libro;
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
        return $this->paginas;
    }
    public function getAno()
    {
        return $this->ano_edicion;
    }

    public function toArray() /*lo usaremos para crear el método save() en queryBuilder*/
    {
        return [
            'Cod_libro' => $this->getCodigo(),
            'nombre_libro' => $this->getNombre(),
            'autor' => $this->getAutor(),
            'genero' => $this->getGenero(),
            'pais_autor' => $this->getPais(),
            'paginas' => $this->getPaginas(),
            'ano_edicion' => $this->getAno()
        ];
    }
}
