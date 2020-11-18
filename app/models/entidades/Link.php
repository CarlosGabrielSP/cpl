<?php

namespace App\models\entidades;

use App\models\DAOs\LinkDAO;
use CG\Model;

class Link extends Model
{
    private $id;
    private $nome;
    private $endereco; 

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

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
        return $this;
    }

    public function buscaPorGrupo($idGrupo)
    {
        $linkDAO = new LinkDAO($this);
        return $linkDAO->buscaPorGrupo_DAO($idGrupo);
    }
}