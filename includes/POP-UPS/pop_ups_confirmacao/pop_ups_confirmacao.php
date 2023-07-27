<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pop-up</title>
  <link rel="stylesheet" href="pop_ups_confirmacao.css">
</head>
<body>
  <main class="main-pop-up-thays">
    <div class="btn-pop">
      <button class="btn-popup-thays" onclick="openPopup_Conf()">Abrir Pop-up</button>
    </div>

    <section>
      <!-- Pop-up -->
      <div class="overlay_conf" id="overlay_conf">
        <div class="popup-mural-conf">
          <div class="div-pop">
            <p>Você tem certeza em excluir?</p>
            
          </div>
          <section class="container-pop-up-botaoes">
            <div class="botao-padrao-confirmar">
                <a href="#"><input type="submit" class="botao-confirmar-submit"  value="CONFIRMAR" onclick="closePopup_Conf()"></a>
            </div>

            <div class="botao-padrao-cancelar">
                <a href="#"><input type="submit" class="botao-cancelar-submit"  value="CANCELAR" onclick="closePopup_Conf()"></a>
            </div>
            
            

          </section>
      
        </div>
      </div>
    </section>
  </main>

  <script src="pop_ups_confirmacao.js"></script>
</body>
</html>
