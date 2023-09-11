<?php
session_start();
require __DIR__."/../vendor/autoload.php";
include_once("../includes/menu.php"); 
require("../includes/header/header.php");
require("../includes/main/main_relembrar_senha_3.php");

use App\Entity\Usuario;
$obj_user = new Usuario();

if (isset($_POST['btn_submit']) /* && isset($_SESSION['email_to_redef_secret']) */)
{
    if ($_POST['senha'] == $_POST['senha_confirma'])
    {
        //var_dump($_POST); echo '<br>'; var_dump($_SESSION);
        $email = $_SESSION['email_to_redef_secret'];
        $obj_user -> setPasswordByEmail($email, $_POST['senha']);
        unset($_SESSION['email_to_redef_secret']);
        die('funcionou');
    }
    else
    {
        die('as senhas nao coincidem');
    }
}


require("../includes/footer/footer.php");
?>