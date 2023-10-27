<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
<link rel="stylesheet" href="../assets/css/cadastrar_pergunta.css">


<body>
    <main class="meio">
        <h1 id="titulo">
            Cadastro de Perguntas
         </h1>
        <form class="formis">
            <div class="pesquisa">
                <div class="input_group field">
                    <input type="input" class="input_field" placeholder="." required="" name="nome-checklist" autocomplete="off">
                    <label for="name" class="input_label">Nome do CheckList
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
