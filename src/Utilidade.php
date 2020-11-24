<?php 

namespace CG;

class Utilidade 
{
    public static function AvisoGravaNovo(bool $resultado)
    {
        if($resultado){
            return ['status' => 'success', 'msg' => 'Gravado com sucesso'];
        }
        return ['status' => 'alert', 'msg' => 'Desculpe, Não foi possível gravar novo registro'];
    }
}
