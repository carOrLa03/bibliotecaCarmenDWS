<?php

$colaboradores = $consulta->findAll();
var_dump($colaboradores);

$colaboradores = mezclar($colaboradores);
// bucle para recorrer un array de colaboradores y muestra su imagen asociada
foreach ($colaboradores as $colaborador) {
    $ruta = $colaborador->getUrlImagen();
    echo "<img src='$ruta' alt='' class='img_colaboradores' ></img>";
}
