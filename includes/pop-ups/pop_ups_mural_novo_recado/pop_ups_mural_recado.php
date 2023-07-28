<!-- NOVO MURAL -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pop-up</title>
  <!-- <link rel="stylesheet" href="pop_ups_mural_recado.css">   -->
</head>
<body>
  <main class="main-pop-up-thays">
    <!-- <div class="btn-pop">
      <button class="btn-popup-thays" onclick="openPopup_recado()">Abrir Pop-up</button>
    </div> -->

    <section>
      <!-- Pop-up -->
      <div class="overlay_recado" id="overlay_recado">
        <form method="POST" class="popup-mural-recado">
          <p>Novo recado:</p>
          <div class="div-pop">
              <textarea  placeholder="Digite seu recado: " name="descricao_sala" id="" cols="70" rows="10" class="text-descricao-pop-up"></textarea>
              
            
          </div>
          <section class="container-pop-up-botaoes">
            <div class="botao-padrao-confirmar">
              <input name="btn_confirmar_submit" type="submit" class="botao-confirmar-submit"  value="CONFIRMAR" onclick="closePopup_recado()">
            </div>

            <div class="botao-padrao-cancelar">
                <input type="reset" class="botao-cancelar-submit"  value="CANCELAR" onclick="closePopup_recado()">
            </div>
            
            

          </section>
      
        </form>
      </div>
    </section>
  </main>
<!-- 
  <script src="pop_ups_mural_recado.js"></script> -->
</body>
</html>
