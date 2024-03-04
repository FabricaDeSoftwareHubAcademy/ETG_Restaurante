<?php 
namespace App\Entity;
use \App\Db\Banco;
use PDO;

class Relatorio
{
    public function __construct() {
    }

    public function getAll() {
        $banco = new Banco("relatorio");
        $dados = $banco -> select() -> fetchAll();
        return $dados;
        // var_dump($data);exit;
    }
    public static function getUsers(){
        $banco = new Banco("user_relatorio");
        $dados = $banco -> select() -> fetchAll();
        return $dados;
    }
}
