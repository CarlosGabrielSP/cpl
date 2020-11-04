<?php

$rotas['/'] = [
    'GET' => [
        'controller' => App\controllers\AppController::class,
        'action' => 'index'
    ]
];
$rotas['/recursos/links'] = [
    'GET' => [
        'controller' => App\controllers\RecursosController::class,
        'action' => 'links'
    ]
];
$rotas['/recursos/guias'] = [
    'GET' => [
        'controller' => App\controllers\RecursosController::class,
        'action' => 'guias'
    ]
];

return $rotas; 
