<?php   
        require("../includes/modal_excluir/excluir_pop_up.php"); 
        
    ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
<script src="../assets/js/visualizar_usuario.js"></script>
<link rel="stylesheet" href="../assets/css/visualizar_usuarios.css">

<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>


  

<body class="tela_gerenciam_usuarios"> 


        <main class="pai-de-todos">
            <form action="" method="GET" class="formss">
                <div class="container_gp">
                        <h1 class="Usuarios"> Usuários Cadastrados</h1>

                            <ul class="cardsgerenc"></ul>
                
                </div>
                        
                <div class="alinar-botoes">

                    <div class="botao-padrao-voltar">
                        <a href="listar_salas.php" class="botao-voltar-submit">VOLTAR</a>
                    </div>

                    <div class="botao-padrao-cadastrar">
                        <a href="cadastrar_usuario.php" class="botao-cadastrar-link">CADASTRAR</a>
                    </div>

                </div>  
                        
            </form>
        </main>
    </body>
