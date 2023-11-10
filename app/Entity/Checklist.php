<?php
namespace App\Entity;

use App\Db\Banco; 

class Checklist
{
    public
    $id_usuario,
    $id_sala,
    $data_fechamento;

    public function __construct()
    {
        $this -> id_usuario      = null;
        $this -> id_sala         = null;
        $this -> data_fechamento = null;
    }

    public function cadastrar($dados = array())
    {
        $obj_banco = new Banco('responder_check');
        $obj_banco -> insert($dados);                  
    }
}