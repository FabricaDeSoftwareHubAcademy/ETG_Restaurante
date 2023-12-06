<?php
namespace App\Entity;
use PDO;
use PDOException;
use App\Db\Banco;
use App\Entity\ResponderChecklist;


class NaoConformidade
{
    public static function cadastrar($dados = [])
    { 
        $obj_banco = new Banco('reg_nc');
        $obj_banco -> insert($dados);
    }
}