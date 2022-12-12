<?php
namespace biblioteca\Core\Database;
/*Interfaz que nos permitirá definir methods que debe tener una clase
sin necesidad de definirlos previamente.
Las entidades implementan esta interfaz, de tal manera que todos los métodos de esta
interfaz deben estar en las entidades.*/

interface IEntity
{
    public function toArray();
}
