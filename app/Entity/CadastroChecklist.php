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


    //CREATE
    public function cadastrar() : string
    {
        $obj_banco = new Banco('cadatro_checklist');

        $ultimoId = $obj_banco -> insertRecoverId(['nome' => $this -> nome]);

        return $ultimoId;
    }

    //CREATE
    public static function cadastrarPergunta($dados, $idCheck){
       $obBanco = new Banco("relacao_pergunta_checklist");
       foreach($dados as $idPergunta){
        $idLista = [
            'id_cadastro_pergunta' => $idPergunta,
            'id_cadastro_checklist' => $idCheck];
            $obBanco -> insert($idLista);
       }
    }
    
    //READ
    public function getDados() : array
    {
        $obj_banco = new Banco('cadastro_checklist');
        
        $dados = $obj_banco -> select() -> fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }
    
}


