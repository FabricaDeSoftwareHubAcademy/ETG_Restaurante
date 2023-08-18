<?php
session_start();
require __DIR__."/../vendor/autoload.php";


if (isset($_POST['btn_submit']) && isset($_SESSION['cod_redef_senha']))
{
    if ($_POST['email'] == $_SESSION['cod_redef_senha'])
    {
        unset($_SESSION['cod_redef_senha']);
        header("Location: tela_esqueceu_senha3.php");
    }
    else
    {
        die('ta errado!');
    }
}

if (isset($_POST['btn_resend']))
{
    App\Entity\Mailer::sendEmail($_SESSION['email_to_redef_secret']);
}



?>
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
    <form method="POST" action="">
        
        </section>
            

 
                    <section class="centralizar_input_esqueceu_senha2"> 
                <!--Input Email-->
                        <div class="input_e-mail_group field">
                            <input name="email" type="" class="input_e-mail_field" placeholder="_" autocomplete="on">
                            <label for="name" class="input_e-mail_label">Código Enviado </label><!--Alterar para o nome do input-->
                        </div>
                
                        <div class="alinhar-item-timer">
                            <div class="item-timer">
                                <h1 id="text-timer">Solicitar outro código:</h1>   
                                <h1 id="timer">00:60</h1>
                            </div>

                            <div>
                                <input type="submit" class="botao-enviar-dnv" id="actionBtn" name="btn_resend" value="Enviar novamente">
                            </div>
                            <script src="../assets/js/tela_esqueceu_senha2.js"></script>
                        </div>
                    </section>
                

        </section>   


        <section class="centralizar_botoes_esqueceu_senha">

        <!--Botão Voltar-->
            <div class="botao-padrao-voltar">
                <a href="tela_esqueceu_senha1.php"><input type="submit" class="botao-voltar-submit"  value="VOLTAR"></a>
            </div>

        <!--Botão Confirmar-->
            <div class="botao-padrao-confirmar">
                <input name="btn_submit" type="submit" class="botao-confirmar-submit"  value="CONFIRMAR">
            </div>

        </section>

    </form>
    </main>

</body>
</html>