<?php
class Prestamos implements IEntity
{
    private $cod_libro;
    private $cod_usuario;
    private $f_salida;
    private $f_max_dev;
    private $f_devolucion;
    private $devuelto;

    public function __construct($libro, $usuario, $salida, $max_dev, $f_devolucion, $devuelto)
    {
        $this->cod_libro = $libro;
        $this->cod_usuario = $usuario;
        $this->f_salida = $salida;
        $this->f_max_dev = $max_dev;
        $this->f_devolucion = $f_devolucion;
        $this->devuelto = $devuelto;
    }
    public function setC_Libro($libro)
    {
        $this->cod_libro = $libro;
    }
    public function setC_Usuario($usuario)
    {
        $this->cod_usuario = $usuario;
    }
    public function setFSalida($salida)
    {
        $this->f_salida = $salida;
    }
    public function setFMaxDev($f_max_dev)
    {
        $this->f_max_dev = $f_max_dev;
    }
    public function setFDevolucion($f_dev)
    {
        $this->f_devolucion = $f_dev;
    }
    public function setDevuelto($devuelto)
    {
        $this->devuelto = $devuelto;
    }
    public function getCLibro()
    {
        return $this->cod_libro;
    }
    public function getCUsuario()
    {
        return $this->cod_usuario;
    }
    public function getFSalida()
    {
        return $this->f_salida;
    }
    public function getFMaxDev()
    {
        return $this->f_max_dev;
    }
    public function getFDevolucion()
    {
        return $this->f_devolucion;
    }
    public function getDevuelto()
    {
        return $this->devuelto;
    }


    public function toArray() /*lo usaremos para crear el método save() en queryBuilder*/
    {
        return [
            'codLibro' => $this->getCLibro(),
            'codUsuario' => $this->getCUsuario(),
            'fechaSalida' => $this->getFSalida(),
            'fechaMaxDev' => $this->getFMaxDev(),
            'fechaDevolucion' => $this->getFDevolucion(),
            'devuelto' => $this->getDevuelto()
        ];
    }
}
