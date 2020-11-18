<?php

namespace App\controllers;

use CG\Controller;
use App\models\entidades\Grupo_link;
use App\models\entidades\Link;

class LinksController extends Controller
{
    public function links()
    {
        $grupoModel = new Grupo_link;
        $listaGrupos = $grupoModel->buscaGruposDeLinks();
        $this->view("recursos/links", null, ['listaGrupos' => $listaGrupos]);
    }

    public function teste(){
        $linkModel = new Grupo_link;
        $dados = $linkModel->buscaGruposDeLinks();
        // var_dump($dados);
        // $this->view("teste", null, ['dados' => $dados]);
    }
}
