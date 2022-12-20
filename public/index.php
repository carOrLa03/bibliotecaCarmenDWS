<?php

use biblioteca\Core\App;
use biblioteca\Core\Request;

try {

    require_once __DIR__ . "/../Core/bootstrap.php";
    // usamos este metodo para averiguar que controlador debemos llamar
    require App::get('router')->direct(Request::uri());
} catch (Exception $e) {
    echo $e->getMessage();
}
