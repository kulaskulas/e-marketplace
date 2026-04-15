<?php

namespace App\Core;

class Router {
  public $routes = [];

  public function get($uri, $action) {
    $this->routes['GET'][$uri] = $action;
  }

  public function post($uri, $action) {
    $this->routes['POST'][$uri] = $action;
  }

  public function dispatch($uri) {

    $method = $_SERVER['REQUEST_METHOD'];

    $action = $this->routes[$method][$uri] ?? null;

    if (!$action) {
      http_response_code(404);
      echo "404 Not Found";
      return;
    }

    [$controller, $methodName] = $action;

    $controller = new $controller();
    return $controller->$methodName();
  }
}
