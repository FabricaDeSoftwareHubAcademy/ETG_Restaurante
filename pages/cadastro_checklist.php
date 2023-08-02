<?php
    $dados
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de CheckList</title>
    <link rel="stylesheet" href="estilo_perfil.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https/cdnjs.cloudflare.comlibs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/input-checklist.css">
    <link rel="stylesheet" href="../assets/css/posicao.css">
    <link rel="stylesheet" href="../assets/css/caixa_pergunta.css">
    <link rel="stylesheet" href="../assets/css/botões-checklist.css">
</head>

<body class="pai_de_todos">
    <?php include_once("../includes/menu.php"); ?>
    <div class="titulo-topo">
        <h1 id="titulo">Cadastro de CheckList</h1>
    </div>

    <main class="todo-projeto">

        <form class="cadastro-checklist" method="POST" name="form-perguntas">

            <div class="inputs-cadastro-checklist">
                <div class="input_group field">
                    <input type="input" class="input_field" placeholder="Name" required="">
                    <label for="name" class="input_label">Nome do CheckList</label> <!--Alterar para o nome do input-->
                </div>

                <div class="input_group field">
                    <div class="titulo-selecione-pergunta">
                        <h1 id="titulo-pergunta">Selecione as Perguntas:</h1>
                    </div>
                </div>

                <section class="selecao-pergunta">
                    <table class="tabela-perguntas">
                        <tr class="topo-tabela">
                            <th>Selecione</th>
                            <th>Pergunta</th>
                        </tr>

                        <?php
                        // Faz a conexão com o banco de dados
                        $host = '192.168.22.9';
                        $usuario = 'fabrica';
                        $senha = 'fabrica@2022';
                        $banco = 'etg_homologacao';

                        $conexao = mysqli_connect($host, $usuario, $senha, $banco);

                        // Verifica se a conexão foi bem sucedida
                        if (mysqli_connect_errno()) {
                            die('Falha na conexão: ' . mysqli_connect_error());
                        }

                        // Busca as perguntas do banco de dados
                        $query = "SELECT id_cadastro_pergunta,descricao FROM cadastro_pergunta";
                        $resultado = mysqli_query($conexao, $query);

                        // Loop através dos resultados e cria as linhas da tabela
                        while ($linha = mysqli_fetch_assoc($resultado)) {
                            echo "<tr>";
                            echo "<td><input type='checkbox'  id='checkbox' name='pergunta[]' value='" . $linha['id_cadastro_pergunta'] . "'></td>";
                            echo "<td>" . $linha['descricao'] . "</td>";
                        }

                        // Fecha a conexão com o banco de dados
                        mysqli_close($conexao);
                        ?>
                    </table>
                </section>
            </div>

            <div class="botoes">
                <div class="botoes-cadastro-checklist">
                    <!--Botão Voltar-->
                    <div class="botao-padrao-voltar">
                        <a href="#"><input type="submit" class="botao-voltar-submit" value="VOLTAR"></a>
                    </div>

                    <!--Botão Cadastrar-->
                    <div class="botao-padrao-cadastrar">
                        <a href="#"><input type="submit" class="botao-cadastrar-submit" name="cadastrar" value="CADASTRAR"></a>
                    </div>
                </div>
            </div>
        </form>
    </main>


    <!----------------- Sanduiche------------------>
    <script>
        var toggleClick = document.querySelector(".toggleBox-menu");
        var container = document.querySelector(".container-menu");
        toggleClick.addEventListener("click", () => {
            toggleClick.classList.toggle("active");
            container.classList.toggle("active");
            submenu.classList.remove('active');
            btn_submenu.setAttribute('onclick', 'openSubmenu()');
            closeModal()
        })

        const modal = document.querySelector('.modal-container-menu')
        const submenu = document.querySelector('.sub-menu')
        const btn_submenu = document.getElementById('btnsubmenu')

        function openModal() {
            modal.classList.add('active')
        }

        function closeModal() {
            modal.classList.remove('active')
        }

        function openSubmenu() {
            submenu.classList.add('active')
            btn_submenu.setAttribute('onclick', 'closeSubmenu()')
        }

        function closeSubmenu() {
            submenu.classList.remove('active')
            btn_submenu.setAttribute('onclick', 'openSubmenu()')
        }
    </script>
</body>
</html>
