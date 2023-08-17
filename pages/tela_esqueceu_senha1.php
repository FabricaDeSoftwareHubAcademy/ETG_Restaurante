<?php
require __DIR__."/../vendor/autoload.php";

$obj_email = new App\Entity\Mailer;

use App\Entity\Usuario;
$objUsuario = new Usuario();


if (isset($_POST['email'], $_POST['btn_submit'])){
    if ($objUsuario -> emailValidate($_POST['email']))
    {
        $obj_email::sendEmail($_POST['email']);
        
        header("Location: tela_esqueceu_senha2.php");

    }
    else
    {

            die ("email n ecx");

    }
    }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esquecer Senha</title>
    <link rel="stylesheet" href="../assets/css/esqueceu_senha1.css">
    <link rel="stylesheet" href="../assets/css/menu.css">
</head>
<body class="Pai-de-todos">

<?php

include_once("../includes/menu.php")
?>

    <main class="tudo_esqueceu_senha1">
        <section class='titulo_esqueceu_senha'>
            <h1>Insira o E-mail para enviar o código de confirmação:</h1>
        </section>
        <form method="POST" class="centralizar-back">
            <section class="centralizar_input_esqueceu_senha"> 

                    <!--Input Email-->
                    <div class="input_e-mail_group field">
                        <input name="email" type="email" class="input_e-mail_field" placeholder="Name" required="" autocomplete="on">
                        <label for="name" class="input_e-mail_label">E-mail</label> <!--Alterar para o nome do input-->
                    </div>

            </section>   

            <section class="centralizar_botoes_esqueceu_senha">

            <!--Botão Voltar-->
                <div class="botao-padrao-voltar">
                    <a href="#"><input type="submit" class="botao-voltar-submit"  value="VOLTAR"></a>
                </div>

            <!--Botão Confirmar-->
                <div class="botao-padrao-confirmar">
                    <a href="tela_esqueceu_senha2.php"><input name="btn_submit" type="submit" class="botao-confirmar-submit"  value="CONFIRMAR"></a>
                </div>

            </section>
        </form>
    </main>

</body>
</html>