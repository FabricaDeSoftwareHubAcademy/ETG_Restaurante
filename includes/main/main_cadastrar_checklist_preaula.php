<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

<link rel="stylesheet" href="../assets/css/cadastrar_checklist_preaula.css">
<script src="../assets/js/checklist.js" defer></script>
<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>


<!-- GERAL -->
<body class="container_checklist">

    <!-- PARTE QUE IMPORTA A TELA DE NÃO CONFORMIDADE -->
    <?php include_once "../includes/main/main_cadastrar_nao_conformidade.php";
    ?>

    <!-- TITULO DA PAGINA -->
    <h1 class="titulo_checklist">Checklist Pré-Aula</h1>

    <!-- TIULO DA SALA (importado do banco) -->
    <h2 class="nome_sala"><?= $dados_sala[0]['nome']?></h2>

    <!-- PARTE DO MEIO (checklist e botões) -->
    <main class="main_checklist">
        <form method="POST" class="checklist_pre_aula">

            <!-- PARTE DO CHECKLIST -->
            <div class="list-pre-aula"> <?=$dados_imprimir ?> </div>

            <!-- PARTE DOS BOTÕES -->
            <div class="botoes-cadastro-checklist">

                <!-- BOTÃO VOLTAR -->
                <div class="botao-padrao-voltar"><a href="./visualizar_sala.php?id_sala=<?=$dados_sala[0]['id']?>" class="botao-voltar-submit">CANCELAR</a>
                </div>

                <!-- BOTÃO CADASTRAR -->
                <div class="botao-padrao-voltar"><input name="btn_submit" type="button" class="botao-salvar-submit" id="btn_submit"  value="CONFIRMAR">
                </div>

            </div>

        </form>

    </main>

</body>