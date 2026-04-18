<?php

namespace App\Models;

use App\Core\Database;

class User {

  private $db;

  public function __construct() {
    $this->db = Database::getInstance();
  }

  public function register($data) {
    $stmt = $this->db->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
    $stmt->execute([
      'name' => $data['name'],
      'email' => $data['email'],
      'password' => password_hash($data['password'], PASSWORD_BCRYPT),
    ]);

    return $this->db->lastInsertId();
  }

  public function findByEmail($email) {
    $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
    $stmt->execute(['email' => $email]);
    return $stmt->fetch();
  }
}