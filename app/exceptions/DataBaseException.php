<?php
namespace biblioteca\App\exceptions;
use Exception;

class DataBaseException extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}
