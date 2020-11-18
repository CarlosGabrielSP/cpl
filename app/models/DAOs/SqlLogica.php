<?php 

namespace App\logicas;

use CG\Conexao;

class SqlLogica
{
    public static function executa_sql(String $query){
        $cnx = Conexao::getConexao();
        $query = trim($query);
        $sth = $cnx->prepare($query);
        
        if($sth->execute()){
            return ['resultado' => true, "msg" => "Comando SQL executado"];
        }
        return ['resultado' => false, "msg" => "Não foi possível executar o comando SQL"];
    }
}