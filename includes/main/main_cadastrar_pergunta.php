<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

<title>Cadastro de Perguntas</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<link rel="stylesheet" href="../assets/css/cadastrar_pergunta.css">

<script  src="../assets/js/filter.js"></script>



<script defer src="../assets/js/filter_old.js"></script>
<script defer src="../assets/js/effect_scroll.js" ></script>



<body>
    
    <main class="meio">

        <!-- TÍTULO DA PÁGINA -->
        <h1 id="titulo">Cadastro de Perguntas</h1>
        <div class="aunt">

            <!-- PARTE DA PESQUISA  -->

                <div class="pesquisa">
                    <div class="input_group field">
                        <input type="input" id ="input" class="input_field" placeholder="." required="" name="nome-checklist" autocomplete="off">
                        <label for="name" class="input_label">Descrição da pergunta</label> 
                        <i class="bi bi-search" id="lupa"></i>
                    </div>
                </div>
            
            <!-- AQUI ELE ESTÁ PRINTANDO AS PERGUNTAS DO BANCO NOS CARDS (ver em "cadastrar_pergunta.php")-->
                
                <section class="perguntas" id="perguntas">
                    <?php

                        // echo($divs);
                    ?>
                    
                </section>

                <script>
                    listarPerguntas()
                </script>
                
            <!-- BOTÃO DE CADASTRAR -->
                <div class="botao">
                    <button  class="botao-cadastrar-submit"  value="CADASTRAR" onclick="openPopup1()">CADASTRAR</button>
                </div>
        </div>
 
        <!-- POPUP DE CADASTRAR PERGUNTA -->

        <form>
            <div class="popup_cadastrar" id="popup-cadastro-pergunta">
                <h4>Cadastrar pergunta:</h4>

                <textarea name="nova_pergunta" class="nova_pergunta" placeholder= "Escreva a pergunta"cols="30" rows="10" autocomplete= "off"></textarea>

                <h4>Selecione a categoria da pergunta:</h4>

                <!-- DIV DAS 2 CHECKBOX'S -->
                
                <div class="checks">
                    <div class="check1">
                        <input type="checkbox" name="antes_da_aula" id="check1"> Pré-Aula
                    </div>
                    <div class="check2">
                        <input type="checkbox" name="depois_da_aula" id="check2"> Pós-Aula
                    </div>
                </div>

                <!-- DIV DOS BOTÕES (cancelar e confirmar) -->
                <div class="botoes">
                    <button class="botao-cancelar-submit"  value="CANCELAR" onclick="closePopup1()">CANCELAR</button>
                    <button class="botao-confirmar-submit"  value="CONFIRMAR">CONFIRMAR</button>
                </div>
            </div>
        </form>

 
        

            <!-- POPUP EDITAR PERGUNTA -->

        <form>
            <div class="popup_editar" id="popup-editar-pergunta">
                <h4>Editar pergunta:</h4>

                <textarea name="nova_pergunta" class="nova_pergunta" placeholder= "Escreva a pergunta"cols="30" rows="10" autocomplete= "off"></textarea>

                <h4>Selecione a categoria da pergunta:</h4>

                <!-- DIV DAS 2 CHECKBOX'S -->
                
                <div class="checks">
                    <div class="check1">
                        <input type="checkbox" name="antes_da_aula" id="check1"> Pré-Aula
                    </div>
                    <div class="check2">
                        <input type="checkbox" name="depois_da_aula" id="check2"> Pós-Aula
                    </div>
                </div>

                <!-- DIV DOS BOTÕES (cancelar e confirmar) -->

                <div class="botoes">
                    <button class="botao-cancelar-submit"  value="CANCELAR" onclick="closePopup2()">CANCELAR</button>
                    <button class="botao-confirmar-submit"  value="CONFIRMAR">CONFIRMAR</button>
                </div>
            </div>
        </form>
        
         

            <!-- POPUP DE CONFIRMAÇÃO DE EXCLUSÃO DA PERGUNTA -->

        <div class="popup_conf_exclusao" id="popup_conf_exclusao">
            <h9>Tem certeza que deseja excluir a pergunta?</h9>

            <!-- DIV DOS BOTÕES (sim e não) -->

            <div class="botoes">
                <button class="botao-nao-submit" value="NÃO" onclick="closePopup3()">NÃO</button>
                <button class="botao-sim-submit" value="SIM" onclick="closePopup3()">SIM</button>
            </div>
            
            
        </div> 

    </main>




<script>
 
    // SCRIPT DO POPUP DE CADASTRAR PERGUNTAS

    let popup_cadastro_pergunta = document.getElementById("popup-cadastro-pergunta");
    function openPopup1(){
        popup_cadastro_pergunta.classList.add("open-popup1");
    }
    function closePopup1(){
        popup_cadastro_pergunta.classList.remove("open-popup1");
    }

    // SCRIPT DO POPUP DE EDITAR PERGUNTAS

    let popup_editar_pergunta = document.getElementById("popup-editar-pergunta");
    function openPopup2(){
        popup_editar_pergunta.classList.add("open-popup2");
    }
    function closePopup2(){
        popup_editar_pergunta.classList.remove("open-popup2");
    }

    let popup_conf_exclusao = document.getElementById("popup_conf_exclusao");
    function openPopup3(){
        popup_conf_exclusao.classList.add("open-popup3");
    }
    function closePopup3(){
        popup_conf_exclusao.classList.remove("open-popup3");
    }

</script>

</body>

<!-- Script -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

<!-- jQuery UI -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->
<!-- <script src="../assets/js/autocomplete_cadastrar_notificacao.js"></script> -->