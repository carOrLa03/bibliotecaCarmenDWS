<?php
use bibliotecaCarmenDWS\App\repository\LibrosRepository;
require_once __DIR__ . "/../views/partials/menu.part.php";

$libRepositorio = new LibrosRepository();

require_once __DIR__ . "/../views/libros.view.php";
