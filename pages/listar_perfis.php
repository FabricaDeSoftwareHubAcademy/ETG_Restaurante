<?php
require __DIR__."/../vendor/autoload.php";
include_once("../includes/menu.php"); 
$titulo_page = 'Listar Perfis';
require("../includes/header/header.php");

use App\Entity\Perfil;

//pegando dados perfil
$objPerfil = new Perfil;
$dados_perfil = $objPerfil -> getDados();

$imprimir = '';

foreach ($dados_perfil as $row_perfil) {
    $imprimir .= '
    <li>
        <div class="titulo_gp">
            <div class="card_perfil">
                <div class="card_nome">
                    <h2 class="tipo_perfil">'.$row_perfil["nome"].'</h2>
                </div>
                <a href="/ETG_Escola/pages/editar_perfil.php?id='.$row_perfil["id"].'">
                    <img src="../assets/imgs/icons/icon_editar.png" alt="icone_editar" class="icone_editar">
                </a> 
                <div class="testebotao" onclick="callPopUp(this)">
                    <a class="bi bi-trash btn_excluir"  dataid="'.$row_perfil["id"].'"></a>
                </div>
            </div>
        </div>
    </li>';
}

require("../includes/main/main_listar_perfis.php");
require("../includes/footer/footer.php");
?>

