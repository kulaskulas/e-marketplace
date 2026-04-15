<?php

// require_once __DIR__ . '/../core/Env.php';
// require_once __DIR__ . '/../core/Database.php';
// require_once __DIR__ . '/../core/Router.php';
require_once __DIR__ .'/../vendor/autoload.php';
$routes = require_once __DIR__ . '/../routes/web.php';

use App\Core\Env;
use App\Core\Database;
use App\Core\Router;

$env = Env::load(__DIR__ . '/../.env');

$router = new Router();

$routes($router);

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$router->dispatch($uri);

// $db = Database::getInstance();

// echo "DB CONNECTED ✔";

// // var_dump($_ENV);
// exit;
// echo "test";