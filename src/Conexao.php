<?php

namespace CG;

use mysqli;

class Conexao
{
    public static function con_mysqli()
    {
        $con = new mysqli('localhost', 'root', 'root', 'cpl_bd');
        if ($con->connect_errno) {
            echo "Failed to connect to MySQL: " . $con->connect_error;
            exit();
          }
        return $con;
    }
    
}