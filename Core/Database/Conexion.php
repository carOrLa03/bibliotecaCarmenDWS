<?php
namespace biblioteca\Core\Database;
use biblioteca\App\exceptions\AppException;
use biblioteca\Core\App;
use PDO;
use PDOException;

class Conexion
{
    /**
     * @throws AppException
     */
    public static function make(): PDO
    { //funcion estática!!
        try {
            $config  = App::get('config')['database'];
            $conexion = new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['opciones']
            );
        } catch (PDOException $PDOExcepetion) { //las excepciones se muestran de manera automática
            throw new AppException('La conexión con la base de datos no se ha podido realizar.');
        }

        return $conexion;
    }
}
