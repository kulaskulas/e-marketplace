<?php

use App\Controllers\AuthController;
use App\Middleware\AuthMiddleware;
use  App\Middleware\GuestMiddleware;

return function($router) {
  $router->post('/register', [AuthController::class, 'register']);
  $router->post('/login', [AuthController::class, 'login']);
  $router->post('/logout', [AuthController::class, 'logout']);


  $router->get('/dashboard', [AuthController::class, 'index', AuthMiddleware::class]);

  // $router->get('/middleware', [AuthController::class, 'middleware']);
  $router->get('/login-page', [AuthController::class, 'loginPage', GuestMiddleware::class]);
    
};
