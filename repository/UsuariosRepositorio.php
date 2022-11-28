<?php
require_once __DIR__ . "/../database/queryBuilder.php";
class UsuariosRepository extends QueryBuilder
{
    public function __construct($tabla = 'usuarios', $entidad = 'Usuarios', $argumentos = ['Nombre', 'Apellidos', 'DNI', 'Domicilio', 'Poblacion', 'Fecha_nacimiento'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}
