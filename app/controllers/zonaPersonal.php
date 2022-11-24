<?php
// excepciones
require_once __DIR__ . "/../../exceptions/AppException.php";
require_once __DIR__ . "/../../exceptions/DataBaseException.php";
require_once __DIR__ . "/../../exceptions/FileException.php";
require_once __DIR__ . "/../../database/lentity.php";
require_once __DIR__ . "/../../entity/Colaboradores.php";
require_once __DIR__ . "/../../entity/Usuarios.php";
require_once __DIR__ . "/../../utils/file.php";
require_once __DIR__ . "/../../utils/utils.php";

// mostrar los colaboradores
require_once __DIR__ . "/../../database/queryBuilder.php";
require_once __DIR__ . "/../../repository/ColaboradorRepositorio.php";
require_once __DIR__ . "/../../repository/UsuariosRepositorio.php";
require_once __DIR__ . "/../../core/bootstrap.php";

$usuarioRepositorio = new UsuariosRepository();

require_once __DIR__ . "/../views/zonaPersonal.view.php";
