<?php
session_start();
require __DIR__."/../vendor/autoload.php";
use App\Entity\Usuario;
$obj_user = new Usuario();

if (isset($_POST['btn_submit']) /* && isset($_SESSION['email_to_redef_secret']) */)
{
    if ($_POST['senha'] == $_POST['senha_confirma'])
    {
        //var_dump($_POST); echo '<br>'; var_dump($_SESSION);
        $email = $_SESSION['email_to_redef_secret'];
        $obj_user -> setPasswordByEmail($email, $_POST['senha']);
        unset($_SESSION['email_to_redef_secret']);
        die('funcionou');
    }
    else
    {
        die('as senhas nao coincidem');
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
    <link rel="stylesheet" href="../assets/css/estilo_esqueceu_senha3.css">
    <!--Alterar Cabeçalho pelo novo-->
    <title>Redefinir Senha</title>
    
</head>
<body>
    <main class="pai-de-todos">
        <?php include_once("../includes/menu.php"); ?>
        <section class='titulo_alterar_senha'>
            <h1>Redefinir Senha</h1>
        </section>
    <form method="POST" action="">
        <section class="centralizar_input_alterar_senha"> 
             
            <div class="input_senha_group field2">
                <input name="senha" type="password" class="input_senha_field" placeholder="Name" required="">
                <label for="name" class="input_senha_label">Criar nova senha</label> <!--Alterar para o nome do input-->
            </div>

            <div class="input_senha_group field3">
                <input name="senha_confirma" type="password" class="input_senha_field" placeholder="Name" required="">
                <label for="name" class="input_senha_label">Confirmar nova senha</label> <!--Alterar para o nome do input-->
            </div>

        </section>   

        <section class="centralizar_botoes_alterar_senha">

                <!--Botão Voltar-->
            <div class="botao-padrao-voltar">
                <a href="tela_esqueceu_senha2.php"><input type="submit" class="botao-voltar-submit"  value="VOLTAR"></a>
            </div>

                <!--Botão Confirmar-->
            <div class="botao-padrao-confirmar">
                <input name="btn_submit" type="submit" class="botao-confirmar-submit"  value="CONFIRMAR">
            </div>
    </form>
        </section>
    </main>
</body>
</html>