<?php

// funcion para que cambie el color del menu en función de donde nos encontramos
function isActive($currect_page)
{
    $url_array = explode('/', $_SERVER['REQUEST_URI']);
    $url = end($url_array);
    if ($currect_page == $url) {
        echo 'active';
    }
}
// función para mezclar un array y que me devuelva un array con 3 elementos
function mezclar($array)
{
    shuffle($array);
    $seleccion = array_chunk($array, 3);
    return $seleccion[0];
}

// función para validar DNI
function valida_dni($dni)
{
    $letter = substr($dni, -1);
    $numbers = substr($dni, 0, -1);

    if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numbers % 23, 1) == $letter && strlen($letter) == 1 && strlen($numbers) == 8) {
        return true;
    }
    return false;
}

// funciónes para validar fechas
function valida_fecha($fecha)
{
    $dia = (int)substr($fecha, 0, 1);
    $mes = (int)substr($fecha, 3, 4);
    $año = (int)substr($fecha, 6, 9);

    if (checkdate($dia, $mes, $año)) {
        return true;
    }
    return false;
}
