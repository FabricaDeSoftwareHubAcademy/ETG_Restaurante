
<link rel="stylesheet" href="estilo_perfil.css">
<link rel="stylesheet" href="https/cdnjs.cloudflare.comlibs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="../assets/css/cadastrar_checklist/input-checklist.css">
<link rel="stylesheet" href="../assets/css/cadastrar_checklist/posicao.css">
<link rel="stylesheet" href="../assets/js/cadastro-checklist.js">
<link rel="stylesheet" href="../assets/css/cadastrar_checklist/caixa_pergunta.css">
<link rel="stylesheet" href="../assets/css/cadastrar_checklist/botões-checklist.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>


<body class="pai_de_todos">
    <?php include_once("../includes/menu.php"); ?>
    <div class="titulo-topo">
        <h1 id="titulo">Cadastro de CheckList</h1>
    </div>

    <main class="todo-projeto">

        <form class="cadastro-checklist" method="POST" name="form-perguntas" id="meuFormulario">

            <div class="inputs-cadastro-checklist">
                <div class="input_group field">
                    <input type="text" class="input_field" placeholder="Name" required="" name="nome_checklist"  maxlength="45">
                    <label for="name" class="input_label">Nome da CheckList</label> <!--Alterar para o nome do input-->
                </div>
            </div>

            <!-- Menu das abas -->
            <ul class="tab-menu">
                <li class="tab-button active" onclick="showTab('tab1')">Pré-Aula</li>
                <li class="tab-button" onclick="showTab('tab2')">Pós-Aula</li>
                <div class="line"></div>
            </ul>

            <!-- Conteúdo das abas -->
            <div id="tab1" class="tab" style="display: block;">
                <div class="titulo-selecione-pergunta-pre">
                    <h1 id="titulo-pergunta-pos">Selecione as Perguntas:</h1>
                </div>

                <section class="selecao-pergunta">
                    <table class="tabela-perguntas">
                        <tr class="topo-tabela">
                            <th>Selecione</th>
                            <th>Pergunta</th>
                        </tr>
                        <?= $trpre ?>
                    </table>
                </section>
            </div>

            <div id="tab2" class="tab">
                <div class="titulo-selecione-pergunta-pos">
                    <h1 id="titulo-pergunta-pos">Selecione as Perguntas:</h1>
                </div>
                <section class="selecao-pergunta">
                    <table class="tabela-perguntas">
                        <tr class="topo-tabela">
                            <th>Selecione</th>
                            <th>Pergunta</th>
                        </tr>
                        <?= $trpos ?>
                    </table>
                </section>
            </div>


            <script>
                function showTab(tabId) {
                    const tabs = document.querySelectorAll('.tab');
                    const buttons = document.querySelectorAll('.tab-button');

                    tabs.forEach(tab => tab.style.display = 'none');
                    buttons.forEach(button => button.classList.remove('active'));

                    document.getElementById(tabId).style.display = 'block';
                    document.querySelector(`[onclick="showTab('${tabId}')"`).classList.add('active');
                }
            </script>

            <div class="botoes">
                <div class="botoes-cadastro-checklist">
                    <!--Botão Voltar-->
                    <div class="botao-padrao-voltar">
                        <a href="#"><input type="submit" class="botao-voltar-submit" value="VOLTAR"></a>
                    </div>

                    <!--Botão Cadastrar-->
                    <div class="botao-padrao-cadastrar">
                        <a href="#"><input type="submit" class="botao-cadastrar-submit" name="btn_cadastrar" value="CADASTRAR" onclick="abrir_modal()"></a>
                    </div>
                </div>
            </div>
        </form>
    </main>

</body>