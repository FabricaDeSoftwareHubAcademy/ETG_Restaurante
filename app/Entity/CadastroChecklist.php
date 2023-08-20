<?php
namespace App\Entity;
use PDO;
use PDOException;
use App\Db\Banco;

class CadastroChecklist
{
    public 
    $id_cadastro_checklist,
    $nome;
 
    public function __construct($id_cadastro_checklist = null,
                                $nome = null
                                )
    {
        $this -> id_cadastro_checklist = $id_cadastro_checklist;
        $this -> nome                  = $nome;
    }


    //
    public function cadastrar() : string
    {
        $obj_banco = new Banco('checklist_test');

        $ultimoId = $obj_banco -> insertRecoverId(['descricao' => $this -> nome]);

        return $ultimoId;
    }



    public function getDados() : array
    {
        $obj_banco = new Banco('cadastro_checklist');

        $dados = $obj_banco -> select() -> fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }
}

