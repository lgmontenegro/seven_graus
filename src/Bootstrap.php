<?php
namespace Leo\SevenGraus;

use Leo\SevenGraus\Service\Server;
use Leo\SevenGraus\Service\Handler;

class Bootstrap
{
    public Server $server;
    
    public function __construct()
    {
        $this->server = new Server();
    }

    public function addHandler(Handler $handler)
    {
        $this->server->stackHandler($handler);
    }
}
