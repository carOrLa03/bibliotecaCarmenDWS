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
