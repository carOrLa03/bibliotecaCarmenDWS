<?php

// CONEXION A LA BBD BIBLIOTECA PARA INSERTAR EN LA BBDD  A LOS COLABORADORES
// excepciones
require_once("./exceptions/AppException.php");
require_once "./exceptions/DataBaseException.php";
require_once "./exceptions/FileException.php";

require_once "./entity/Colaboradores.php";
require_once "./utils/file.php";
require_once "./utils/utils.php";

require_once("./database/conexion.php");
// mostrar los colaboradores
require_once("./database/queryBuilder.php");

// require_once("./core/App.php");
// // recuperamos el array con los parametros de configuracion
// $config = require_once("./app/config.php");
// App::bind('config', $config);
// $conexion = App::getConexion();


require_once "./views/index.view.php";
