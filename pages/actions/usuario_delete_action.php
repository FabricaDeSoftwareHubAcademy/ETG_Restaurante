<?php 

require __DIR__."/../../vendor/autoload.php";
use App\Entity\Usuario;

$return = '';
try{

    if(Usuario::deleteUser($_POST['id_usuario'])){

        
        $return = true;


    }else{
        $return = false;
    }
}catch(Exception $e){ 
    $return = $e->getMessage(); 
}

$reponse = [

    'status'=> $return

]; 

echo(json_encode($reponse));

?>