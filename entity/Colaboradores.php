<?php
require_once("../database/lentity.php");
class Colaborador implements IEntity
{
    private $id;
    private $nombre;
    private $descripcion;
    private $archivo;
    public const RUTA_LOGO = "./images/colaboradores/";

    public function __construct($nom, $desc, $archivo)
    {
        $this->id;
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
    public function setArchivo($archivo)
    {
        $this->archivo = $archivo;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function getArchivo()
    {
        return $this->archivo;
    }

    public function getUrlImagen()
    {
        return self::RUTA_LOGO . $this->archivo;
    }

    public function toArray() /*lo usaremos para crear el método save() en queryBuilder*/
    {
        return [
            'nombre' => $this->getNombre(),
            'logo' => $this->getArchivo()
        ];
    }
}
