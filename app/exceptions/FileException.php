<?php
namespace bibliotecaCarmenDWS\app\exceptions;
class FileException extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}
