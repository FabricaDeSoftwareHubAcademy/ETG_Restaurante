<?php
require __DIR__."/../vendor/autoload.php";
include_once("../includes/menu.php"); 
require("../includes/header/header.php");
require("../includes/main/main_listar_perfis.php");


use App\Entity\Perfil;

//pegando dados perfil
$objPerfil = new Perfil;
$dados_perfil = $objPerfil -> getDados();

$imprimir = '';
//var_dump($usuario_perfil);exit;
foreach ($dados_perfil as $row_perfil)
{
    $imprimir .= '
    <li>
    <div class="titulo_gp">
    <div class="card_perfil">
    <img src="../assets/imgs/icons/profile.png" alt="icone_perfil" id="icone_perfil">
    <div class="card_nome">
    <h2 class="tipo_perfil">'.$row_perfil['nome_cargo'].'</h2>
    </div>
    
    <a href="../pages/edicao_perfil.php?id='.$row_perfil['id_cadastro_perfil'].'"><img src="../assets/imgs/icons/icon_editar.png" alt="icone_editar" class="icone_editar"></a> 
                                <a class="bi bi-trash" href="../pages/actions/perfil_delete_action.php?id_cadastro_perfil='.$row_perfil['id_cadastro_perfil'].'"></a> 
                            </div>
                            </div>
                            </li> 
                            ';
                        }
                        
require("../includes/footer/footer.php");
?>
