<?php
namespace biblioteca\App\entity;
use biblioteca\Core\Database\IEntity;

class Mensajes implements IEntity
{
    private $nombre;
    private $mail;
    private $mensaje;

    public function __construct($nombre, $mail, $mensaje)
    {
        $this->nombre = $nombre;
        $this->mail = $mail;
        $this->mensaje = $mensaje;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setMail($mail)
    {
        $this->mail = $mail;
    }
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;
    }
    public function getNom()
    {
        return $this->nombre;
    }
    public function getMail()
    {
        return $this->mail;
    }
    public function getMensaje()
    {
        return $this->mensaje;
    }
    public function toArray() /*lo usaremos para crear el método save() en queryBuilder*/
    {
        return [
            'nombre' => $this->getNom(),
            'mail' => $this->getMail(),
            'mensaje' => $this->getMensaje()
        ];
    }
}
