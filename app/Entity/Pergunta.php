<?php
namespace App\Entity;
use \App\Db\Banco;



class Pergunta{

    private $descricao;

    public function __construct($descricao){
 
        $this->descricao = $descricao;

    }
    public static function getPerguntas(){

        $obBanco = new Banco('cadastro_pergunta');
        $dados = $obBanco->select();
        if($dados->rowCount() > 0){

            return $dados;
        }else{
            return false;
        }

    }
    
    public static function getPerguntasById($id){

        $obBanco = new Banco('cadastro_pergunta');
        $dados = $obBanco->select('id_cadastro_pergunta = '.$id);

        if($dados->rowCount() > 0){

            return $dados;
        }
        else{
            return false;
        }

    }
    public function cadastrar(){

        $obBanco = new Banco('cadastro_pergunta');
        $dados = [
            'descricao'=>$this->descricao
        ];
        // atualmente retonando true or false  
         
        if($obBanco->insert($dados)){
            return true;
        }else{
            return false;
        }
        
        

    }

}