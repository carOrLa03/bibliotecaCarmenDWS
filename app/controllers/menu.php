<?php
require_once "./entity/Colaboradores.php";
require_once "./utils/utils.php";
require_once "./database/conexion.php";
require_once "./exceptions/DataBaseException.php";


// mostrar los colaboradores
require_once("./database/queryBuilder.php");
require_once __DIR__ . "/repository/ColaboradorRepositorio.php";

require_once __DIR__ . "/../../core/App.php";
// recuperamos el array con los parametros de configuracion
$config = require_once __DIR__ . "/../config.php";

App::bind('config', $config);
$conexion = App::getConexion();
require_once "../controllers/views/menu.view.php";
