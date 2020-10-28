<?php

$rotas['/'] = [
    'controller' => App\controllers\TesteController::class,
    'action' => 'index'
];
$rotas['/cadastrar'] = [
    'controller' => App\controllers\TesteController::class,
    'action' => 'create'
];

return $rotas; 
