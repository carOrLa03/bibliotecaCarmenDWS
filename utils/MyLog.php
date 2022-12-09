<?php
Class MyLog{
    private $log;

    private function __construct($filename){
        $this->log = new Monolog\Logger('name');
        $this->log->pushHandler(new Monolog\Handler\StreamHandler($filename, Monolog\Level::Info));
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
