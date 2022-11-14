<?php
class Conexion
{
    public static function make()
    { //funcion estática!!
        try {
            $config  = App::get('config')['database'];
            var_dump($config);
            $conexion = new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['opciones']
            );
        } catch (PDOException $PDOExcepetion) { //las excepciones se muestran de manera automática
            throw new AppException('La conexión con la base de datos no se ha podido realizar.');
        }

        return $config;
    }
}
