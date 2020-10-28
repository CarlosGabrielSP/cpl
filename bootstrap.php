<?php

use CG\Router;

require_once __DIR__ . "/vendor/autoload.php";

$rotas = require_once __DIR__ . "/rotas.php";

$router = new Router($rotas);

$router->handler();
