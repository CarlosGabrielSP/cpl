<?php

namespace App\models;

use CG\Model;

class SqlModel extends Model
{
    public function executa_sql(String $query){
        $query = trim($query);
        $sth = $this->conexao->prepare($query);
        if($sth->execute()){
            return ['resultado' => true, "msg" => "Comando SQL executado"];
        }
        return ['resultado' => false, "msg" => "Não foi possível executar o comando SQL"];
    }
}
