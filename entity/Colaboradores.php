<?php

class Colaborador
{
    private $id;
    private $nombre;
    private $descripcion;
    private $archivo;
    public const RUTA_LOGO = "./images/colaboradores/";

    public function __construct($id, $nom, $desc, $archivo)
    {
        $this->id = $id;
        $this->nombre =  $nom;
        $this->descripcion = $desc;
        $this->archivo = $archivo;
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
        return self::RUTA_LOGO . $this->archivo;
    }
}
