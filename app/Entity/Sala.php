<?php

namespace App\Entity;
use PDO;
use PDOException;
use App\Db\Banco;


class Sala{
    private $id_cadastro_sala,
            $id_cadastro_checklist,
            $id_cadastro_usuario,
            $andar,
            $descricao,
            $imagem,
            $cor,
            $status_sala,
            $nome
            
            ;
    public function __construct($id_cadastro_sala = null,
                                $id_cadastro_checklist = null,
                                $id_cadastro_usuario = null,
                                $andar = null,
                                $descricao = null,
                                $imagem = null,
                                $cor = null,
                                $status_sala = null,
                                $nome = null
                                ){
        $this -> id_cadastro_sala = $id_cadastro_sala;
        $this -> id_cadastro_checklist = $id_cadastro_checklist;
        $this -> id_cadastro_usuario = $id_cadastro_usuario;
        $this -> andar = $andar;
        $this -> descricao = $descricao;
        $this -> imagem = $imagem;
        $this -> cor = $cor;
        $this -> status_sala = $status_sala;
        $this -> nome = $nome;
    }


    public function cadastrar() : bool
    {
        $objBanco = new Banco('Cadastro_sala');

        //$query = $objBanco -> select() -> fetchAll();
        
        $objBanco -> insert(['id_cadastro_checklist' => $this -> id_cadastro_checklist,
                            'id_cadastro_usuario'=> $this -> id_cadastro_usuario,
                            'andar'  => ucfirst(strtolower($this -> andar)),
                            'descricao' => ucfirst(strtolower($this -> descricao)),
                            'imagem' => $this -> imagem['name'],
                            'cor' => $this -> cor,
                            'status_sala' => $this -> status_sala,
                            'nome' => ucfirst(strtolower($this -> nome))
                        ]);

        
        return true;
    }


    public static function getSalas(){

        $objBanco = new Banco('Cadastro_sala');
        $salas = $objBanco -> select() -> fetchAll(PDO::FETCH_ASSOC);
        

        // if($salas->rowcont()>0){

            return $salas;

        // }
        // else{

            // return false;

        // }


    }

/*     public function getLastInsertId()
    {

    } */

    public static function getById($id_sala){

        $objBanco = new Banco('Cadastro_sala');
        $dados = $objBanco -> select("id_cadastro_sala = ".$id_sala) -> fetchAll(PDO::FETCH_ASSOC);
        return $dados;

    }
}
