<?php
namespace bibliotecaCarmenDWS\Core;
class Request
{
    public static function uri()
    {
        // 'parse_utl()': analiza una URL y devuelve un array asociativo 
        // que contiene aquellos componentes presentes en la URL
        // separa la URL en las partes listadas
        // 'PHP_URL_PATH': elimina todo aquello que nos ea relativo al path
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }
}
