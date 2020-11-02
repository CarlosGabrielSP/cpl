<?php

namespace CG;

class Controller
{
    protected function view(String $view = null, array $dados = [])
    {
        extract($dados);
        require __DIR__ . "/../templates/" . $view . ".tpl.php";
    }
}
