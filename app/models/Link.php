<?php

namespace App\models;

use CG\Model;

class Link extends Model
{
    public function paineis_links()
    {
        $grupo_link_Model = new Grupo_link;
        return $grupo_link_Model->buscaTodos();

    }
}