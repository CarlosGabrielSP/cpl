<?php

$rotas['/'] = [
    'GET' => [
        'controller' => App\controllers\AppController::class,
        'action' => 'index'
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

$rotas['/recursos/links'] = [
    'GET' => [
        'controller' => App\controllers\LinksController::class,
        'action' => 'links'
    ]
];
$rotas['/recursos/links/novo'] = [
    'GET' => [
        'controller' => App\controllers\LinksController::class,
        'action' => 'form_novoLink'
    ],
    'POST' => [
        'controller' => App\controllers\LinksController::class,
        'action' => 'gravaLink'
    ]
];

$rotas['/teste'] = [
    'GET' => [
        'controller' => App\controllers\LinksController::class,
        'action' => 'teste'
    ]
];

return $rotas; 
