<?php
class Prestamos implements IEntity
{
    private $Num_pedido;
    private $Cod_libro;
    private $Cod_usuario;
    private $Fecha_salida;
    private $Fecha_maxima_dev;
    private $Fecha_devolucion;
    private $Devuelto;

    public function __construct($libro, $usuario, $salida, $max_dev, $f_devolucion, $devuelto)
    {
        $this->Num_pedido = 0;
        $this->Cod_libro = $libro;
        $this->Cod_usuario = $usuario;
        $this->Fecha_salida = $salida;
        $this->Fecha_maxima_dev = $max_dev;
        $this->fecha_devolucion = $f_devolucion;
        $this->Devuelto = $devuelto;
    }
    public function setC_Libro($libro)
    {
        $this->Cod_libro = $libro;
    }
    public function setC_Usuario($usuario)
    {
        $this->Cod_usuario = $usuario;
    }
    public function setFSalida($salida)
    {
        $this->Fecha_salida = $salida;
    }
    public function setFMaxDev($f_max_dev)
    {
        $this->Fecha_maxima_dev = $f_max_dev;
    }
    public function setFDevolucion($f_dev)
    {
        $this->Fecha_devolucion = $f_dev;
    }
    public function setDevuelto($devuelto)
    {
        $this->Devuelto = $devuelto;
    }
    public function getNumPedido()
    {
        return $this->Num_pedido;
    }
    public function getCLibro()
    {
        return $this->Cod_libro;
    }
    public function getCUsuario()
    {
        return $this->Cod_usuario;
    }
    public function getFSalida()
    {
        return $this->Fecha_salida;
    }
    public function getFMaxDev()
    {
        return $this->Fecha_maxima_dev;
    }
    public function getFDevolucion()
    {
        return $this->Fecha_devolucion;
    }
    public function getDevuelto()
    {
        return $this->Devuelto;
    }


    public function toArray() /*lo usaremos para crear el método save() en queryBuilder*/
    {
        return [
            'Num_pedido' => $this->getNumPedido(),
            'Cod_libro' => $this->getCLibro(),
            'Cod_usuario' => $this->getCUsuario(),
            'Fecha_salida' => $this->getFSalida(),
            'Fecha_maxima_dev' => $this->getFMaxDev(),
            'Fecha_devolucion' => $this->getFDevolucion(),
            'Devuelto' => $this->getDevuelto()
        ];
    }
}
