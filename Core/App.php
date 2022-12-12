<?php
namespace biblioteca\Core;
use biblioteca\App\exceptions\AppException;
use biblioteca\Core\Database\Conexion;
// clase donde guardaremos los diferentes objetos en un array contenedor
class App
{
    private static $contenedor = [];
    // función que permite añadir objetos al contenedor, an la clave del array
    // que pasamos por parámetro
    public static function bind($clave, $valor)
    {
        static::$contenedor[$clave] = $valor;
    }

    // nos devuelve el elemento solicitado al contenedor de objetos mediante la clave

    /**
     * @throws AppException
     */
    public static function get($clave)
    {
        if (!array_key_exists($clave, static::$contenedor)) {
            throw new AppException('No se ha encontrado la clave' . $clave . 'en el contenedor');
        }
        return static::$contenedor[$clave];
    }

    public static function getConexion()
    {
        if (!array_key_exists('conexion', static::$contenedor)) {
            static::$contenedor['conexion'] = Conexion::make();
        }
        return static::$contenedor['conexion'];
    }
}
