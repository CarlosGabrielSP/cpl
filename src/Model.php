<?php

namespace CG;

use PDO;
use ReflectionClass;

class Model
{
     protected $conexao;
     protected $tabela;

     function __construct()
     {
          $ref = new ReflectionClass($this);
          $classe = $ref->getShortName();
          $this->tabela = strtolower($classe);
          $this->conexao = Conexao::getConexao();
     }

     public function buscaTodos()
     {
          $sql = "SELECT * FROM " . $this->tabela;
          return $this->conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
     }

     public function buscaPorId(int $id)
     {
          $sql = "SELECT * FROM " . $this->tabela . " WHERE id=" . $id;
          return $this->conexao->query($sql)->fetch();
     }
}
