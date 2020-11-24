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
        return $sth->fetchAll(PDO::FETCH_CLASS, get_class($this->model));
    }

    public function buscaPorId_DAO(int $id)
    {
        $qry = 'SELECT * FROM ' . $this->model->getTabela() . 'WHERE id = :id';
        $sth = $this->conexao->prepare($qry);
        $sth->bindParam(':id', $id);
        $sth->setFetchMode(PDO::FETCH_CLASS, get_class($this->model));
        $sth->execute();
        return $sth->fetch();
    }

    public function buscaUltimo_DAO(){
        $qry = 'SELECT * FROM ' . $this->model->getTabela() . ' ORDER BY id DESC LIMIT 1';
        $sth = $this->conexao->prepare($qry);
        $sth->setFetchMode(PDO::FETCH_CLASS, get_class($this->model));
        $sth->execute();
        return $sth->fetch();
    }

    public function gravaNovo_DAO($colunas, $valores)
    {
        $qry = 'INSERT INTO ' . $this->model->getTabela() . ' (' . $colunas . ') VALUES (' . $valores . ')';
        $sth = $this->conexao->prepare($qry);
        return $sth->execute();
    }
}