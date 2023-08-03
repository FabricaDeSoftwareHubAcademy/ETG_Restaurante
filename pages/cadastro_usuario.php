<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esquecer Senha</title>
    <link rel="stylesheet" href="../assets/css/cadastro_usuario.css">
    <link rel="stylesheet" href="../assets/css/menu.css">
</head>
<body class="Pai-de-todos">

<?php

require __DIR__."/../vendor/autoload.php";

include_once("../includes/menu.php");


use App\Entity\Perfil;



$objCadastroPerfil = new Perfil();
$dados = $objCadastroPerfil -> getDados();

$options = '';
foreach ($dados as $row_check ){
    $options .= '<option  class="ops" value="'.$row_check['id_cadastro_perfil'].'"> '.$row_check['nome_cargo'].' </option>'; 

}

if(isset($_POST['nome'], ['email'], ['num_matricula'], ['senha']))


?>

    <main class="tudo_esqueceu_senha1">
        <section class='titulo_cadastro_usuario'>
            <h1>Cadastrar Usuário</h1>
        </section>

        <section class="centralizar_input_cadastrar_usuario"> 

            <!-- input nome -->
        <div class="input_group field">
            <input type="input" class="input_field" name="nome" placeholder="Name" required="">
            <label for="name" class="input_label">Nome</label> <!--Alterar para o nome do input-->
        </div>
        
             <!--Input Email-->
             <div class="input_e-mail_group field">
                    <input type="email" class="input_e-mail_field" name="email" placeholder="Name" required="" autocomplete="on">
                    <label for="name" class="input_e-mail_label">E-mail</label> <!--Alterar para o nome do input-->
                </div>

            <div class="dropdown-ck">
                <select name="checklist" class="option">

                     <?=$options?>
    
                </select> 
            </div>

            <div class="barra"></div> 

        <div class="mover_input">
            <div class="input_group field matricula">
                <input type="input" class="input_field_matricula" name="num_matricula" placeholder="Name" required="">
                <label for="name" class="input_label_matricula">N° de Matricula</label> <!--Alterar para o nome do input-->
            </div>
        </div>



        
            <!--Input Senha-->
        <div class="input_senha_group field">
            <input type="password" class="input_senha_field" name="senha" placeholder="Name" required="">
            <label for="name" class="input_senha_label">Senha</label> <!--Alterar para o nome do input-->
        </div>

        </section>   

        <section class="centralizar_botoes_cadastrar_usuario">

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