 
  <main class="main-pop-up-thays">
    
    <section>
      <!-- Pop-up -->
      <div class="overlay" id="overlay">
        <div class="popup-mural">
          <div class="texto-recado">
            <p class="edita_recado">Editar recado:</p>
          </div>
          
          <div class="div-pop">
              <textarea  placeholder="Digite seu recado: " name="descricao_sala" id="text-descricao-pop-up" cols="70" rows="10" class="text-descricao-pop-up"></textarea>
              
            
          </div>
          <section class="container-pop-up-botaoes">
            <div class="botao-padrao-excluir">
              <input type="submit" class="botao-excluir-submit"  value="EXCLUIR" onclick="closePopup()">
            </div>
            <div class="botao-padrao-voltar">
              <input type="submit" class="botao-voltar-submit"  value="VOLTAR" onclick="closePopup()">
            </div>
            <div class="botao-padrao-salvar">
              <input type="submit" class="botao-salvar-submit"  value="SALVAR" onclick="closePopup()">
            </div>
            
            
          </section>  
      
        </div>
      </div>
    </section>
  </main>

  <script src="script-pop-up-mural.js"></script>
 