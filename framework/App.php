<?php

namespace Framework;

class App
{
    public Request $request;
    public static function make(Request $request): self
    {
        $app = new self();
        $app->request = $request;
        return $app;
    }

    public function run(): void
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $body = $this->request->getBody();

        $path_parts = explode('/', $path);
        $controller = empty($path_parts[1]) ? 'site' : $path_parts[1];
        $controller = ucwords($controller);
        $controller = "controllers\\{$controller}Controller";
        if(!class_exists($controller)) {
            echo (new Response('Page not found'))->send();
            return;
        }
        $action = empty($path_parts[2]) ? 'index' : $path_parts[2];
        $action = "action" . ucwords($action);
        if(!method_exists($controller, $action)) {
            echo (new Response('Page not found'))->send();
            return;
        }

        echo (new $controller())->$action($body)->send();
    }
}