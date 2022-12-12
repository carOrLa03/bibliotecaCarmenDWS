<?php
namespace biblioteca\App\repository;
use biblioteca\App\entity\Usuarios;
use biblioteca\Core\Database\QueryBuilder;

class UsuariosRepositorio extends QueryBuilder
{
    public function __construct($tabla = 'usuarios', $entidad = Usuarios::class, $argumentos = ['Nombre', 'Apellidos', 'DNI', 'Domicilio', 'Poblacion', 'Fecha_nacimiento'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}
