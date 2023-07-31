
  <main class="main-pop-up-thays">
    <div class="btn-pop">
      <button class="bi bi-trash" onclick="openPopup_Conf()"></button>
    </div>

    <section>
      <!-- Pop-up -->
      <div class="overlay_conf" id="overlay_conf">
        <div class="popup-mural-conf">
          <div class="div-pop">
            <p>Deseja excluir esse perfil?</p>
            
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

