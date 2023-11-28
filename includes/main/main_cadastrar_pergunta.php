<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
<link rel="stylesheet" href="../assets/css/cadastrar_pergunta.css">
<script defer src="../assets/js/filter.js"></script>


<body>
    <main class="meio">
        <h1 id="titulo">
            Cadastro de Perguntas
         </h1>
        <div class="aunt">
            <div class="pesquisa">
                <div class="input_group field">
                    <input type="input" id ="input" class="input_field" placeholder="." required="" name="nome-checklist" autocomplete="off">
                    <label for="name" class="input_label">Descrição da pergunta
                    </label> <!--Alterar para o nome do input-->
                    <i class="bi bi-search" id="lupa"></i>
                </div>
            </div>
            <section class="perguntas">
                <?php

                echo($divs);
                ?>
                
            </section>
            
            <div class="botao">
                <button  class="botao-cadastrar-submit"  value="CADASTRAR" onclick="openPopup()">CADASTRAR</button>
            </div>
            <form>
                <div class="popup" id="popup">
                    <h4>Nova pergunta:</h4>
                    <textarea name="nova_pergunta" class="nova_pergunta" placeholder= "Escreva o conteúdo da pergunta"cols="30" rows="10" autocomplete= "off"></textarea>
                    <h4>A pergunta será para: </h4>
                    <div class="checks">
                        <div class="check1">
                            <input type="checkbox" name="antes_da_aula" id=""> Antes da aula
                        </div>
                        <div class="check2">
                            <input type="checkbox" name="depois_da_aula" id=""> Depois da aula
                        </div>
                    </div>
                    <div class="botoes">
                        <button class="botao-cancelar-submit"  value="CANCELAR" onclick="closePopup()">CANCELAR</button>
                        <button class="botao-confirmar-submit"  value="CONFIRMAR">CONFIRMAR</button>
                    </div>
                </div>
            </form>
        </div>
        
    </main>
<script>

    let popup = document.getElementById("popup");
    function openPopup(){
        popup.classList.add("open-popup");
    }
    function closePopup(){
        popup.classList.remove("open-popup");
    }

</script>
</body>
<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- jQuery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="../assets/js/autocomplete_cadastrar_notificacao.js"></script>