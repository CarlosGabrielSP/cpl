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
    protected function rotaExiste($rota)
    {
        return isset($this->rotas[$rota]);
    }

    /*Função recupera uma rota informada, se existir*/
    protected function getInfoRota($rota)
    {
        if($this->rotaExiste($rota)){
            return $this->rotas[$rota];
        }
    }

    public function handler()
    {
        $rota_acessada = $_SERVER['PATH_INFO'] ?? '/';
        if(strlen($rota_acessada) > 1) $rota_acessada = rtrim($rota_acessada,'/');
        if($rota = $this->getInfoRota($rota_acessada)){
            $controller = new $rota['controller'];
            $action = $rota['action'];
            $controller->$action();
        } else {
            echo "Pagina não encontrada";
        }
    }
}
