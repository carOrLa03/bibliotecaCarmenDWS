<?php

// CONEXION A LA BBD BIBLIOTECA PARA INSERTAR EN LA BBDD  A LOS COLABORADORES
// excepciones
require_once __DIR__ . "../../../exceptions/AppException.php";
require_once __DIR__ . "../../../exceptions/DataBaseException.php";
require_once __DIR__ . "../../../exceptions/FileException.php";
require_once __DIR__ . "../../../database/lentity.php";
require_once __DIR__ . "../../../entity/Colaboradores.php";
require_once __DIR__ . "../../../utils/file.php";
require_once __DIR__ . "../../../utils/utils.php";

require_once __DIR__ . "../../../database/conexion.php";
// mostrar los colaboradores
require_once __DIR__ . "../../../database/queryBuilder.php";

require_once __DIR__ . "../../views/index.view.php";
