<?php

namespace App\controllers;

use CG\Controller;

class AppController extends Controller
{
    public function index()
    {
        $this->view("app/index");
    }

    public function create()
    {
        echo "Pagina de Registro";
    }
}
