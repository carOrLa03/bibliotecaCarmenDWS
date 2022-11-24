<?php
require_once __DIR__ . "/../../database/lentity.php";
require_once __DIR__ . "/../../entity/Colaboradores.php";
require_once __DIR__ . "/../../entity/Libros.php";
require_once __DIR__ . "/../../utils/utils.php";
require_once __DIR__ . "/../../exceptions/DataBaseException.php";

// mostrar los colaboradores
require_once __DIR__ . "/../../database/queryBuilder.php";
require_once __DIR__ . "/../../repository/ColaboradorRepositorio.php";
require_once __DIR__ . "/../../repository/LibrosRepository.php";
require_once __DIR__ . "/../../core/bootstrap.php";
require_once __DIR__ . "/../views/partials/menu.part.php";

$libRepositorio = new LibrosRepository();

require_once __DIR__ . "/../views/libros.view.php";
