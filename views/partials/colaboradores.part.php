<?php

foreach ($colaboradores as $colaborador) {
    $ruta = $colaborador->getUrlImagen();
    echo "<img src='$ruta' alt='' class='img_colaboradores' ></img>";
}
