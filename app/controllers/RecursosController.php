<?php

namespace App\controllers;

use CG\Controller;
use App\models\GuiaModel;

class RecursosController extends Controller
{
    public function links()
    {
        $this->view("recursos/links");
    }

    public function guias()
    {
        $guiaModel = new GuiaModel();
        $dados = $guiaModel->getAll();

        $this->view("recursos/guias",['guias' => $dados]);
    }

    public function create()
    {
        echo "Pagina de Registro";
    }
}
