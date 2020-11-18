<?php

namespace App\models\entidades;

use App\models\DAOs\Grupo_linkDAO;
use CG\Model;

class Grupo_link extends Model
{
    private $id;
    private $nome;
    private $cor;
    private $links = [];

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getCor(){
        return $this->cor;
    }

    public function setCor($cor){
        $this->cor = $cor;
        return $this;
    }

    public function getLinks(){
        return $this->links;
    }

    public function setLinks($arrayLinks){
        $this->links = $arrayLinks;
        return $this;
    }

    public function buscaGruposDeLinks()
    {
        $grupoDAO = new Grupo_linkDAO($this);
        $listaGrupos = $grupoDAO->buscaTodos_DAO();
        foreach ($listaGrupos as $grupo) {
            $linkModel = new Link();
            $listaLinks = $linkModel->buscaPorGrupo($grupo->getId());
            $grupo->setLinks($listaLinks);
        }
        return $listaGrupos;
    }
}
