<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pop-up</title>
  <link rel="stylesheet" href="style-pop-up-mural.css">
</head>
<body>
  <main class="main-pop-up-thays">
    <div class="btn-pop">
      <button class="btn-popup-thays" onclick="openPopup()">Abrir Pop-up</button>
    </div>

    <section>
      <!-- Pop-up -->
      <div class="overlay" id="overlay">
        <div class="popup-mural">
          <p>Editar recado:</p>
          <div class="div-pop">
              <textarea  placeholder="Digite seu recado: " name="descricao_sala" id="" cols="70" rows="10" class="text-descricao-pop-up"></textarea>
              
            
          </div>
          <section class="container-pop-up-botaoes">
            <div class="botao-padrao-excluir">
              <a href="#"><input type="submit" class="botao-excluir-submit"  value="EXCLUIR" onclick="closePopup()"></a>
            </div>
            <div class="botao-padrao-voltar">
              <a href="#"><input type="submit" class="botao-voltar-submit"  value="VOLTAR" onclick="closePopup()"></a>
            </div>
            <div class="botao-padrao-salvar">
              <a href="#"><input type="submit" class="botao-salvar-submit"  value="SALVAR" onclick="closePopup()"></a>
            </div>
            
            

          </section>
      
        </div>
      </div>
    </section>
  </main>

  <script src="script-pop-up-mural.js"></script>
</body>
</html>
