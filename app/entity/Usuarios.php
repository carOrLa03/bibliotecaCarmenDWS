<?php
namespace biblioteca\App\entity;
use biblioteca\Core\Database\IEntity;

class Usuarios implements IEntity
{
    private $Cod_usuario;
    private $Nombre;
    private $Apellidos;
    private $DNI;
    private $Domicilio;
    private $Poblacion;
    private $Fecha_nacimiento;

    public function __construct($nombre, $apellidos, $dni, $domicilio, $poblacion, $fnacimiento)
    {
        $this->Cod_usuario = 0;
        $this->Nombre = $nombre;
        $this->Apellidos = $apellidos;
        $this->DNI = $dni;
        $this->Domicilio = $domicilio;
        $this->Poblacion = $poblacion;
        $this->Fecha_nacimiento = $fnacimiento;
    }

    public function setNom($nombre)
    {
        $this->Nombre = $nombre;
    }
    public function setApellidos($apellidos)
    {
        $this->Apellidos = $apellidos;
    }
    public function setDni($dni)
    {
        $this->DNI = $dni;
    }
    public function setDomicilio($domicilio)
    {
        $this->Domicilio = $domicilio;
    }
    public function setPob($poblacion)
    {
        $this->Poblacion = $poblacion;
    }
    public function setFNace($fnace)
    {
        $this->Fecha_nacimiento = $fnace;
    }
    public function getCodigo()
    {
        return $this->Cod_usuario;
    }
    public function getNombre()
    {
        return $this->Nombre;
    }
    public function getApellidos()
    {
        return $this->Apellidos;
    }
    public function getDni()
    {
        return $this->DNI;
    }
    public function getDomicilio()
    {
        return $this->Domicilio;
    }
    public function getPoblacion()
    {
        return $this->Poblacion;
    }
    public function getFnace()
    {
        return $this->Fecha_nacimiento;
    }
    public function toArray() /*lo usaremos para crear el método save() en queryBuilder*/
    {
        return [
            'Cod_usuario' => $this->getCodigo(),
            'Nombre' => $this->getNombre(),
            'Apellidos' => $this->getApellidos(),
            'DNI' => $this->getDni(),
            'Domicilio' => $this->getDomicilio(),
            'Poblacion' => $this->getPoblacion(),
            'Fecha_nacimiento' => $this->getFnace()
        ];
    }
}
