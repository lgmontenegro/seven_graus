<?php

namespace Leo\SevenGraus\Service;

use Leo\SevenGraus\Service\Request;
use Leo\SevenGraus\Service\Response;

class Handler
{
    public string $method;
    public string $endpoint;
    public $handlerFunction;

    public function checkEndpoint(string $requestedPath): bool
    {
        return $this->endpoint == $requestedPath;
    }

    public function handle(Request &$request, Response &$response)
    {
        $response->serverResponse = ($this->handlerFunction)($request->queryString);
    }
}
