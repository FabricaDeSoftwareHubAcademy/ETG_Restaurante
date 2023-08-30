<?php
require __DIR__."/../vendor/autoload.php";
include_once("../includes/menu.php"); 
require("../includes/header/header.php");
require("../includes/main/main_listar_salas.php");



use App\Entity\Sala;


$salas = "";
$dados = Sala::getDados();

$count = 0;
foreach($dados as $sala){
    
    if($count == 0){

        
        $salas .= '<div class="card_sala move" animation="right" >
        
                        <div class="border_card_sala" style="
                        border: 2px solid '.$sala['cor'].'"></div>
                        <a class="click_sala" href="visualizar_sala.php?id_sala='.$sala['id_cadastro_sala'].'"><img class="img_card_sala" src="../storage/salas/'.$sala['imagem'].'" alt=""></a>
                        <a href="editar_salas.php?id_sala='.$sala['id_cadastro_sala'].'"><img class="icon_editar_sala" src="../assets/imgs/icons/btn_editar.png" alt=""></a>
                        <div class="area_title_sala">
                        
                        <h1 class="title_sala">'.$sala['nome'].'</h1>
                        </div>
                        
                        </div>';
                        
                        $count = 1;
                    }else{

        $salas .= '<div class="card_sala move" animation="left">
        
                    <div class="border_card_sala2" style="
                    border: 2px solid '.$sala['cor'].'"></div>
                    <a class="click_sala" href="visualizar_sala.php?id_sala='.$sala['id_cadastro_sala'].'"><img class="img_card_sala" src="../storage/salas/'.$sala['imagem'].'" alt=""></a>
                    <a href="editar_salas.php?id_sala='.$sala['id_cadastro_sala'].'"><img class="icon_editar_sala" src="../assets/imgs/icons/btn_editar.png" alt=""></a>
                    <div class="area_title_sala2">

                        <h1 class="title_sala2">'.$sala['nome'].'</h1>
                        </div>
                        
                        </div>';
                        $count = 0;
                    }
                    
                }
                
                
                
require("../includes/footer/footer.php");
?>