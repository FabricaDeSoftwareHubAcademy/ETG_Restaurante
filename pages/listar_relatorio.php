<?php
session_start();
$titulo_page = 'Mural Recados'; 
include_once("../includes/menu.php");

use App\Entity\Sala;
use App\Entity\Checklist;

$salas = "";
$dados = Sala::getDados();

echo '<pre>';
print_r($dados);
echo '</pre>';
exit;


$count = 0;
if($ifgensala){
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
else
{
    foreach($dados as $sala){
        
        
        $img_sala = '';
        if($sala['img_sala'] == ''){

            $img_sala = 'https://iili.io/JI1SMfR.png';

        }else{

            $img_sala = "../storage/salas/".$sala['img_sala'];

        }
         
        $link_view_sala = '';
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
            
            $status_sala .= '<p class="'.$classes2[$sala['status']].'">'.$status[$sala['status']].'</p>';

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

$checks = "";
$dados_checks = Checklist::getData();
// var_dump($dados_checks[0]);exit;
$counts = 0;    
if($ifcheck){
    foreach($dados_checks as $checks){
        // var_dump($dados);exit;
        
        if($counts == 0){

            $data .= '<p>'.$checks['data_abertura'].'</p>';

            $docente .= '<p>'.strtok($checks['nome'],' ').'</p>';

            $counts = 1;
        }
        
        else    
        {
            $data .= '<p>'.$checks['data_abertura'].'</p>';

            $docente .= '<p>'.strtok($checks['nome'],' ').'</p>';

            $counts = 0;
        }
        
        
    }
}
else
{
    foreach($dados_checks as $checks){
        
              
        if($counts == 0){
            
            $data .= '<p>'.$checks['data_abertura'].'</p>';

            $docente .= '<p>'.strtok($checks['nome'],' ').'</p>';

            $counts = 1;
        }
        
        else    
        {


            $data .= '<p>'.$checks['data_abertura'].'</p>';

            $docente .= '<p>'.strtok($checks['nome'],' ').'</p>';

            $counts = 0;
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