<?php
require __DIR__."/../vendor/autoload.php";
include_once("../includes/menu.php"); 
$titulo_page = 'Lista Salas';
require("../includes/header/header.php");

use App\Entity\Sala;


$salas = "";
$dados = Sala::getDados();
//var_dump($dados);exit;
$count = 0; 
foreach($dados as $sala){
    
    if($count == 0){
        
        
        $salas .= '<div class="card_sala move" animation="right" >
        
                        <div class="border_card_sala" style="
                        border: 2px solid '.$sala['cor_itens'].'"></div>
                        <a class="click_sala" href="visualizar_sala.php?id_sala='.$sala['id'].'"><img class="img_card_sala" src="../storage/salas/'.$sala['img_sala'].'" alt=""></a>
                        <a href="editar_sala.php?id_sala='.$sala['id'].'"><img class="icon_editar_sala" src="../assets/imgs/icons/btn_editar.png" alt=""></a>
                        <div class="area_title_sala">
                        
                        <h1 class="title_sala">'.$sala['nome'].'</h1>
                        </div>
                        
                        </div>';
                        
                        $count = 1;
                    }
                    else
                    {

                        $salas .= '<div class="card_sala move" animation="left">
        
                        <div class="border_card_sala2" style="
                        border: 2px solid '.$sala['cor_itens'].'"></div>
                        <a class="click_sala" href="visualizar_sala.php?id_sala='.$sala['id'].'"><img class="img_card_sala" src="../storage/salas/'.$sala['img_sala'].'" alt=""></a>
                        <a href="editar_sala.php?id_sala='.$sala['id'].'"><img class="icon_editar_sala" src="../assets/imgs/icons/btn_editar.png" alt=""></a>
                        <div class="area_title_sala2">
                        
                        <h1 class="title_sala2">'.$sala['nome'].'</h1>
                        </div>
                        
                        </div>';
                        $count = 0;
                    }
                    
                } 
                
require("../includes/main/main_listar_salas.php");
require("../includes/footer/footer.php");
?>