<?php
session_start();

require __DIR__."/../../vendor/autoload.php";
use App\Entity\Notificacao;
use App\Entity\Usuario;
// use App\Entity\Funcoes;
$status = true;
try {
    

    $id_remetente = $_SESSION["id_user"]; //VAI PEGAR DA SESSION O ID DO USUARIO
    $email_destinatario = $_POST['email_destinatario']; //email 
    $texto = $_POST['descricao'];
    
    $usuarios = Usuario::getDadosByEmail($email_destinatario);
    if($usuarios)
    {
        $id_destinatario = $usuarios[0]['id'];
        Notificacao::cadastrar($id_remetente ,$id_destinatario, $texto);
    
    }
    else
    {
        die('ESTE EMAIL NAO EXISTE'); //pop up
    }

    $status = true;
} catch (Exception $th) {
    $status = false;
    
}

echo json_encode(['status' => $status]);
