<?php
namespace biblioteca\App\Utils;
use biblioteca\App\exceptions\FileException;
// clase para subir imagenes al servidor


class File
{
    private $file;

    /**
     * @throws FileException
     */
    public function __construct($nombre_img)
    {
        $tipo = $_FILES[$nombre_img]['type'];
        // si el tipo de archivo no es igual a los descritos abajo lanza una excepción
        if (!($tipo == 'image/jpg' || $tipo == 'image/jpeg' || $tipo == 'image/png' || $tipo == 'image/gif')) {
            throw new FileException("Los archivos no son del tipo jpg, jpeg, png, gif.");
        }
        $this->file = $_FILES[$nombre_img];
    }

    /**
     * @throws FileException
     */
    public function saveUploadFile($rutaDestino)
    {
        $rutaCompleta = $rutaDestino . $this->file['name'];
        // si existe el archivo se ha de renombrar el archivo
        // mientras el archivo exista creo un número aleatorio que lo uno al nombre del archivo hasta que no exista esa ruta
        while (is_file($rutaCompleta)) {
            $nombreNew = file . phprandom_int(1, 1000);
            $rutaCompleta = $rutaDestino . $nombreNew;
            $this->file['name'] = $nombreNew;
        }
        // mover el archivo a la carpeta de colaboradores, de fallar salta una excepción
        if (!move_uploaded_file($this->file['tmp_name'], $rutaCompleta)) {
            throw new FileException("No se ha completado la subida de los archivos.");
        }
    }
    public function getFileName()
    {
        return $this->file['name'];
    }

}
