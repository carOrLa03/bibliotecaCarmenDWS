<?php
require_once "./entity/Colaboradores.php";

$colaboradores = array(
    new Colaborador("museoCiencia.jpg", "Museo de Ciencias de Valencia"),
    new Colaborador("asocPlaza.jpg", "Asociacion Plaza Redonda de Valencia"),
    new Colaborador("metropolitan.jpg", "Asoc. Metropolitan de Madrid")
);

shuffle($colaboradores);
foreach ($colaboradores as $colaborador) {
    $ruta = $colaborador->getUrlImagen();
    $descripcion = $colaborador->getDescripcion();
    echo "<img src='$ruta' alt='$descripcion' width='40rem' height='40rem'></img><br>
    $descripcion";
}
