<?php

namespace Framework;

class Request
{
    public string $method;
    public string $path;
    public array $body;
    public static function capture(): self
    {
        $request = $_SERVER['REQUEST_URI'];
        $app = new self();
        $app->method = $_SERVER['REQUEST_METHOD'];
        $app->path = parse_url($request, PHP_URL_PATH);
        $app->body = $_REQUEST;
        return $app;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getBody(): array
    {
        return $this->body;
    }
}