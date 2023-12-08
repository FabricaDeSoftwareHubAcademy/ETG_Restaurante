<?php
session_start();
require __DIR__."/../vendor/autoload.php";
$titulo_page = 'Visualização de Cheklist';
include_once("../includes/menu.php"); 
require("../includes/header/header.php");

use App\Entity\CadastroChecklist;

//pegando dados checklist
$obj_checklist = new CadastroChecklist;
$dados_checklist = $obj_checklist -> getDados();

$imprimir = '';


foreach ($dados_checklist as $row_checklist) {
    $imprimir .= '
    <li>
        <div class="titulo_gp">
            <div class="card_perfil">
                <div class="card_nome">
                    <h2 class="tipo_perfil">'.$row_checklist["nome"].'</h2>
                </div>
                <a href="/ETG_Escola/pages/main_editar_checklist.php?id='.$row_checklist["id"].'">
                    <img src="../assets/imgs/icons/icon_editar.png" alt="icone_editar" class="icone_editar">
                </a> 
                <div class="testebotao" onclick="callPopUp(this)">
                    <a class="bi bi-trash btn_excluir"  dataid="'.$row_checklist["id"].'"></a>
                </div>
                
            </div>
        </div>
    </li>';
}

require("../includes/main/main_listar_checklist.php");
require("../includes/footer/footer.php");
?>

