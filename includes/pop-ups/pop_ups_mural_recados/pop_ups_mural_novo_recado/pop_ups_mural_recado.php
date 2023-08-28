  <main class="main-pop-up-thays">
 
    <section>
      <!-- Pop-up -->
      <form method="POST" class="overlay_recado" id="overlay_recado">
        <div class="popup-mural-recado">
          <div class="texto-recado-mural">
            <p class="edita-recado-mural">Novo recado:</p>
          </div>
          <div class="div-pop">
              <textarea  placeholder="Digite seu recado: " name="descricao_sala" cols="70" rows="10" class="text-descricao-pop-up"></textarea>
              
            
          </div>
          <section class="container-pop-up-botaoes">
        
            <div class="botao-padrao-cancelar">
                 <input type="reset" class="botao-cancelar-submit"  value="CANCELAR" onclick="closePopup_recado()"> 
            </div>

            <div class="botao-padrao-confirmar">
                <input type="submit" class="botao-confirmar-submit" name="btn_confirmar_submit"  value="CONFIRMAR" onclick="closePopup_recado()"> 
            </div>
            
            

          </section>
      
        </div>
      </form>
    </section>
  </main>

  <script src="pop_ups_mural_recado.js"></script>
 