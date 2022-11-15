<?php

/*Interefaz que nos permitirá definir metodos que debe tener una clase
sin necesidad de definirlos previamente.
Las entidades implementan está interfaz, de tal manera que todos los métodos de esta 
interfaz deben estar en las entidades.*/

interface IEntity
{
    public function toArray();
}
