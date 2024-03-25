<?php
session_start();
$titulo_page = 'Mural Recados'; 
include_once("../includes/menu.php");

use App\Entity\Relatorio;

$salas = "";
$dados = Relatorio::getTudo();

// echo '<pre>';
// print_r($dados);
// echo '</pre>';
// exit;

foreach($dados as $sala){
    $status_sala = $sala['status'];

        // var_dump($dados);exit;
    if($sala['status'] == 'L'){

        
        $sala['status'] = 'Desativada';

    
    
    
    $img_sala = '';
    if($sala['img_sala'] == ''){

        $img_sala = 'https://iili.io/JI1SMfR.png';

    }else{

        $img_sala = "../storage/salas/".$sala['img_sala'];

    }

    $status = [
        'D' => 'Desativada',
        'L' => 'Livre',
        'A' => 'Em uso',
        'B' => 'Bloqueada'
    ];
    $classes = [
        'D' => 'desativado',
        'L' => 'livre',
        'A' => 'em-uso',
        'B' => 'block'
    ];
    $classes2 = [
        'D' => 'desativado2',
        'L' => 'livre2',
        'A' => 'em-uso2',
        'B' => 'block2'
    ];

    if($count == 0){

        $sala_lista .= ' <div class="div-td">
                            <img class="img-td" src="../storage/salas/'.$sala['img_sala'].'" alt="">
                            <p class="title_sala2">'.$sala['nome'].'</p>
                        </div>';

        $status_lista .= '<p class="'.$classes2[$sala['status']].'">'.$status[$sala['status']].'</p>';

        $count = 1;
    }
    
    else    
    {

        $sala_lista .= ' <div class="div-td">
                            <img class="img-td" src="../storage/salas/'.$sala['img_sala'].'" alt="">
                            <p class="title_sala2">'.$sala['nome'].'</p>
                        </div>';
        
        $status_sala .= '<p class="'.$classes2[$sala['status']].'">'.$status[$sala['status']].'</p>';

        $count = 0;
    }
    }
}






            // <h1 class="title_sala">'.$sala['nome'].'</h1>
            
            // require autoload = 0 bugs 
            require "../vendor/autoload.php";
            
            
            
            
            $titulo_page = 'Listar Relatorios';
            
    
    include_once("../includes/header/header.php");
    require("../includes/main/main_listar_relatorio.php");

?>