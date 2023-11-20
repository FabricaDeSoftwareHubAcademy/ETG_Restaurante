
<link rel="stylesheet" href="https/cdnjs.cloudflare.comlibs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
<!-- POP_UP -->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="../assets/css/cadastrar_editar_perfil.css">

<body class="tela_cadastro_perfil">
    <div class="container">
        <div class="titulo_cad" >
            <h1 class="titulo_cad_perfil" >
                Edição de Perfil
            </h1>
        </div>
        <form method="POST" class="form_permissoes">
            <div class="input_group">
                <input type="input" class="input_field" placeholder="Name" name="nome" maxlength="30"value="<?=$nome;?>">
                <label for="name" class="input_label">Nome</label> 
            </div>
            <div class="permissoes_salas">
                <label class="titulo_permissoes">Gerenciamento de Cadastro:</label>
                <div class="permissoes_salas_tipos">
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Gerenciar Salas</label>
                        <input type="checkbox" class="checkbox_permissoes" name="gerenciar_salas" id="gerenciar_salas"  autocomplete="off" <?php echo $gerenciar_salas == 1 ? "checked" : "";?>/>
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Gerenciar Perguntas</label>
                        <input type="checkbox" class="checkbox_permissoes" name="gerenciar_perguntas"  id="gerenciar_perguntas" autocomplete="off" <?php echo $gerenciar_perguntas == 1 ? "checked" : "";?>/>
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Gerenciar Checklists</label>
                        <input type="checkbox" class="checkbox_permissoes" name="gerenciar_checklists"  id="gerenciar_checklists" autocomplete="off"<?php echo $gerenciar_checklist == 1 ? "checked" : "";?>/>
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Gerenciar Recados</label>
                        <input type="checkbox" class="checkbox_permissoes" name="gerenciar_recados" id="gerenciar_recados" autocomplete="off" <?php echo $gerenciar_recados == 1 ? "checked" : "";?>/>
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Gerenciar Notificacoes</label>
                        <input type="checkbox" class="checkbox_permissoes" name="gerenciar_notificacoes"  id="gerenciar_notificacoes" autocomplete="off" <?php echo $gerenciar_notificacoes == 1 ? "checked" : "";?>/>
                    </div>

                </div>
            </div>
            <div class="permissoes_salas">
                <label class="titulo_permissoes">Checklist:</label>
                <div class="permissoes_salas_tipos">
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Realizar Checklist</label>
                        <input type="checkbox" class="checkbox_permissoes" name="realizar_checklist"  id="realizar_checklist" autocomplete="off" <?php echo $realizar_checklist == 1 ? "checked" : "";?>/>
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Nao conformidade e Acao corretiva</label>
                        <input type="checkbox" class="checkbox_permissoes" name="realizar_nao_conformidade" id="realizar_nao_conformidade" autocomplete="off" <?php echo $realizar_acao_corretiva == 1 ? "checked" : "";?>/>
                    </div>
                </div>
            </div>
            <div class="container_gp2">
                <div class="botoes">
                    <!--Botão Voltar-->
                    <div class="botao-padrao-voltar">
                        <a href="listar_perfis.php" class="botao-voltar-submit">VOLTAR</a>
                    </div>
                    <!--Botão Salvar-->
                    <div class="botao-padrao-salvar">
                        <a><input name="botao_salvar" type="submit" class="botao-salvar-submit" value="SALVAR"></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
<!-- </main>    -->

</body>
