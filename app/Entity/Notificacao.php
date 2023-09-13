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
    public static function cadastrar($id, $id_remetente, $id_destinatario, $texto)
    {
        $obj_banco = new Banco ('notificacao');

        $obj_banco -> insert([  'id'                => $id,
                                'id_remetente'      => $id_remetente,
                                'id_destinatario'   => $id_destinatario,
                                'texto'             => $texto
                            ]);

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