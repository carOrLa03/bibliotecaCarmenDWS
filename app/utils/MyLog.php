<?php
namespace biblioteca\App\Utils;
use Monolog\Logger;
use Monolog\Level;
use Monolog\Handler\StreamHandler;
Class MyLog{
    private $log;

    private function __construct($filename){
        $this->log = new Logger('name');
        $this->log->pushHandler(new StreamHandler($filename, Level::Info));
    }
    public static function load($filename): MyLog
    {
        return new MyLog($filename);
    }
    public function add($message): void
    {
        $this->log->info($message);
    }
}
