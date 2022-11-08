<?php

class Colaborador
{
    private $nombre;
    private $descripcion;
    private const RUTA_LOGO = "./images/";

    public function __construct($nom, $desc)
    {
        $this->nombre =  $nom;
        $this->descripcion = $desc;
    }

    public function setNombre($nom)
    {
        $this->nombre = $nom;
    }
    public function setDescripcion($desc)
    {
        $this->descripcion = $desc;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getUrlImagen()
    {
        return self::RUTA_LOGO . $this->nombre;
    }
}
