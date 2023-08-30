<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../assets/css/input_button_redefinir_senha.css">
    <link rel="stylesheet" href="../includes/pop-ups/pop_ups senha_alterada/pop_ups verification_senha_alterada.css">
    <link rel="stylesheet" href="../includes/pop-ups/pop_ups verification_excluir/pop_ups verification_excluir.css">
    <script src="../includes/pop-ups/pop_ups verification_excluir/pop_ups verification_excluir.js"></script>

    <!--Alterar Cabeçalho pelo novo-->
    <title>Alterar Senha</title>
    <script src="../includes/pop-ups/pop_ups senha_alterada/pop_ups verification_senha_alterada.js"></script>

    <link rel="stylesheet" href="../assets/css/estilo_redefinir_senha.css">
    

</head>
<body>
<!-- openPopupexcluir -->
<!-- closePopupexcluir -->
    <div class="container-pop-up-excluir">
            <div class="popup-excluir" id="popup-up-excluir">
                <img src="../includes/pop-ups/pop_ups verification_excluir/imgs/x-circle 1.png" alt="carregando">

                <p>Informações incorretas</p>
                <div class="botao-padrao-ok">
                    <a href="#"><input type="submit" class="botao-ok-submit1" onclick="closePopupexcluir()" value="OK"></a>
                </div>
            </div>
        </div>


    <?php

    if($logado){
        echo("<script> openPopupsenha() </script>");
    }

    if($erro){

        echo("<script> openPopupexcluir() </script>");
        
    }

    ?>

    <main class="pai-de-todos">
        <?php include_once("../includes/menu.php"); ?>
        <section class='titulo_alterar_senha'>
            <h1>Alterar Senha</h1>
        </section>

        <form method="POST" class="centralizar-back"> 
            <section class="centralizar_input_alterar_senha">

                <!--Input Email-->
                <div class="input_e-mail_group field">
                    <input name="email" type="email" class="input_e-mail_field" placeholder="Name" required="" autocomplete="on">
                    <label for="name" class="input_e-mail_label">E-mail</label> <!--Alterar para o nome do input-->
                </div>

                    <!--Input Senha-->
                <div class="input_senha_group field">
                    <input name="senhaantiga" type="password" class="input_senha_field" placeholder="Name" required="">
                    <label for="name" class="input_senha_label">Senha antiga</label> <!--Alterar para o nome do input-->
                </div>

                <div class="input_senha_group field2">
                    <input name="novasenha" type="password" class="input_senha_field" placeholder="Name" required="">
                    <label for="name" class="input_senha_label">Criar nova senha</label> <!--Alterar para o nome do input-->
                </div>

                <div class="input_senha_group field3">
                    <input name="confirmarnovasenha" type="password" class="input_senha_field" placeholder="Name" required="">
                    <label for="name" class="input_senha_label">Confirmar nova senha</label> <!--Alterar para o nome do input-->
                </div>
            </section>

        

            <section class="centralizar_botoes_alterar_senha">

                    <!--Botão Voltar-->
                <div class="botao-padrao-voltar">
                    <a href="#"><input type="submit" class="botao-voltar-submit"  value="VOLTAR"></a>
                </div>

                    <!--Botão Confirmar-->
                <div class="botao-padrao-confirmar">
                    <a href="#"><input name="btn_submit" type="submit" class="botao-confirmar-submit"  value="CONFIRMAR"></a>
                </div>

            </section>
        </form>   
    </main>

</body>
</html>