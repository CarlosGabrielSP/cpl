<?php

namespace App\models;

use CG\Model;

class GuiaModel extends Model
{
    public function getAll(){
        $sql = "SELECT * FROM guias";
        $result = $this->conexao->query($sql);
        $arrayGuias = $result->fetch_all(MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($this->conexao);
        return $arrayGuias;
    }
}