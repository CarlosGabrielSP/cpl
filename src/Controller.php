<?php

namespace CG;

abstract class Controller
{
    protected function view(String $view = null, String $opcoes = null, array $dados = [])
    {
        extract($dados);
        if($opcoes){
            $opcoes = __DIR__ . "/../app/views/includes/opcoes/opt_" . $opcoes . ".tpl.php";
        }
        require __DIR__ . "/../app/views/" . $view . ".tpl.php";
    }
}
