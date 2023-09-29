<?php

namespace App\Entity;
use App\Db\Banco;
use PDO;
use PDOException;


class Usuario
{

    // criando variaveis privadas 
    private $num_matricula,
            $email,
            $senha;
             

    // metodo construct 
    public function __construct(
        
        $num_matricula = null,
        $email = null,
        $senha = null
        
    ){

        // variaveis privadas recebem valores        
        $this->num_matricula = $num_matricula;
        $this->email = $email;
        $this->senha = $senha;

    }


    public function logar(){

       
        $obBanco = new Banco("cadastro_usuario");
         
        $rowUser = $obBanco->select('email = "'.$this->email.'" AND senha = "'.$this->senha.'" AND matricula = "'.$this->num_matricula.'"')->fetchAll(PDO::FETCH_ASSOC);
        if($rowUser){
            session_start();
            
            // $_SESSION['num_matricula_logado'] = $rowUser[0]['num_matricula'];
            $_SESSION['id_user'] = $rowUser[0]['id'];
            
            return true;

        }else{

            return false;
        }

    }

    
    public function cadastrar($nome = null , $email = null, $id_perfil = null, $num_matricula = null, $senha = null)
    {
        $objBanco = new Banco('usuarios');


        $validacao_email = $objBanco -> select('email = "'.$email.'"') -> fetchAll(PDO::FETCH_ASSOC);
        if ($validacao_email)
        {
            die('email ja existe'); //modal para email errado return false
        }

        $validacao_matricula = $objBanco -> select('num_matricula = '.$num_matricula) -> fetchAll(PDO::FETCH_ASSOC);
        if ($validacao_matricula)
        {
            die('num_matricula ja existe'); //modal para num_matricula errado return false
        }
        else if (!$validacao_email && !$validacao_matricula)
        {
            

            $objBanco -> insert([
                                'nome'              =>      $nome,
                                'email'             =>      $email,
                                'matricula'    =>      $num_matricula, 
                                'senha'             =>      $senha,
                                'id_perfil'         =>      $id_perfil,
                                ]);
            return true;
        }


    }

   

    static function getDados() : array 
    {
        die('testando usuario');
        $objBanco = new Banco('cadastro_usuario');
        
        $dados = $objBanco -> select() -> fetchAll(PDO::FETCH_ASSOC);
        
        
        return $dados;

    }


    public function updateData($email, $senha)
    {
        //die('teste');
        $objBanco = new Banco('usuarios');

        $objBanco -> update('email = "'.$email.'"',['senha' => $senha]);

    }

    public function emailValidate($email) : bool
    {
        $objBanco = new Banco('cadastro_usuario');
        
        $dados = $objBanco -> select('email = "'.$email.'"');
        if ($dados -> rowCount())
        {
        
            return true;
        
        }else
        {
        
            return false;
        
        }
    
   }

   public function senhaValidate($senha, $email) : bool
   {
       $objBanco = new Banco('usuarios');
       
       $dados = $objBanco -> select('senha = "'.$senha.'" AND email = "'.$email.'"');
       if ($dados -> rowCount())
       {
           return true;

        }else
        {
            return false;
       }
   
  }
  public function setPasswordByEmail($email, $senha)
  {
    $obj_banco = new Banco('cadastro_usuario');
    $obj_banco -> update('email = "'.$email.'"', ['senha' => $senha]);

    // $obj_Banco = new Banco('usuarios');
    // $obj_Banco -> update('email = "'.$email.'"',['senha' => $senha]);
  }

}
