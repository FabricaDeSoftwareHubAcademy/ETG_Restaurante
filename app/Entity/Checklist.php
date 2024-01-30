<?php
namespace App\Entity;

use App\Db\Banco; 
use PDO;
class Checklist
{
    public
    $id_usuario,
    $id_sala,
    $data_fechamento;

    public function __construct()
    {
        $this -> id_usuario      = null;
        $this -> id_sala         = null;
        $this -> data_fechamento = null;
    }

    public function cadastrar($dados = array())
    {
        $obj_banco = new Banco('responder_check');
        $obj_banco -> insert($dados);                  
    }

    public static function getLastCheck($id){

        $obj_banco = new Banco('responder_check');
        // select * from responder_check where id_usuario = 36 ORDER BY id DESC LIMIT 1;
        return $obj_banco -> select('id_sala = "'.$id.'"', 'id DESC',1)->fetchAll(PDO::FETCH_ASSOC)[0];
  
    }

    public static function getData() {
        $obj_banco = new Banco('responder_check');
        $data = $obj_banco -> select() -> fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public static function getChecklist()
    {
        $obj_banco = new Banco('cadastro_checklist');
        $dados = $obj_banco->select(order:"id DESC");
        if($dados)
        {
            return $dados->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            return false;
        } 
    }

    public static function deleteChecklist($id_checklist){

        $obj_banco = new Banco('responder_check');  
        if(($obj_banco->select('id_checklist = "'.$id_checklist.'"') -> rowCount()) ==  0){

            $ob_relacao = new Banco(`relacao_pergunta_checklist`);
            $ob_relacao->delete($id_checklist,'id_check');

            $obCheck = new Banco('cadastro_checklist');
            $obCheck->delete($id_checklist,'id');

            return true;

            
        }




    }


}