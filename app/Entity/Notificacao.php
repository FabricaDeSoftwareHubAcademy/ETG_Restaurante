<?php 

namespace App\Entity;
use PDO;
use PDOException;
use App\Db\Banco; 


class Notificacao{

    public  $id_notificacao,
            $id_remetente,
            $id_destinatario,
            $descricao;
            
            
    public function __construct(
            $id_notificacao = null,
            $id_remetente = null,
            $id_destinatario = null ,
            $descricao = null,
            )        

        {
            $this -> id_notificacao = $id_notificacao;
            $this -> id_remetente = $id_remetente;
            $this -> id_destinatario = $id_destinatario;
            $this -> descricao = $descricao;
               


        }


    
    public function cadastrar_notificacao() : bool
    {

        $notificacao = new Banco ('notificacao');

        $verificacao = $notificacao -> select('id_notificacao ="'.$this -> id_notificacao.'"') -> fetchAll(PDO::FETCH_ASSOC);

        //caso ja exista o nome no banco
        if ($verificacao)
        {
            return false;
        } 
        else
        {


            $notificacao -> insert(['id_notificacao' => $this -> id_notificacao,
                                             'id_remetente' => $this -> id_remetente,
                                             'id_destinatario' => $this -> id_destinatario,
                                             'descricao' => $this -> descricao
                                               ]);

            return true;
        }



    } 

    public static function getNotificacao(){
    
    $notificacao = new Banco ('notificacao');

    $dados=$notificacao->select("","id_notificacao desc")->fetchAll(PDO::FETCH_ASSOC); 

    return $dados;
    }


    public static function visualizar($id){

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