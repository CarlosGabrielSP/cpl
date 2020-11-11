<?php

namespace App\controllers;

use App\models\SqlModel;
use CG\Controller;

class AppController extends Controller
{
    public function index()
    {
        $this->view("app/index");
    }

    public function form_SQL()
    {
        $this->view("app/sql");
    }

    public function executa_SQL()
    {
        $model = new SqlModel();
        $sql = trim($_POST['sql']);
        $dados = $model->executa_sql($sql);
        $this->view("app/sql", ['dados' => $dados, 'sql_value' => $sql]);
    }
}
