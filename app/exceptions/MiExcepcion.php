<?php
namespace bibliotecaCarmenDWS\app\exceptions;
class MiExcepcion extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}
