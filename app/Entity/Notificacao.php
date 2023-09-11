<?php 
namespace App\Entity;
use PDO;
use PDOException;
use App\Db\Banco; 

class Notificacao
{

    public  $id_notificacao,
            $id_remetente,
            $id_destinatario,
            $descricao;
            
    public function __construct(
            $id_notificacao = null,
            $id_remetente = null,
            $id_destinatario = null ,
            $descricao = null
            )        

        {
            $this -> id_notificacao     = $id_notificacao;
            $this -> id_remetente       = $id_remetente;
            $this -> id_destinatario    = $id_destinatario;
            $this -> descricao          = $descricao;
        }


    //CREATE
    public function cadastrar() : bool
    {
        $obj_banco = new Banco ('notificacao');

        $verificacao = $obj_banco -> select('id_notificacao ="'.$this -> id_notificacao.'"') -> fetchAll(PDO::FETCH_ASSOC);

        //caso ja exista o nome no banco
        if ($verificacao)
        {
            return false;
        } 
        else
        {

            $obj_banco -> insert(['id_notificacao'      => $this -> id_notificacao,
                                    'id_remetente'      => $this -> id_remetente,
                                    'id_destinatario'   => $this -> id_destinatario,
                                    'descricao'         => $this -> descricao
                                ]);

            return true;
        }
    } 


    //READ
    public function getNotificacao()
    {
    $obj_banco = new Banco ('notificacao');

    $dados = $obj_banco -> select() -> fetchAll(PDO::FETCH_ASSOC); 

    return $dados;
    }

    //UPDATE
    public static function setVisualizar($id){

        $banco = new Banco ('notificacao');
        $dados = [
            'visualizado' => 1 
        ];
        if($banco->update('id_notificacao = "'.$id.'"',$dados)){

            return true;
        }else{
            return false;
        }
    }
}
?>