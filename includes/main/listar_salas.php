<?php
 
require __DIR__."/../vendor/autoload.php";
use App\Entity\Sala;

require_once("../includes/menu.php");




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



?>

<!-- nome da sala cabe 32 caracteres  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/listar_salas.css"> 
    <script defer src="../assets/js/effect_scroll.js"></script>
</head>
<body class="body_listar_salas">

    <h1 class="title_listar_salas">Salas</h1>

    <div class="area_salas">

        <?=$salas?>

    </div>

        <!--Botão IR PARA MURAL DE AVISOS-->
        <div class="centralizar_btn">
            <div class="botao-padrao-mural-aviso">
            <a href="mural.php" class="botao-mural-aviso-submit">MURAL DE AVISOS</a>
            </div>
        </div>




</body>
</html>