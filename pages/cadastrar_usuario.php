<?php

require __DIR__."/../vendor/autoload.php";
include_once("../includes/menu.php"); 
require("../includes/header/header.php");
require("../includes/main/main_cadastrar_usuario.php");


use App\Entity\Perfil;
$objCadastroPerfil = new Perfil();

use App\Entity\Usuario;
$objUsuario = new Usuario();



$dados = $objCadastroPerfil -> getDados();
//die("teste");

$options = '';
foreach ($dados as $row_check ){
    $options .= '<option  class="ops" value="'.$row_check['id_cadastro_perfil'].'"> '.$row_check['nome_cargo'].' </option>'; 
} 
// }
if(isset(
        $_POST['btn_submit'],
        $_POST['nome'],
        $_POST['id_perfil'],
        $_POST['num_matricula'],
        $_POST['senha'],
        ))
        
{
    //die('qwghkglda');

    $objUsuario -> cadastrar($_POST['nome'],
    $_POST['email'],
    $_POST['id_perfil'],
    $_POST['num_matricula'],
    $_POST['senha']
    );
}
require("../includes/footer/footer.php");
?>