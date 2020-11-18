<?php 

namespace App\models\DAOs;

use CG\DAO;
use PDO;

class LinkDAO extends DAO
{
    public function buscaPorGrupo_DAO($idGrupo)
    {
        $qry = 'SELECT * FROM ' . $this->model->getTabela() . ' WHERE grupo_link_id = :id';
        $sth = $this->conexao->prepare($qry);
        $sth->bindParam(':id', $idGrupo);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_CLASS, get_class($this->model));
        // return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}