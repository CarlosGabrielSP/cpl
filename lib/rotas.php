<?php

$rotas['/'] = [
    'GET' => [
        'controller' => App\controllers\AppController::class,
        'action' => 'index'
    ]
];

$rotas['/recursos/links'] = [
    'GET' => [
        'controller' => App\controllers\LinksController::class,
        'action' => 'links'
    ]
];
$rotas['/recursos/guias'] = [
    'GET' => [
        'controller' => App\controllers\LinksController::class,
        'action' => 'guias'
    ]
];

$rotas['/sql'] = [
    'GET' => [
        'controller' => App\controllers\AppController::class,
        'action' => 'form_SQL'
    ],
    'POST' => [
        'controller' => App\controllers\AppController::class,
        'action' => 'executa_SQL'
    ]
];

$rotas['/teste'] = [
    'GET' => [
        'controller' => App\controllers\LinksController::class,
        'action' => 'teste'
    ]
];
return $rotas; 
