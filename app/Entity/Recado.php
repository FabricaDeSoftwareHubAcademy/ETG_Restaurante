<?php

namespace App\Entity;
use \App\Db\Banco;

use PDO;

class Recado{

    private $num_matricula,$descricao;
    public function __construct($num_matricula,$descricao){

        $this->num_matricula = $num_matricula;
        $this->descricao = $descricao;

    }

    public function update($id_recado){

        $obBanco = new Banco('recado');
        $dados = $obBanco->select('id_recado = "'.$id_recado.'" ');
        if($dados->rowCount() > 0){

            $values = [
                'descricao'=>$this->descricao,
                'num_matricula'=>$this->num_matricula
            ];
            return $obBanco->update('id_recado = "'.$id_recado.'" ',$values);

        }else{
            return false;
        }

    }    

    public function cadastrar(){

         
        $obBanco = new Banco('recado');
        $dados = [
            
            'descricao'=>$this->descricao,
            'num_matricula'=>$this->num_matricula

        ];
        $obBanco->insert($dados);

    }

    public static function excluir($id_recado){

        $obBanco = new Banco('recado');
        $row_recado = $obBanco->select('id_recado = '.$id_recado);
        if($row_recado->rowCount() > 0){

            $obBanco->delete($id_recado,'id_recado');

            return true;

        }else{
            return false;
        }

    }

    public static function getRecados(){

        $obBanco = new Banco("recado");
        
        $dados = $obBanco->select(null , ' id_recado DESC ');
        if($dados->rowCount() > 0){

            return $dados;

        }else{

            return false;

        }
    }
    public static function getRecadosById($id){

        $obBanco = new Banco("recado");
        
        $dados = $obBanco->select('id_recado = "'.$id.'" ' , ' id_recado DESC ');
        if($dados->rowCount() > 0){
            
            return $dados;

        }else{

            return false;

        }

    }
}