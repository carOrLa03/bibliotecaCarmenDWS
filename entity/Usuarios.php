<?php
class Usuarios implements IEntity
{
    private $nombre;
    private $apellidos;
    private $dni;
    private $domicilio;
    private $poblacion;
    private $provincia;
    private $fNacimiento;

    public function __construct($nombre, $apellidos, $dni, $domicilio, $poblacion, $provincia,  $fnacimiento)
    {
        $this->nombre = $nombre;
        $this->apelliddos = $apellidos;
        $this->dni = $dni;
        $this->domicilio = $domicilio;
        $this->poblacion = $poblacion;
        $this->provincia = $provincia;
        $this->fNacimiento = $fnacimiento;
    }

    public function setNom($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }
    public function setDni($dni)
    {
        $this->dni = $dni;
    }
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;
    }
    public function setPob($poblacion)
    {
        $this->poblacion = $poblacion;
    }
    public function setProv($provincia)
    {
        $this->provincia = $provincia;
    }
    public function setFNace($fnace)
    {
        $this->fNacimiento = $fnace;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellidos()
    {
        return $this->apellidos;
    }
    public function getDni()
    {
        return $this->dni;
    }
    public function getDomicilio()
    {
        return $this->domicilio;
    }
    public function getPoblacion()
    {
        return $this->poblacion;
    }
    public function getProvincia()
    {
        return $this->provincia;
    }
    public function getFnace()
    {
        return $this->fNacimiento;
    }
    public function toArray() /*lo usaremos para crear el método save() en queryBuilder*/
    {
        return [
            'Nombre' => $this->getNombre(),
            'Apellidos' => $this->getApellidos(),
            'DNI' => $this->getDni(),
            'Domicilio' => $this->getDomicilio(),
            'Poblacion' => $this->getPoblacion(),
            'Provincia' => $this->getProvincia(),
            'Fecha_nacimiento' => $this->getFnace()
        ];
    }
}
