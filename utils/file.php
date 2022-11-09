<?php
// clase para subir imagenes al servidor
require_once "./exceptions/FileException.php";
class File
{
    private $file;

    public function __construct($nombre_img)
    {
        $tipo = $_FILES[$nombre_img]['type'];
        // si el tipo de archivo no es igual a los descritos abajo lanza una excepción
        if ($tipo != 'image/jpg' || $tipo != 'image/jpeg' || $tipo != 'image/png' || $tipo != 'image/gif') {
            throw new FileException("Los archivos no son del tipo jpg, jpeg, png, gif.");
        }
        $this->file = $_FILES[$nombre_img];
    }

    public function saveUploadFile($rutaDestino)
    {
        $rutaCompleta = $rutaDestino . $this->file['name'];
        if (is_file($rutaCompleta)) {
            throw new FileException("El archivo ya existe.");
        }
        if (!move_uploaded_file($this->file['tmp_name'], $rutaCompleta)) {
            throw new FileException("No se ha completado la subida de los archivos.");
        }
    }
}
