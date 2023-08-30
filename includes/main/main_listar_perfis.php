<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gerencimento_perfis</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../assets/css/estilo_gerenc_perfis.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../includes/pop-ups/pop_ups_confirm_excluir_perfil/pop_ups_confirmacao.css">
        <script src="../includes/pop-ups/pop_ups_confirm_excluir_perfil/pop_ups_confirmacao.js"></script>
        <script src="../assets/js/deletar_perfil.js"></script>
        <link rel="stylesheet" href="../includes/pop-ups/pop_ups verification_excluir/pop_ups verification_excluir.css">
        <script src="../includes/pop-ups/pop_ups verification_excluir/pop_ups verification_excluir.js"></script>
    
    </head>
    <body class="tela_gerenciam_perfis">
        <main class="pai-de-todos">
                <?php
                //toma essa gambiarra ass luiz
                include_once("../includes/menu.php"); 
                include_once ("../includes/pop-ups/pop_ups_confirm_excluir_perfil/pop_ups_confirmacao.php");
                include_once("../includes/pop-ups/pop_ups verification_excluir/pop_ups verification_excluir.php")
                ?>
            <form action="cadastro_perfil.php" method="GET">
                <div class="container_gp">
                        <h1 class="Perfis">Perfis</h1>
                            <ul class="cardsgerenc">
                                <?=$imprimir?>
                            </ul>
                
                </div>
                <div class="container_gp2">
                        
                    <div class="alinar-botoes">

                        <div class="botao-padrao-voltar">
                        <a href="listar_salas.php" class="botao-voltar-submit">VOLTAR</a>
                        </div>

                        <div class="botao-padrao-cadastrar">
                            <a href="./cadastro_perfil.php"><input name="btn_submit" type="submit" class="botao-cadastrar-submit"  value="CADASTRAR"></a>
                        </div>
                    </div>  
                        
                </div> 
            </form>
        </main>
    </body>
</html>