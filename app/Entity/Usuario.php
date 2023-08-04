<?php

namespace App\Entity;
use App\Db\Banco;
use PDO;
use PDOException;


class Usuario{

    // criando variaveis privadas 
    private $num_matricula,
            $email,
            $senha;
            

    // metodo construct 
    public function __construct(
        
        $num_matricula = null,
        $email = null,
        $senha = null,
        
    ){

        // variaveis privadas recebem valores        
        $this->num_matricula = $num_matricula;
        $this->email = $email;
        $this->senha = $senha;

    }


    public function logar(){

       
        $obBanco = new Banco("cadastro_usuario");
         
        $rowUser = $obBanco->select('email = "'.$this->email.'" AND senha = "'.$this->senha.'" AND num_matricula = "'.$this->num_matricula.'"')->fetchAll(PDO::FETCH_ASSOC);
        if($rowUser){
            session_start();
            
            $_SESSION['num_matricula_logado'] = $rowUser[0]['num_matricula'];
            
            return true;

        }else{

            return false;
        }

    }
    
    //  public function getDados(){

    //     $obBanco = new Banco("cadastro_usuario");
        
    //     $dados = $obBanco->select();
    //     if($dados->rowCount() > 0){

    //         return $dados;

    //     }else{

    //         return false;

    //     }
    // }

    public function getDados() : array 
    {
        
        $objBanco = new Banco('cadastro_usuario');
        
        $dados = $objBanco -> select() -> fetchAll(PDO::FETCH_ASSOC);
        
        
        return $dados;

    }

}
