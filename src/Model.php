<?php

namespace CG;

use ReflectionClass;

class Model
{
     protected $tabela;

     function __construct()
     {
          $ref = new ReflectionClass($this);
          $classe = $ref->getShortName();
          $this->tabela = strtolower($classe);
     }

     public function getTabela(){
          return $this->tabela;
     }

     public function buscaTodos()
    {
        $DAO = new DAO($this);
        return $DAO->buscaTodos_DAO();
    }

    public function buscaPorId(int $id)
    {
          $DAO = new DAO($this);
          return $DAO->buscaPorId_DAO($id);
    }
}

