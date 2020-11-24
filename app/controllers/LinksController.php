<?php

namespace App\controllers;

use CG\Controller;
use CG\Utilidade;
use App\models\entidades\Grupo_link;
use App\models\entidades\Link;

class LinksController extends Controller
{
    public function links()
    {
        $grupoModel = new Grupo_link;
        $listaGrupos = $grupoModel->buscaGruposDeLinks();
        $this->view("recursos/links", "opc_links", ['listaGrupos' => $listaGrupos]);
    }

    public function form_novoLink(){
        $grupoModel = new Grupo_link;
        $listaGrupos = $grupoModel->buscaTodos();
        $aviso = ['status' => 'success', 'msg' => 'Gravado com sucesso'];
        $this->view("recursos/novo-link", "opc_links", ['listaGrupos' => $listaGrupos]);
    }

    public function gravaLink(){
        $grupoModel = new Grupo_link;
        $linkModel = new Link;

        if(isset($_REQUEST['novo_grupo'])){
            $grupo = ['nome' => array_pop($_REQUEST)];
            $grupoModel->gravaNovo($grupo);
            $grupoModel = $grupoModel->buscaUltimo();
            $_REQUEST['grupo_link_id'] = $grupoModel->getId();
        }

        $aviso = Utilidade::AvisoGravaNovo($linkModel->gravaNovo($_REQUEST));
        $listaGrupos = $grupoModel->buscaTodos();
        $this->view("recursos/novo-link", "opc_links", ['listaGrupos' => $listaGrupos, 'aviso' => $aviso]);
    }

    public function teste(){

    }
}
