<?php

require __DIR__."/../vendor/autoload.php";

use App\Entity\Usuario;

$objUsuario = new Usuario();

if (isset($_POST['email'],$_POST['senhaantiga'],$_POST['novasenha'],$_POST['confirmarnovasenha'],$_POST['btn_submit'])){
    if ($objUsuario -> emailValidate($_POST['email']))
    {
        if ($objUsuario -> senhaValidate($_POST['senhaantiga'], $_POST['email']))
        {
            //var_dump($_POST);exit;
            if ($_POST['novasenha'] == $_POST['confirmarnovasenha'])
            {

                $objUsuario -> updateData($_POST['email'] ,$_POST['novasenha']);

            }
            else
            {

                die('as novas senhas não correspondem');

            }

        }
        else
        {
            die('senha antiga nao esta correta');

        }
    }
    else
    {

        die('o email nao esta correto');

    }
  
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/estilo_redefinir_senha.css">
    <link rel="stylesheet" href="../assets/css/input_button_redefinir_senha.css">
    <!--Alterar Cabeçalho pelo novo-->
    <title>Alterar Senha</title>
    
</head>
<body>
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