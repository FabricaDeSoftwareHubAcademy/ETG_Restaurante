<link rel="stylesheet" href="../includes/pop-ups/pop_ups_mural_recados/pop_ups mural_editar/style-pop-up-mural.css">
<link rel="stylesheet" href="../includes/pop-ups/pop_ups_mural_recados/pop_ups_mural_novo_recado/pop_ups_mural_recado.css">
<script src="../assets/js/script-pop-up-mural.js"></script>
<script src="../assets/js/pop_ups_mural_recado.js"></script>
<script src="../assets/js/mural.js"></script>

<link rel="stylesheet" href="../assets/css/listar_recados.css"> 

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
 
</body>
</html>