<?php

namespace App\controllers;

use CG\Controller;

class TesteController extends Controller
{
    public function index()
    {
        $this->view("home", ['nome' => $_GET['nome']]);
    }

    public function create()
    {
        echo "Pagina de Registro";
    }
}
