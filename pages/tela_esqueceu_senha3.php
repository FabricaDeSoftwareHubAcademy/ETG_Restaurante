<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/estilo_esqueceu_senha3.css">
    <!--Alterar Cabeçalho pelo novo-->
    <title>Alterar Senha</title>
    
</head>
<body>
    <main class="pai-de-todos">
        <?php include_once("../includes/menu.php"); ?>
        <section class='titulo_alterar_senha'>
            <h1>Alterar Senha</h1>
        </section>

        <section class="centralizar_input_alterar_senha"> 
            
            <div class="input_senha_group field2">
                <input type="password" class="input_senha_field" placeholder="Name" required="">
                <label for="name" class="input_senha_label">Criar nova senha</label> <!--Alterar para o nome do input-->
            </div>

            <div class="input_senha_group field3">
                <input type="password" class="input_senha_field" placeholder="Name" required="">
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
                <a href="#"><input type="submit" class="botao-confirmar-submit"  value="CONFIRMAR"></a>
            </div>

        </section>
    </main>
</body>
</html>