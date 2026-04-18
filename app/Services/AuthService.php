<?php

namespace App\Services;

use App\Models\User;

class AuthService {

  private $userModel;

  public function __construct() {
    $this->userModel = new User();  
  }

  public function login($data) {

    $user = $this->userModel->findByEmail($data['email']);

    if (!$user || !password_verify($data['password'], $user['password'])) {
      return false;
    }

    return $user;
  }

  public function logout() {
    $_SESSION = [];
    session_destroy();
    if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
      );
    }

    return true;  
  }
} 