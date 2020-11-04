<?php

namespace CG;

class Model
{
   protected $conexao;
   
   function __construct()
   {
       $this->conexao = Conexao::con_mysqli();
   }
}