<?php

namespace Framework;

class Response
{
    public array|string $body;

    public function __construct($body)
    {
        $this->body = $body;
    }

    public function send(): string
    {
        return is_array($this->body) ? implode('', $this->body) : $this->body;
    }
}