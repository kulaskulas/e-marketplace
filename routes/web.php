<?php

use App\Controllers\AuthController;

return function($router) {
  $router->post('/register', [AuthController::class, 'register']);
  $router->get('/logins', [AuthController::class, 'login']);
    
};
