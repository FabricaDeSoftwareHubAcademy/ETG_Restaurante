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
        <form class="formis">
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
                <a href="#"><input type="submit" class="botao-cadastrar-submit"  value="CADASTRAR"></a>
            </div>
        </form>
        
    </main>
</body>
<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- jQuery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="../assets/js/autocomplete_cadastrar_notificacao.js"></script>