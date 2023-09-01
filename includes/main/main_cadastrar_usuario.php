<link rel="stylesheet" href="../assets/css/cadastrar_usuario.css">
<link rel="stylesheet" href="../assets/css/estilo_botoes_padronizados.css">

<body class="Pai-de-todos">

    <main class="tudo_esqueceu_senha1">
        <form method="POST">
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
                    <select name="id_perfil" class="option">
                        <option value="">Selecione seu Perfil</option>
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
                    <a href="listar_salas.php" class="botao-voltar-submit">VOLTAR</a>
                </div>

            <!--Botão Confirmar-->
                <div class="botao-padrao-confirmar">
                    <a><input type="submit" class="botao-confirmar-submit" name="btn_submit" value="CONFIRMAR"></a>
                </div>

            </section>
        </form>
    </main>
</body>
