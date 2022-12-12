<?php
namespace biblioteca\App\exceptions;
use Exception;

class MiExcepcion extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}
