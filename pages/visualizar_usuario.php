<?php
session_start();
require __DIR__."/../vendor/autoload.php";
include_once("../includes/menu.php"); 
if(!$ifuser){
    header("Location: ./listar_recados.php");
}
$titulo_page = 'Lista Usuarios';
require("../includes/header/header.php");

use App\Entity\Usuario;

//pegando dados perfil
$objPerfil = new Usuario;
$dados_perfil = $objPerfil -> getDados();

$imprimir = '';

//var_dump($dados_perfil);exit;
foreach ($dados_perfil as $row_perfil)
{
    //var_dump($row_perfil);exit;
    $imprimir .= '
    <li>
    <div class="titulo_gp">
    <div class="card_perfil">
  
    <div class="card_nome">
    <h2 class="tipo_perfil">'.$row_perfil["nome"].'</h2>
    </div>
    
    <a href="/ETG_Escola/pages/editar_perfil.php?id='.$row_perfil["id"].'"><img src="../assets/imgs/icons/icon_editar.png" alt="icone_editar" class="icone_editar"></a> 
                                <a class="bi bi-trash" href="actions/perfil_delete_action.php?id='.$row_perfil["id"].'"></a> 
                            </div>
                            </div>
                            </li> 
                            ';
                        }
                        
require("../includes/main/main_visualizar_usuarios.php");
require("../includes/footer/footer.php");
?>
