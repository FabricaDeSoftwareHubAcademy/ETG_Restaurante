<?php
namespace App\Entity;
use PDO;
use PDOException;
use \App\Db\Banco;

class Recado
{
    private $num_matricula,
            $descricao;
    public function __construct($num_matricula,
                                $descricao
                                )
    {
        $this -> num_matricula  = $num_matricula;
        $this -> descricao      = $descricao; 
    }


    //CREATE
    public function cadastrar()
    {     
        $obj_banco = new Banco('recado');
        $dados = [
            'descricao' => $this -> descricao,
            'num_matricula' => $this -> num_matricula
                ];

        $obj_banco -> insert($dados);
    }

    //READ
    public static function getDados()
    {
        $obj_banco = new Banco("recado");
        $dados = $obj_banco -> select(null , ' id_recado DESC ');

        if($dados -> rowCount() > 0)
        {
            //o fetch assoc vai vir pra ca futuramente
            return $dados;
        }
        else
        {
            return false;
        }
    }
    
    //READ

    
    public static function getDadosById($id)
    {
        $obj_banco = new Banco("recado");   
        $dados = $obj_banco -> select('id_recado = "'.$id.'" ' , ' id_recado DESC ');

        if($dados->rowCount() > 0)
        {    
            return $dados;
        }
        else
        {
            return false;
        }
    }

    //UPDATE
    public function setDados($id_recado)
    {
        $obj_banco = new Banco('recado');
        $dados = $obj_banco -> select('id_recado = "'.$id_recado.'" ');

        if($dados -> rowCount() > 0)
        {
            $values = [
                'descricao' => $this -> descricao,
                'num_matricula' => $this -> num_matricula
                    ];

            return $obj_banco -> update('id_recado = "'.$id_recado.'" ',$values);
        }
        else
        {
            return false;
        }
    }    


    //DELETE
    public static function deleteById($id_recado)
    {
        $obj_banco = new Banco('recado');
        $row_recado = $obj_banco -> select('id_recado = '.$id_recado);
        if($row_recado -> rowCount() > 0)
        {
            $obj_banco -> delete($id_recado,'id_recado');
            return true;
        }
        else
        {
            return false;
        }
    }

}