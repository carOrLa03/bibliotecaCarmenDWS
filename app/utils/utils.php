<?php
namespace biblioteca\App\Utils;
class Utils{
    // funcion para que cambie el color del menu en función de donde nos encontramos
    static function isActive($current_page)
    {
        $url_array = explode('/', $_SERVER['REQUEST_URI']);
        $url = end($url_array);
        if ($current_page == $url) {
            echo 'active';
        }
    }
// función para mezclar un array y que me devuelva un array con 3 elementos
    static function mezclar($array)
    {
        shuffle($array);
        $seleccion = array_chunk($array, 3);
        return $seleccion[0];
    }

// función para validar DNI
    static function valida_dni($dni): bool
    {
        $letter = substr($dni, -1);
        $numbers = substr($dni, 0, -1);

        if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numbers % 23, 1) == $letter && strlen($letter) == 1 && strlen($numbers) == 8) {
            return true;
        }
        return false;
    }

// función para validar fechas
    static function valida_fecha($fecha): bool
    {
        $dia = (int)substr($fecha, 0, 1);
        $mes = (int)substr($fecha, 3, 4);
        $ano = (int)substr($fecha, 6, 9);

        if (checkdate($dia, $mes, $ano)) {
            return true;
        }
        return false;
    }
//funcion para cambiar el número máximo de préstamos

    static function modificaNumMaxPrestamos($numMaxPrestamos){
        $arrayNum = array('maxprestamos'=>$numMaxPrestamos);
        file_put_contents('Core/Database/numMaxPrestamos.json', json_encode($arrayNum));
    }
    static function numMaxPrestamos(){
        $numMPrestamos = json_decode('Core/Database/numMaxPrestamos.json', true);
        return $numMPrestamos->{'maxprestamos'};
    }
}
