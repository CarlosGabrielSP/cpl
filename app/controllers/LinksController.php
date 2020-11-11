<?php

namespace App\controllers;

use App\models\Grupo_link;
use App\models\Link;
use CG\Controller;

class LinksController extends Controller
{
    public function links()
    {
        
        $this->view("recursos/links", "links");
    }

    public function guias()
    {
        $this->view("recursos/nova-guia", "links");
    }

    public function teste(){
        $grupo_link_Model = new Grupo_link;
        
        $this->view("teste", null, ['dados' => $grupo_link_Model->buscaTodos()]);
    }
}
