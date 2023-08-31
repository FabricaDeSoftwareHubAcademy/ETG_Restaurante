<?php
namespace App\Entity;
use PDO;
use PDOException;
use \App\Db\Banco;

class Pergunta
{
    
    private $descricao;
    
    public function __construct($descricao = null)
    {
        $this -> descricao = $descricao;
    }
    public function cadastrar()
    {
        $obj_banco = new Banco('cadastro_pergunta');
        $dados = [
            'descricao' => $this -> descricao
                ];
        // atualmente retonando true or false  
        if($obj_banco -> insert($dados))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public static function getDados()
    {
        $obj_banco = new Banco('cadastro_pergunta');

        $dados = $obj_banco -> select();

        if($dados -> rowCount() > 0){

            return $dados;
        }
        else
        {
            return false;
        }

    }
    //de GetPerguntasById para GetDadosById
    public static function getDadosById($id)
    {
        $obj_banco = new Banco('cadastro_pergunta');

        $dados = $obj_banco->select('id_cadastro_pergunta = '.$id);

        if($dados -> rowCount() > 0)
        {
            return $dados;
        }
        else
        {
            return false;
        }

    }
}