<?php

namespace CG;

use PDO;

class DAO
{
    protected $conexao;
    protected $model;

    function __construct(Model $model)
    {
        $this->conexao = Conexao::getConexao();
        $this->model = $model;
    }

    protected function getConexao(){
        return $this->conexao;
    }

    public function buscaTodos_DAO()
    {
        $qry = 'SELECT * FROM ' . $this->model->getTabela();
        $sth = $this->conexao->prepare($qry);
        $sth->execute();
        // var_dump($sth->fetchAll(PDO::FETCH_CLASS, get_class($this->model)));
        return $sth->fetchAll(PDO::FETCH_CLASS, get_class($this->model));
    }

    public function buscaPorId_DAO(int $id)
    {
        $qry = 'SELECT * FROM ' . $this->model->getTabela() . 'WHERE id = :id';
        $sth = $this->conexao->prepare($qry);
        $sth->bindParam(':id', $id);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_CLASS, get_class($this->model));
    }
}