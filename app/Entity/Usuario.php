<?php
namespace App\Entity;
use App\Db\Banco;
use Exception;
use PDO;
use PDOException;


class Usuario
{

    // criando variaveis privadas 
    private $matricula,
            $email,
            $senha;
             

    // metodo construct 
    public function __construct(
        
        $matricula = null,
        $email = null,
        $senha = null
        
    ){

        // variaveis privadas recebem valores        
        $this->matricula = $matricula;
        $this->email = $email;
        $this->senha = $senha;

    }

    public function logar(){

       
        $obBanco = new Banco("cadastro_usuario");
         
        $rowUser = $obBanco->select('email = "'.$this->email.'" AND senha = "'.$this->senha.'" AND matricula = "'.$this->matricula.'"')->fetchAll(PDO::FETCH_ASSOC);
        if($rowUser){
            session_start();
            
            // $_SESSION['num_matricula_logado'] = $rowUser[0]['num_matricula'];
            $_SESSION['id_user'] = $rowUser[0]['id'];
            
            return true;

        }else{

            return false;
        }

    }

    

    public function cadastrar($nome = null , $email = null,  $num_matricula = null, $senha = null, $id_perfil = null)
    {
        $objBanco = new Banco('usuarios');


        $validacao_email = $objBanco -> select('email = "'.$email.'"') -> fetchAll(PDO::FETCH_ASSOC);
        if ($validacao_email)
        {
            die('email ja existe'); //modal para email errado return false
        }

        $validacao_matricula = $objBanco -> select('matricula = '.$matricula) -> fetchAll(PDO::FETCH_ASSOC);
        if ($validacao_matricula)
        {
            die('matricula ja existe'); //modal para matricula errado return false
        }
        else if (!$validacao_email && !$validacao_matricula)
        {
            

            $objBanco -> insert([
                                'nome'              =>      $nome,
                                'email'             =>      $email,
                                'matricula'    =>           $num_matricula, 
                                'senha'             =>      $senha,
                                'id_perfil'         =>      $id_perfil,
                                ]);
            return true;
        }


    }

   

    public static function getDados() : array 
    {   
        $objBanco = new Banco('cadastro_usuario');
        
        $dados = $objBanco -> select() -> fetchAll(PDO::FETCH_ASSOC);
        
        
        return $dados;

    }

    public static function getDadosByEmail($email_user) 
    {   
        $objBanco = new Banco('cadastro_usuario');
        
        $dados = $objBanco -> select("email = '".$email_user."'") -> fetchAll(PDO::FETCH_ASSOC);
        if ($dados)
        {
            return $dados;
        }
        else
        {
            return false;
        }


    }

    static function getDadosById($id) : array 
    {
         
        $objBanco = new Banco('cadastro_usuario');
        
        $dados = $objBanco -> select("id = '".$id."'") -> fetchAll(PDO::FETCH_ASSOC)[0];
        
        
        return $dados;

    }


    public function setDados($nome,$email, $senha)
    {
        //die('teste');
        $objBanco = new Banco('cadastro_usuario');

        $objBanco -> update('email = "'.$email.'"',['senha' => $senha,'nome' => $nome]);
        echo("testeeee");

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
       $objBanco = new Banco('cadastro_usuario');
        
       $dados = $objBanco -> select('senha = "'.$senha.'" AND email = "'.$email.'"');
       if ($dados -> rowCount())
       {    
           return true;

        }else
        {
            return false;
       }
   
  }
  public function setName($new_nome,$email){


    $dados = $this->getDadosByEmail($email)[0];

    if($dados){
        try{


            $obBanco = new Banco("cadastro_usuario");
            $update = [
    
                "nome"=>$new_nome
            ]; 
            $obBanco->update("id = '".$dados['id']."'",$update);
            return true;
        }
        catch(Exception $e){

            return false;
        }
         

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
