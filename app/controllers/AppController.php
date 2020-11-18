<?php

namespace App\controllers;

use CG\Controller;
use App\logicas\SqlLogica;

class AppController extends Controller
{
    public function index()
    {
        $this->view("app/index");
        // $this->teste();
    }

    public function form_SQL()
    {
        $this->view("app/sql");
    }

    public function executa_SQL()
    {
        $sql = trim($_POST['sql']);
        $dados = SqlLogica::executa_sql($sql);
        $this->view("app/sql", null, ['dados' => $dados, 'sql_value' => $sql]);
    }
}
