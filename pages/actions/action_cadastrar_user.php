<?php

require __DIR__."/../../vendor/autoload.php";
use App\Entity\Usuario;
$objUsuario = new Usuario();

$response = '';
try{

    if(isset(
        $_POST['btn_submit'],
        $_POST['nome'],
        $_POST['id_perfil'],
        $_POST['num_matricula'],
        $_POST['senha'],
        ))  
        {
            $objUsuario -> cadastrar(
            $_POST['nome'],
            $_POST['email'],
            $_POST['num_matricula'],
            $_POST['senha'],
            $_POST['id_perfil']);
                
        }
        
        $response = true;

}catch(PDOException $e){
    $response = $e->getMessage();
}

$return = [
    'status'=>$response,
];

echo(json_encode($return));


