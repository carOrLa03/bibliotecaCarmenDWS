<?php

use biblioteca\App\repository\ColaboradorRepositorio;
use biblioteca\App\Utils\Utils;

$consulta = new ColaboradorRepositorio();
$colaboradores = $consulta->findAll();

$colaboradores = Utils::mezclar($colaboradores);
// bucle para recorrer un array de colaboradores y muestra su imagen asociada
foreach ($colaboradores as $colaborador) {
    $ruta = $colaborador->getUrlImagen();
    echo "<img src='$ruta' alt='' class='img_colaboradores' >";
}
