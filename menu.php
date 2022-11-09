<?php
require_once "./entity/Colaboradores.php";
require_once "./utils/utils.php";


$colaboradores = array(
    new Colaborador("museoCiencia.jpg", "Museo de Ciencias de Valencia"),
    new Colaborador("asocPlaza.jpg", "Asociacion Plaza Redonda de Valencia"),
    new Colaborador("metropolitan.jpg", "Asoc. Metropolitan de Madrid"),
    new Colaborador("cosmo.png", "Cosmopolitan"),
    new Colaborador("vogue.png", "Vogue"),
    new Colaborador("afindecuentos.jpg", "A fin de cuentos"),
    new Colaborador("imaginarium.jpg", "Imaginarium"),
    new Colaborador("vealia.jpg", "Vealia")
);

$colaboradores = mezclar($colaboradores);
require_once "./views/menu.view.php";
