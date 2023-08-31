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

        $verificacao = $obj_banco -> select('nome_cargo = "'.$this -> nome_cargo.'"') -> fetchAll(PDO::FETCH_ASSOC);

        //caso ja exista o nome no banco
        if ($verificacao)
        {
            return false;
        } 
        else
        {
            $obj_banco -> insert(                           ['nome_cargo'                   => $this -> nome_cargo,
                                                               'cadastrar_sala'             => $this -> cadastrar_sala,
                                                               'editar_sala'                => $this -> editar_sala,
                                                               'remover_sala'               => $this -> remover_sala,
                                                               'validar_checklist'          => $this -> validar_checklist,
                                                               'inserir_item_checklist'     => $this -> inserir_item_checklist,
                                                               'remover_item_checklist'     => $this -> remover_item_checklist,
                                                               'desbloquear_checklist'      => $this -> desbloquear_checklist,
                                                               'descricao_nao_conformidade' => $this -> descricao_nao_conformidade,
                                                               'enviar_notificacao'         => $this -> enviar_notificacao
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
    public function getDadosById($id_cadastro_perfil)
    {
        $obj_banco = new Banco('cadastro_perfil');        

        $dados = $obj_banco -> select('id_cadastro_perfil = '.$id_cadastro_perfil) -> fetchAll(PDO::FETCH_ASSOC);
        
        return $dados;
    }


    //UPDATE
    public function setDados($id)
    {
        $obj_banco = new Banco('cadastro_perfil');
        
        $dados = [
            'nome_cargo'                 => $this -> nome_cargo,
            'cadastrar_sala'             => $this -> cadastrar_sala,
            'editar_sala'                => $this -> editar_sala,
            'remover_sala'               => $this -> remover_sala,
            'validar_checklist'          => $this -> validar_checklist,
            'inserir_item_checklist'     => $this -> inserir_item_checklist,
            'remover_item_checklist'     => $this -> remover_item_checklist,
            'desbloquear_checklist'      => $this -> desbloquear_checklist,
            'descricao_nao_conformidade' => $this -> descricao_nao_conformidade,
            'enviar_notificacao'         => $this -> enviar_notificacao
                ];

        $obj_banco -> update('id_cadastro_perfil = '. $id, $dados);
        
        return true;
    }

    //DELETE
    public function deleteById($id)
    {
        $obj_banco = new Banco('cadastro_perfil');

        $row_perfil = $obj_banco -> select('id_cadastro_perfil = '.$id);

        if($row_perfil -> rowCount() > 0)
        {
            $obj_banco -> delete($id,'id_cadastro_perfil');

            return true;

        }
        else
        {
            return false;
        }
    }
}
?>