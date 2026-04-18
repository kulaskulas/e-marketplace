<?php

namespace App\Controllers;

use App\Core\Controller;

// require_once __DIR__ .'/../Serivces/AuthService.php';

use App\Models\User;
use App\Services\AuthService;

class AuthController extends Controller {

  public $userModel;
  public $authService;


  public function __construct() {
    $this->userModel = new User();
    $this->authService = new AuthService();
  }

  public function index() {
    $this->render('index');
  } 

  public function middleware() {
    echo "you are not allowed to access this page";
  } 

  public function loginPage() {
    $this->render('auth/login');
  }

  public function login() {
    $data = [
      'email' => $_POST['email'] ?? '',
      'password' => $_POST['password'] ?? '',
    ];

    $user = $this->authService->login($data);

    if (!$user) {
      header("Location: /login-page?error=Invalid credentials");
      exit;
    }

    session_regenerate_id(true);
    // var_dump(session_id());
    // var_dump($user);

    // store session
    $_SESSION['user'] = [
      'id' => $user['id'],
      'email' => $user['email']
    ];

     header("Location: /dashboard");
  }

  public function logout() {
     // clear session data
    $this->authService->logout();
    header("Location: /login-page");
    exit; 
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