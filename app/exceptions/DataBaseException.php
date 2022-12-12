<?php
namespace bibliotecaCarmenDWS\app\exceptions;
class DataBException extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}
