<?php

$rotas['/'] = [
    'GET' => [
        'controller' => App\controllers\TesteController::class,
        'action' => 'index'    
    ]
];
$rotas['/cadastrar'] = [
    'GET' => [
        'controller' => App\controllers\TesteController::class,
        'action' => 'create'
    ]
];

return $rotas; 
