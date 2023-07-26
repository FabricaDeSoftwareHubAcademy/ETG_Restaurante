<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esquecer Senha</title>
    <link rel="stylesheet" href="../assets/css/estilo_esqueceu_senha2.css">
    <link rel="stylesheet" href="../assets/css/menu.css">
</head>
<body class="Pai-de-todos">

<?php

include_once("../includes/menu.php")
?>

    <main class="tudo_esqueceu_senha2">
        <section class='titulo_esqueceu_senha2'>
            <h1>Insira o código enviado em seu E-mail:</h1>
        </section>


                    <section class="centralizar_input_esqueceu_senha2"> 
                <!--Input Email-->
                        <div class="input_e-mail_group field">
                            <input type="email" class="input_e-mail_field" placeholder="_" required="" autocomplete="on">
                            <label for="name" class="input_e-mail_label">Código Enviado </label><!--Alterar para o nome do input-->
                        </div>
                
                        <div class="alinhar-item-timer">
                            <h1 id="text-timer">Solicitar outro código:</h1>   
                            <h1 id="timer">00:59</h1>
                            <button  class="botao-enviar-dnv" id="actionBtn" onclick="performAction()" disabled>Enviar novamente</button>
                            <script src="../assets/js/tela_esqueceu_senha2.js"></script>
                        </div>
                    </section>


        </section>   


        <section class="centralizar_botoes_esqueceu_senha">

        <!--Botão Voltar-->
            <div class="botao-padrao-voltar">
                <a href="#"><input type="submit" class="botao-voltar-submit"  value="VOLTAR"></a>
            </div>

        <!--Botão Confirmar-->
            <div class="botao-padrao-confirmar">
                <a href="#"><input type="submit" class="botao-confirmar-submit"  value="CONFIRMAR"></a>
            </div>

        </section>


    </main>

</body>
</html>