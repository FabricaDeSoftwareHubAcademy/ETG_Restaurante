<?php
namespace App\Entity;
use PDO;
use PDOException;
use App\Db\Banco;

class Perfil
{
    private 
    $nome,
    $gerenciar_perguntas,
    $gerenciar_salas,
    $realizar_acao_corretiva,
    $realizar_checklist,
    $gerenciar_checklist,
    $gerenciar_recados,
    $gerenciar_notificacoes,
    $administrador;

    public function __construct($nome                 = null,
                                $gerenciar_perguntas             = null,
                                $gerenciar_salas                = null,
                                $realizar_acao_corretiva               = null,
                                $realizar_checklist     = null,
                                $gerenciar_checklist     = null,
                                $gerenciar_recados      = null,
                                $gerenciar_notificacoes = null,
                                $administrador         = null
                                )
    {
        $this -> nome                 = null;
        $this -> gerenciar_perguntas             = null;
        $this -> gerenciar_salas                = null;
        $this -> realizar_acao_corretiva               = null;
        $this -> realizar_checklist     = null;
        $this -> gerenciar_checklist     = null;
        $this -> gerenciar_recados      = null;
        $this -> gerenciar_notificacoes      = null;
        $this -> administrador      = null;
        

    }

    //CREATE
    public function cadastrar($dados = []) : bool
    {
        $obj_banco = new Banco('cadastro_perfil');
        
        $verificacao = $obj_banco -> select('nome = "'.$this -> nome.'"') -> fetchAll(PDO::FETCH_ASSOC);
        if (1 == 2)
        {
            return false;
        } 
        else
        {
            $obj_banco -> insert($dados);                  
            return true;
        }
    }

    //READ
    public function getDados()
    {
        $obj_banco = new Banco('cadastro_perfil');
        
        $dados = $obj_banco -> select() -> fetchAll(PDO::FETCH_ASSOC);
        
        return $dados;
    }

    //READ
    public function getDadosById($id)
    {
        $obj_banco = new Banco('cadastro_perfil');        
        
        $dados = $obj_banco -> select('id = '.$id) -> fetchAll(PDO::FETCH_ASSOC);
        //die('teste');
        //var_dump($dados);exit;
        return $dados;
    }


    //UPDATE
    public function setDados($id, $dados)
    {
        $obj_banco = new Banco('cadastro_perfil');

        $obj_banco -> update('id = '. $id, $dados);
        
        return true;
    }

    //DELETE
    public function deleteById($id)
    {
        $obj_banco = new Banco('cadastro_perfil');

        $row_perfil = $obj_banco -> select('id = '.$id);

        if($row_perfil -> rowCount() > 0)
        {
            $obj_banco -> delete($id,'id');

            return true;

        }
        else
        {
            return false;
        }
    }
}
?>