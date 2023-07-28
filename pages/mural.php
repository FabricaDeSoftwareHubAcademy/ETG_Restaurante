<?php
 
// require autoload = 0 bugs 
require __DIR__."/../vendor/autoload.php";
use App\Entity\Recado;

if(isset($_POST['btn_confirmar_submit'])){

    if(isset($_POST['descricao_sala'])){
      
        $obRecado = new Recado($_SESSION['num_matricula_logado'],$_POST['descricao_sala']);
        $obRecado->cadastrar();

    }

}

 
require_once("../includes/menu.php");


// pegando informações dos recados 

    $recados = Recado::getRecados()->fetchAll(PDO::FETCH_ASSOC) ?  Recado::getRecados()->fetchAll(PDO::FETCH_ASSOC) : "";

    $cards_recados = '';

    foreach($recados as $row_recados){

        $cards_recados .= '<div class="card">
                                <p class="msg_aviso">'.$row_recados['descricao'].'</p>
                                <div class="area_bot">

                                    <div class="bloco_bot">

                                        <a href="editar_mural.php?id_recado='.$row_recados['id_recado'].'"><img src="../assets/imgs/icons/btn_editar.png"></a>
                                        <a href="recado_delete_action.php?id_recado='.$row_recados['id_recado'].'"><img src="../assets/imgs/icons/icon_trash.png"></a>

                                    </div>

                                </div>
                            </div>'
                            ;


     }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mural de Recados</title>
    <link rel="stylesheet" href="../assets/css/pop_ups_mural_recado.css">
    <link rel="stylesheet" href="../assets/css/mural.css"> 
</head>
<body class="body_mural">

<?php
include_once('../includes/pop-ups/pop_ups_mural_novo_recado/pop_ups_mural_recado.php');

?>


<div class="area_cards_recados_mural">
    
    <!-- cards recados  -->
    <?=$cards_recados?>

    <!-- botão para add recado caso seja adm(requer condicional)   -->
    <div class="area_btn_add">
    
        <img onclick="openPopup_recado()" class="img_btn_add" src="../assets/imgs/icons/btn_add.png" alt=""> 

    </div>
</div>

<script src="../assets/js/pop_ups_mural_recado.js"></script>
</body>
</html>