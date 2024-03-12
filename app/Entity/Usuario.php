<?php
namespace App\Entity;
use App\Db\Banco;
use App\Entity\Funcoes;
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

    

    public function hasSameName($name) {
        $objBanco = new Banco("cadastro_usuario");
        $response = $objBanco -> select(where: "nome = '".$name."'");
        if ($response->rowCount()) {
            return true;
        }
    }

    public function cadastrar($nome = null , $email = null,  $matricula = null, $senha = null, $id_perfil = null)
    {
        $objBanco = new Banco('cadastro_usuario');

        $validacao_email = $objBanco -> select('email = "'.$email.'"') -> fetchAll(PDO::FETCH_ASSOC);
        if ($this -> hasSameName($nome)) {
            return [false, "Nome já existe"];
        }
        if ($validacao_email)
        {
           
            return [false, 'Email já existe']; //modal para email errado return false
        }

        $validacao_matricula = $objBanco -> select('matricula = '.$matricula) -> fetchAll(PDO::FETCH_ASSOC);
        if ($validacao_matricula)
        {
            return [false, 'Matrícula já existe']; //modal para matricula errado return false
        }
        else if (!$validacao_email && !$validacao_matricula)
        {
            

            $objBanco -> insert([
                                'nome'              =>      $nome,
                                'email'             =>      $email,
                                'matricula'         =>      $matricula, 
                                'senha'             =>      $senha,
                                'id_perfil'         =>      $id_perfil,
                                ]);
            return [true,'a'];
        }


    }

    public static function getDadosPerfil($id)
    {   
        $objBanco = new Banco('perfil_do_user');
        
        $dados = $objBanco -> select('id_user = '.$id) -> fetchAll(PDO::FETCH_ASSOC);
        
        return $dados;

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

    public static function getDadosByMatricula($matricula) 
    {   
        $objBanco = new Banco('cadastro_usuario');
        
        $dados = $objBanco -> select("matricula = '".$matricula."'") -> fetchAll(PDO::FETCH_ASSOC);
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
        
        $dados = $objBanco -> select("id = '".$id."'") -> fetchAll(PDO::FETCH_ASSOC);
        
        return $dados;

    }


    public function setDados($nome,$email, $senha)
    {
        //die('teste');
        $objBanco = new Banco('cadastro_usuario');

        $objBanco -> update('email = "'.$email.'"',['senha' => $senha,'nome' => $nome]);
        echo("testeeee");

    }


    public static function setDadosMatriculaEmail($id,$matricula,$email)
    { 
        try{

            $objBanco = new Banco('cadastro_usuario');
            $objBanco -> update('id = "'.$id.'"',['matricula' => $matricula,'email' => $email]);

            return true;

        }catch(PDOException $e){
            return $e->getMessage();
        }
         

    }

    public static function setEmail($id,$email)
    { 
        try{

            $objBanco = new Banco('cadastro_usuario');
            $objBanco -> update('id = "'.$id.'"',['email' => $email]);
            
            return true;

        }catch(PDOException $e){
            return $e->getMessage();
        }
          
    }

    public static function setMatricula($id,$matricula)
    { 
        try{

            $objBanco = new Banco('cadastro_usuario');
            $objBanco -> update('id = "'.$id.'"',['matricula' => $matricula]);
            
            return true;

        }catch(PDOException $e){
            return $e->getMessage();
        }
          
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

  public static function setImage($email, $name_img)
  {
    try{

        $obj_banco = new Banco('cadastro_usuario');
        $obj_banco -> update('email = "'.$email.'"', ['foto' => $name_img]);
     
        return true;

    }catch(Exception $e){
        echo $e->getMessage();
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

    public static function deleteById($id) { 
        $obj_banco = new Banco('cadastro_usuario'); 
        $row_user = $obj_banco -> select('id = '.$id);

        if($row_user -> rowCount())
        {
            return $obj_banco -> delete($id,'id'); 
            // return true;
        }
        else
        {
            return false;
        } 
    }

    public static function canDelete($id_usuario) {
        $obj_banco = new Banco('cadastro_usuario'); 
        $row_user = $obj_banco -> usuario_tem_participacao_fluxo_checklist($id_usuario);
        $response = $row_user -> rowCount();
        if ($response == 1) {
            return false;
        } else {
            return true;
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
