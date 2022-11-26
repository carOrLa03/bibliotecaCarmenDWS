<?php
class Usuarios implements IEntity
{
    private $Cod_usuario;
    private $Nombre;
    private $Apellidos;
    private $DNI;
    private $Domicilio;
    private $Poblacion;
    private $Provincia;
    private $Fecha_nacimiento;

    public function __construct($nombre, $apellidos, $dni, $domicilio, $poblacion, $provincia,  $fnacimiento)
    {
        $this->cod_usuario = 0;
        $this->Nombre = $nombre;
        $this->Apellidos = $apellidos;
        $this->DNI = $dni;
        $this->Domicilio = $domicilio;
        $this->Poblacion = $poblacion;
        $this->Provincia = $provincia;
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
    public function setProv($provincia)
    {
        $this->Provincia = $provincia;
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
    public function getProvincia()
    {
        return $this->Provincia;
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
            'Provincia' => $this->getProvincia(),
            'Fecha_nacimiento' => $this->getFnace()
        ];
    }
}
