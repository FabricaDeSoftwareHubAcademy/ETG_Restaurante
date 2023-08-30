<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Perfil</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https/cdnjs.cloudflare.comlibs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
<!-- POP_UP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<!-- POP_UP -->

    <link rel="stylesheet" href="../assets/css/estilo_botoes_padronizados.css">
    <link rel="stylesheet" href="../assets/css/cadastro_perfil.css">
    
</head>

<body class="tela_cadastro_perfil">
    <?php
    //toma essa gambiarra ass luiz
    include_once("../includes/menu.php"); 
    ?>
    <div class="container">
        <div class="titulo_cad" >
            <h1 class="titulo_cad_perfil">Cadastro de Perfil</h1>
        </div>
        <form method="POST" class="form_permissoes">
            <div class="input_group">
                <input type="input" class="input_field" placeholder="Name" name="nome_cargo">
                <label for="name" class="input_label">Nome</label> <!--Alterar para o nome do input-->
            </div>
            <div class="permissoes_salas">
                <label class="titulo_permissoes">Permissões da Sala:</label>
                <div class="permissoes_salas_tipos">
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Cadastrar Salas</label>
                        <input type="checkbox" class="checkbox_permissoes" name="cadastrar_sala"  autocomplete="off"/>
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Edição de Salas</label>
                        <input type="checkbox" class="checkbox_permissoes" name="editar_sala"  autocomplete="off" />
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Remover Salas</label>
                        <input type="checkbox" class="checkbox_permissoes" name="remover_sala"  autocomplete="off"/>
                    </div>
                </div>
            </div>
            <div class="permissoes_salas">
                <label class="titulo_permissoes">Permissões do Check-List:</label>
                <div class="permissoes_salas_tipos">
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Validar Check-List</label>
                        <input type="checkbox" class="checkbox_permissoes" name="validar_checklist"  autocomplete="off" />
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Inserir Item</label>
                        <input type="checkbox" class="checkbox_permissoes" name="inserir_item_checklist"  autocomplete="off" />
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Remover Item</label>
                        <input type="checkbox" class="checkbox_permissoes" name="remover_item_checklist"  autocomplete="off" />
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Desbloquear Check-List</label>
                        <input type="checkbox" class="checkbox_permissoes" name="desbloquear_checklist"  autocomplete="off" />
                    </div>
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Descrição de Não Conformidade</label>
                        <input type="checkbox" class="checkbox_permissoes" name="descricao_nao_conformidade"  autocomplete="off"/>
                    </div>
                </div>
            </div>
            <div class="permissoes_salas">
                <label class="titulo_permissoes">Permissões de Notificações:</label>
                <div class="permissoes_salas_tipos">
                    <div class="permissoes_salas_itens">
                        <label class="label_permissao">Enviar Notificações</label>
                        <input type="checkbox" class="checkbox_permissoes" name="enviar_notificacao"  autocomplete="off"/>
                    </div>
                </div>
            </div>
            <div class="container_gp2">
                <div class="botoes">
                    <!--Botão Voltar-->
                    <div class="botao-padrao-voltar">
                        <a href="gerenc_perfis.php" class="botao-voltar-submit">VOLTAR</a>
                    </div>
                    <!--Botão Salvar-->
                    <div class="botao-padrao-salvar">
                        <a href="../pages/gerenc_perfis.php"><input name="botao_salvar" type="submit" class="botao-salvar-submit" value="SALVAR" onclick="abrir_modal()"></a>
                    </div>
                </div>
            </div>
        </form>
    </div>     
    <script>
        function abrir_modal(){
            Swal.fire({
                 title: 'Perfil cadastrado com sucesso!', //TITULO DO POP_UP DE ACORDO COM SUA TELA 
                 icon: 'success', // success, error e warning
                 confirmButtonColor: '#609437', // DEFINE A COR DO BOTÃO OK
                 confirmButtonText: 'OK'
            });
        }
    </script>
</body>
</html>
