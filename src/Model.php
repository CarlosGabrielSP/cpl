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

     public function getTabela()
     {
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

     public function buscaUltimo()
     {
          $DAO = new DAO($this);
          return $DAO->buscaUltimo_DAO();
     }

     public function gravaNovo($valores)
     {
          foreach ($valores as $i => $val) {
               if(is_string($val)) $valores[$i] = "'" . $val . "'";
          }
          $str_colunas = implode(',', array_keys($valores));
          $str_valores = implode(",",$valores);
          $DAO = new DAO($this);
          return $DAO->gravaNovo_DAO($str_colunas, $str_valores);
     }
}
