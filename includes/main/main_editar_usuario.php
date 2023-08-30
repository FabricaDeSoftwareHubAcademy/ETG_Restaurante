<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/estilo_perfil_user.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/estilo-botao-minha-conta.css">
    <title>Minha Conta</title>
</head>
<body>
    <main class="pai-de-todos">
        <?php include_once("../includes/menu.php"); ?>
        <form class="form-minha-conta">
            <section class="titulo">
                <h1 class="titulo-perfil">Minha Conta</h1>
            </section>

            <section class="quadrado-perfil">
                <div class="foto-perfil">
                    <i class="bi bi-person-circle"></i>
                </div>
            </section>
            
            <div class="icon-edit">
                <i class="bi bi-pencil-square"></i>
            </div>
            
            <section class="name">
                <h2 class="name-name">Nome:</h2>
            </section>

            <section class="alinhar-input">
                <div class="input_group field">
                    <input type="input" class="input_field" placeholder="Name" required="" name="nome_sala" maxLength="105">
                    <label for="name" class="input_label">Nome do usuario</label><!--Alterar para o nome do input-->
                    <i class="bi bi-pencil-square" id="icon-input"></i>
                </div>
                <div class="alterar-senha">
                    <a href="redefinir_senha.php">Alterar Senha</a>
                </div>

            </section>

            <section class="alinhar-botao">
                <!--Botão Salvar-->
                <div class="botao-padrao-salvar">
                    <a href="#"><input type="submit" class="botao-salvar-submit"  value="SALVAR"></a>
                </div>
            </section>

        </form>

    </main>
    
    
</body>
</html>