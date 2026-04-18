<?php
namespace App\Core;

class Controller {
  public function render($view, $data = []) {
    $viewPath = __DIR__ . '/../views/' . $view . '.php';
    // Implementation for rendering view
    if (file_exists($viewPath)) {
      require $viewPath;
    } else {
      echo "View not found: {$view}";
    }
  }
}