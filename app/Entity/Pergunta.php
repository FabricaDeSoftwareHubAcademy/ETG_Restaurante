<?php
namespace App\Entity; 
use \App\Db\Banco;
use PDO;

class Pergunta
{
    
    private $descricao;
    
    public function __construct($descricao = null)
    {
        $this -> descricao = $descricao;
    }

    //CREATE
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

    //READ
    public static function getDados($id_sala)
{        $obj_banco = new Banco('perguntas_da_sala');

        $dados = $obj_banco -> select(where:'id_sala = '.$id_sala.'');

        if($dados -> rowCount() > 0){

            return $dados -> fetchall(PDO::FETCH_ASSOC);
        }
        else
        {
            return false;
        }


    }

    //READ
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

    public static function getPerguntas()
    {
        $obj_banco = new Banco('cadastro_pergunta');

        $dados = $obj_banco->select();

        if($dados -> rowCount() > 0)
        {
            return $dados;
        }
        else
        {
            return false;
        } 
    }

    public static function filter($nome)
    {
        $obj_banco = new Banco('cadastro_pergunta');
        $dados = $obj_banco -> select('descricao LIKE "%' . $nome . '%"');
        return $dados -> fetchAll(PDO::FETCH_ASSOC);
        # SELECT * FROM pergunta WHERE descricao LIKE '%os equipamentos%';
    }
}