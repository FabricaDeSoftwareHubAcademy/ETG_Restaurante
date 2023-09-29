<?php
namespace App\Entity;
use PDO;
use PDOException;
use App\Db\Banco;

class Perfil
{
    private $id_cadastro_perfil,
            $nome_cargo,
            $cadastrar_sala,
            $editar_sala,
            $remover_sala,
            $validar_checklist, 
            $inserir_item_checklist,
            $remover_item_checklist,
            $desbloquear_checklist,
            $descricao_nao_conformidade,
            $enviar_notificacao;
    public function __construct($nome_cargo                 = '',
                                $cadastrar_sala             = null,
                                $editar_sala                = null,
                                $remover_sala               = null,
                                $validar_checklist          = null,
                                $inserir_item_checklist     = null,
                                $remover_item_checklist     = null,
                                $desbloquear_checklist      = null,
                                $descricao_nao_conformidade = null,
                                $enviar_notificacao         = null
                                )
    {
        $this -> nome_cargo                 = $nome_cargo;
        $this -> cadastrar_sala             = $cadastrar_sala;
        $this -> editar_sala                = $editar_sala;
        $this -> remover_sala               = $remover_sala;
        $this -> validar_checklist          = $validar_checklist;
        $this -> inserir_item_checklist     = $inserir_item_checklist;
        $this -> remover_item_checklist     = $remover_item_checklist;
        $this -> desbloquear_checklist      = $desbloquear_checklist;
        $this -> descricao_nao_conformidade = $descricao_nao_conformidade;
        $this -> enviar_notificacao         = $enviar_notificacao;
        

    }

    //CREATE
    public function cadastrar() : bool
    {
        $obj_banco = new Banco('cadastro_perfil');
        
        $verificacao = $obj_banco -> select('nome = "'.$this -> nome_cargo.'"') -> fetchAll(PDO::FETCH_ASSOC);
        
        //caso ja exista o nome no banco
        //die('testeabcde');
        if ($verificacao)
        {
            return false;
        } 
        else
        {
            $obj_banco -> insert(                           [  'nome'                       => $this -> nome_cargo,
                                                               'realizar_checklist'         => $this -> cadastrar_sala,
                                                               'cadastrar_checklist'        => $this -> validar_checklist,
                                                               'editar_checklist'           => $this -> editar_sala,
                                                               'excluir_checklist'          => $this -> remover_sala,
                                                               'lock_unlock_sala'           => $this -> inserir_item_checklist,
                                                               'cadastrar_sala'             => $this -> remover_item_checklist,
                                                               'editar_sala'                => $this -> desbloquear_checklist,
                                                               'remover_sala'               => $this -> descricao_nao_conformidade,
                                                               'enviar_notificacao'         => $this -> enviar_notificacao,
                                                               'add_recado'                 => 0
                                                             ]);
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
    public function setDados($id)
    {
        $obj_banco = new Banco('cadastro_perfil');
        
        $dados = [
            'nome'                 => $this -> nome_cargo,
            'realizar_checklist'             => $this -> cadastrar_sala,
            'cadastrar_checklist'                => $this -> editar_sala,
            'editar_checklist'               => $this -> remover_sala,
            'excluir_checklist'          => $this -> validar_checklist,
            'lock_unlock_sala'     => $this -> inserir_item_checklist,
            'cadastrar_sala'     => $this -> remover_item_checklist,
            'editar_sala'      => $this -> desbloquear_checklist,
            'remover_sala' => $this -> descricao_nao_conformidade,
            'enviar_notificacao'         => $this -> enviar_notificacao,
            'add_recado'         => 0
                ];

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