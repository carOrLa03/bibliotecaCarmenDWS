<?php

$consulta = new QueryBuilder(Conexion::make());
$arrayConstructor = array("id", "nombre", "descripcion", "archivo");
$colaboradores = $consulta->findAll("colaboradores", "Colaborador", $arrayConstructor);

$colaboradores = mezclar($colaboradores);
// bucle para recorrer un array de colaboradores y muestra su imagen asociada
foreach ($colaboradores as $colaborador) {
    $ruta = $colaborador->getUrlImagen();
    echo "<img src='$ruta' alt='' class='img_colaboradores' ></img>";
}
