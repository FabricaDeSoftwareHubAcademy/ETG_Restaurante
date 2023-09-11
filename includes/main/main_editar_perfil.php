
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
        <form method="POST" class="form_permissoes" action="../">
            <div class="input_group">
                <input type="input" class="input_field" placeholder="Name" name="nome_cargo" value="<?=$dados[0]["nome"];?>" >
                <label for="name" class="input_label">Nome</label> <!--Alterar para o nome do input-->
            </div>
            <div class="permissoes_salas">
                <label class="titulo_permissoes">Permissões da Sala:</label>
                <div class="permissoes_salas_tipos">
                    <div class="permissoes_salas_itens"> 
                        <label class="label_permissao">Cadastrar Salas</label>
                        <input type="checkbox" class="checkbox_permissoes" name="cadastrar_sala" <?php echo $cadastrar_salas == 1 ? "checked" : "";?>  />
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Edição de Salas</label>
                        <input type="checkbox" class="checkbox_permissoes" name="editar_sala"   <?php echo $editar_salas == 1 ? "checked" : "";?>  />
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Remover Salas</label>
                        <input type="checkbox" class="checkbox_permissoes" name="remover_sala"  <?php echo $remover_salas == 1 ? "checked" : "";?> />
                    </div>
                </div>
            </div>
            <div class="permissoes_salas">
                <label class="titulo_permissoes">Permissões do Check-List:</label>
                <div class="permissoes_salas_tipos">
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Validar Check-List</label>
                        <input type="checkbox" class="checkbox_permissoes" name="validar_checklist" <?php echo $validar_checklist == 1 ? "checked" : "" ?> />
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Inserir Item</label>
                        <input type="checkbox" class="checkbox_permissoes" name="inserir_item_checklist" <?php echo $inserir_item_checklist ==1 ? "checked" : "" ?> />
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Remover Item</label>
                        <input type="checkbox" class="checkbox_permissoes" name="remover_item_checklist" <?php echo $remover_item_checklist == 1 ? "checked" : "" ?> />
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Desbloquear Check-List</label>
                        <input type="checkbox" class="checkbox_permissoes" name="desbloquear_checklist" <?php echo $desbloquear_checklist ==1 ? "checked" : "" ?> />
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Descrição de Não Conformidade</label>
                        <input type="checkbox" class="checkbox_permissoes" name="descricao_nao_conformidade" <?php echo $descricao_nao_conformidade == 1 ? "checked" : "" ?> />
                    </div>
                </div>
            </div>
            <div class="permissoes_salas">
                <label class="titulo_permissoes">Permissões de Notificações:</label>
                <div class="permissoes_salas_tipos">
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Enviar Notificações</label>
                        <input type="checkbox" class="checkbox_permissoes" name="enviar_notificacao" <?php echo $enviar_notificacao == 1 ? "checked" : "" ?> />
                    </div>
                </div>
            </div>
            <div class="botoes">
                <!--Botão Voltar-->
                <div class="botao-padrao-voltar">
                    <a href="listar_perfis.php"class="botao-voltar-submit">VOLTAR</a>
                </div>
                <!--Botão Salvar-->
                <div class="botao-padrao-voltar">
                    <a href="listar_perfis.php"><input name="botao_salvar" type="submit" class="botao-salvar-submit"  value="SALVAR"></a>
                </div>
            </div>
        </form>  
    </div>
<!-- </main>    -->

</body>
