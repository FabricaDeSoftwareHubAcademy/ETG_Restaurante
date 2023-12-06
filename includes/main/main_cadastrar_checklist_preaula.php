<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
<link rel="stylesheet" href="../assets/css/cadastrar_checklist_preaula.css">
<script src="../assets/js/checklist.js" defer></script>


<body class="container_checklist">
    <?php include_once "../includes/main/main_cadastrar_nao_conformidade.php";
    ?>
    <h1 class="titulo_checklist">Checklist Pré-Aula</h1>
    <h2 class="nome_sala"><?= $dados_sala[0]['nome']?></h2>

    <main class="main_checklist">
        <form method="POST" class="checklist_pre_aula">
            <div class="list-pre-aula">
                <?=$dados_imprimir ?>
            </div>
            <div class="botões">
                <div class="botoes-cadastro-checklist">
                    <!--Botão Voltar-->
                    <div class="botao-padrao-voltar">
                        <a href="./visualizar_sala.php?id_sala=<?=$dados_sala[0]['id']?>" class="botao-voltar-submit">CANCELAR</a>
                    </div>

                    <!--Botão Salvar-->
                    <div class="botao-padrao-voltar">
                        <input name="btn_submit" type="button" class="botao-salvar-submit" id="btn_submit"  value="CONFIRMAR">
                    </div>

                </div>

            </div>
        </form>

    </main>

</body>