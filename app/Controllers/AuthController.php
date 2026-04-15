<?php

namespace App\Controllers;

use App\Models\User;

class AuthController {

  public $userModel;

  public function __construct() {
    $this->userModel = new User();
  }

  public function login() {
    echo "Login Page";
  }

  public function register() {
    $data = [
      'name' => $_POST['name'] ?? '',
      'email' => $_POST['email'] ?? '',
      'password' => $_POST['password'] ?? '',
    ];

    $result = $this->userModel->register($data);
    var_dump($result);
    exit;
  }
}