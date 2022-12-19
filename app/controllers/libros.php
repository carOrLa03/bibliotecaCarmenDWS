<?php
use biblioteca\App\repository\LibrosRepository;
use biblioteca\Core\App;

require_once __DIR__ . "/../views/partials/menu.part.php";

$libRepositorio = App::getRepository(LibrosRepository::class);

require_once __DIR__ . "/../views/libros.view.php";
