<?php

namespace App\Entity;
use PDO;
use PDOException;
use App\Db\Banco;

class CadastroChecklist{
    private 
    $id_cadastro_checklist,
    $nome;

    public function __construct($id_cadastro_checklist = null,
                                $nome = null
                                ){
        $this -> id_cadastro_checklist = $id_cadastro_checklist;
        $this -> $nome = $nome;
    }
    public function getDados() : array{
        $objDatabase = new Banco('cadastro_checklist');
        $query = $objDatabase -> select();
        $dados = $query -> fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }
}

