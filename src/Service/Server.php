<?php

namespace Leo\SevenGraus\Service;

class Server
{
    private int $port;
    
    public function __construct(int $port)
    {
        $this->port = $port;
    }

    public function endpoint()
    {
    }
}
