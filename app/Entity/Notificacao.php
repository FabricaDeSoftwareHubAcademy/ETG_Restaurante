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

    public function getNotificacao(){
    
    $notificacao = new Banco ('notificacao');

    $dados=$notificacao->select()->fetchAll(PDO::FETCH_ASSOC)[0]; 

    return $dados;
    }
}









?>