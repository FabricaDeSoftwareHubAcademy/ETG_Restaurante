<?php

namespace App\Entity;
use \App\Db\Banco;



class Recado{

    private $num_matricula,$descricao;
    public function __construct($num_matricula,$descricao){

        $this->num_matricula = $num_matricula;
        $this->descricao = $descricao;

    }

    public function cadastrar(){

         
        $obBanco = new Banco('recado');
        $dados = [
            
            'descricao'=>$this->descricao,
            'num_matricula'=>$this->num_matricula

        ];
        $obBanco->insert($dados);

    }

    public function excluir($id_recado){

        $obBanco = new Banco('recado');
        $row_recado = $obBanco->select('id_recado = '.$id_recado);
        if($row_recado->rowCount() > 0){

            $obBanco->delete('3','id_recado');


        }

    }

    public static function getRecados(){

        $obBanco = new Banco("recado");
        
        $dados = $obBanco->select();
        if($dados->rowCount() > 0){

            return $dados;

        }else{

            return false;

        }


    }


}