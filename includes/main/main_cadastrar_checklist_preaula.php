
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
<link rel="stylesheet" href="../assets/css/cadastrar_checklist_preaula.css">
<script src="../assets/js/checklist.js"></script>


<body class="container_checklist">


        <h1 class="titulo_checklist">Checklist Pré-Aula</h1>
        <h2 class="nome_sala">Cozinha Didática 2</h2>

        <main class="main_checklist">
            <form  method="POST" class="checklist_pre_aula">
                <?=$dados_imprimir?>       
                <!--Botão Voltar-->
                <div class="botao-padrao-voltar">
                    <a href="gerenc_perfis.php"class="botao-voltar-submit">CANCELAR</a>
                </div>
    
                <!--Botão Salvar-->
                <div class="botao-padrao-voltar">
                    <a href=""><input name="btn_submit" type="submit" class="botao-salvar-submit"  value="CONFIRMAR"></a>
                </div>
            </form>
            <div class="botoes">

            </div>
        </main>

</body>
