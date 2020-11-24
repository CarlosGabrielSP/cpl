<?php

namespace CG;

abstract class Controller
{
    protected function view(String $view = null, String $menu_opcoes = null, array $dados = [])
    {
        extract($dados);
        if($menu_opcoes){
            $menu_opcoes = __DIR__ . "/../app/views/menu/opcoes/" . $menu_opcoes . ".tpl.php";
        }
        require __DIR__ . "/../app/views/" . $view . ".tpl.php";
    }
}
