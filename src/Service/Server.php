<?php

namespace Leo\SevenGraus\Service;

use Leo\SevenGraus\Service\Handler;
use Leo\SevenGraus\Service\Request;
use Leo\SevenGraus\Service\Response;

class Server
{
    private array $handlers;
    private Request $request;
    private Response $response;
        
    public function __construct()
    {
        $this->request = new Request();
        $this->response = new Response();
        $this->handlers = array();
    }

    public function stackHandler(Handler $handler)
    {
        $this->handlers[] = $handler;
    }

    public function response(string $contentType)
    {
        $this->request->queryString = $_GET;
        switch ($_SERVER["REQUEST_METHOD"]) {
            case 'GET':
                $this->get();
                break;

            case 'POST':
                $this->request->body = file_get_contents('php://input');
                $this->request->contentType = $_SERVER['CONTENT_TYPE'];
                $this->post();
                break;
            
            default:
                break;
        }

        switch ($contentType) {
            case 'json':
                $this->response->responseJson();
                break;
            
            default:
                # code...
                break;
        }

        $this->response->flush();
    }

    private function get()
    {
        $method = $_SERVER["REQUEST_METHOD"];

        foreach ($this->handlers as $endpoint) {
            if (strtolower($endpoint->method) == 'get') {
                if ($endpoint->checkEndpoint($_SERVER["PATH_INFO"])) {
                    $endpoint->handle($this->request, $this->response);
                }
            }
        }

        return $this->response;
    }

    private function post()
    {
        return;
    }
}
