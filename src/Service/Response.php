<?php

namespace Leo\SevenGraus\Service;

class Response
{
    public array $serverResponse;
    private string $contentype;
    private string $body;

    public function responseJson()
    {
        $this->contentType = 'application/json';
        $this->body = json_encode($this->serverResponse);
    }

    public function flush()
    {
        if (array_key_exists("status_code", $this->serverResponse)) {
            http_response_code(404);
        }

        header("Content-Type: {$this->contentType}");
        echo $this->body;
        exit();
    }
}
