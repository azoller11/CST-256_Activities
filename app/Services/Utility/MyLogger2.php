<?php

use App\Services\Utility\ILogger;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class MyLogger2 implements ILogger {
    public function debug()
    {}

    static function getLogger()
    {
        // Create the logger
        $logger = new Logger('my_logger');
        // Now add some handlers
        $logger->pushHandler(new StreamHandler(__DIR__.'/my_app.log', Logger::DEBUG));
        $logger->pushHandler(new FirePHPHandler());
        
        // You can now use your logger
        $logger->info('My logger is now ready');
        
    }

    public function warning()
    {}

    public function error()
    {}

    public function info()
    {}

    
}
