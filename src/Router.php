<?php

namespace CG;

class Router
{
    /*Array que receberá todas as rotas com suas respectivas informações, Controller e Action.
    Exemplo: ['/users'] => ['controller' => 'UserController', 'action' => 'users']*/
    private $rotas = [];

    function __construct($rotas)
    {
        $this->rotas = $rotas;
    }

    /*Funcção verifica a existtência de determinada rota*/
    protected function rotaExiste($rota, $method)
    {
        return isset($this->rotas[$rota][$method]);
    }

    /*Função recupera uma rota informada, se existir*/
    protected function getInfoRota($rota, $method)
    {
        if($this->rotaExiste($rota, $method)){
            return $this->rotas[$rota][$method];
        }
    }

    public function handler()
    {
        $rota_acessada = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];
        if(strlen($rota_acessada) > 1) $rota_acessada = rtrim($rota_acessada,'/');
        if($infoRota = $this->getInfoRota($rota_acessada,$method)){
            $controller = new $infoRota['controller'];
            $action = $infoRota['action'];
            $controller->$action();
        } else {
            http_response_code(404);
            echo "Pagina não encontrada";
        }
    }
}
