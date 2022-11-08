<?php
// clase para subir imagenes al servidor
class File
{
    private $file;

    public function __construct($nombre)
    {
        $this->file = $_FILES[$nombre];
    }

    public function saveUploadFile($rutaDestino)
    {
    }
}
