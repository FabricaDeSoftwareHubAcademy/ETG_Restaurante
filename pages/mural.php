<?php
session_start();

// require autoload = 0 bugs 
require __DIR__."/../vendor/autoload.php";
use App\Entity\Recado;
 
if(isset($_POST['btn_confirmar_submit'])){

    if(isset($_POST['descricao_sala'])){
         
      
        $obRecado = new Recado($_SESSION['id_user'],$_POST['descricao_sala']);
        $obRecado->cadastrar();
        header("Refresh: 0");
      

    }

}
require_once("../includes/menu.php");
 

// pegando informações dos recados 

    $recados = Recado::getRecados()->fetchAll(PDO::FETCH_ASSOC)  ?  Recado::getRecados()->fetchAll(PDO::FETCH_ASSOC) : "";

    $cards_recados = '';

    foreach($recados as $row_recados){
        
        $cards_recados .= '<div class="card">
                                <p class="msg_aviso">'.$row_recados['descricao'].'</p>
                                <div class="area_bot">

                                    <div class="bloco_bot">

                                        <img class="icon_card_recado_editar" id_recado="'.$row_recados['id_recado'].'" src="../assets/imgs/icons/btn_editar.png">
                                        <img class="icon_card_recado_excluir" id_recado="'.$row_recados['id_recado'].'" src="../assets/imgs/icons/icon_trash.png">

                                    </div>
 

                                </div>
                            </div>'
                            ;

     }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mural de Recados</title>
    <link rel="stylesheet" href="../includes/pop-ups/pop_ups_mural_recados/pop_ups mural_editar/style-pop-up-mural.css">
    <link rel="stylesheet" href="../includes/pop-ups/pop_ups_mural_recados/pop_ups_mural_novo_recado/pop_ups_mural_recado.css">
    
    <link rel="stylesheet" href="../assets/css/mural.css"> 

</head>
<body class="body_mural">
    
    <div class="overlay_modal_excluir_recado">

        <div class="area_modal_excluir_recado">
    
            <h1 class="title_modal_excluir">Confirmar exclusão de recado?</h1>
    
            <div class="area_btns_modal_excluir">

                
                <div class="botao-padrao-cancelar">
                    <button class="botao-cancelar-submit" onclick="closeModalExcluir()">CANCELAR<button>
                </div>
                
                <div class="botao-padrao-confirmar">
                    <button    class="botao-confirmar-submit"  onclick="deletarRecado()">CONFIRMAR<button>
                </div>
    
            </div> 
            
        </div>

    </div>


<?php
 
?>


<h1 class="title_principal">Mural de Recados</h1>
<?php
// linkar certo 

include_once('../includes/pop-ups/pop_ups_mural_recados/pop_ups_mural_novo_recado/pop_ups_mural_recado.php');
include_once('../includes/pop-ups/pop_ups_mural_recados/pop_ups mural_editar/pop-up-mural-recados.php');

?>

<div class="area_cards_recados_mural">
    
    <!-- cards recados  -->
    <?=$cards_recados?>

    <!-- botão para add recado caso seja adm(requer condicional)   -->
    <div class="area_btn_add">
    
        <img onclick="openPopup_recado()" class="img_btn_add" src="../assets/imgs/icons/btn_add.png" alt=""> 

    </div>
</div>


<div class="botao-padrao-inicio">
        <a href="listar_salas.php"><input type="submit" class="botao-inicio-submit"  value="SALAS"></a>
</div>
 
<script src="../assets/js/script-pop-up-mural.js"></script>
<script src="../assets/js/pop_ups_mural_recado.js"></script>
<script src="../assets/js/mural.js"></script>
</body>
</html>