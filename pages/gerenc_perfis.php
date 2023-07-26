<?php
require_once("../includes/menu.php");
require_once("../app/entity/Perfil.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerencimento_perfis</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/estilo_gerenc_perfis.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
   
</head>
<body class="tela_gerenciam_perfis">
    <div class="container_gp">
        <div class="titulo_gp">
            <h1 class="Perfis">Perfis</h1>
            <div class="card_perfil">
                <img src="../assets/imgs/icons/icon_profile.png" alt="icone_perfil" id="icone_perfil">
                <div class="card_nome">
                <h2 class="tipo_perfil">Docente 1</h2>
                <h3 class="funcao">docente</h3>
            </div>
            <img src="../assets/imgs/icons/icon_editar.png" alt="icone_editar" class="icone_editar"> 
            <i class="bi bi-trash"></i> 
        </div>
            <div class="card_perfil">
                <img src="../assets/imgs/icons/icon_profile.png" alt="icone_perfil" id="icone_perfil">
                <div class="card_nome">
                <h2 class="tipo_perfil">Administrador 1</h2>
                <h3 class="funcao">Administrador</h3>
            </div>
            <img src="../assets/imgs/icons/icon_editar.png" alt="icone_editar" class="icone_editar">
            <i class="bi bi-trash"></i>
        </div>
            <div class="card_perfil">
                <img src="../assets/imgs/icons/icon_profile.png" alt="icone_perfil" id="icone_perfil">
               <div class="card_nome">
                <h2 class="tipo_perfil">Logística 1</h2>
                <h3 class="funcao">Logística</h3>
            </div>
            <img src="../assets/imgs/icons/icon_editar.png" alt="icone_editar" class="icone_editar">
            <i class="bi bi-trash"></i>
    </div>
    <div class="botoes">
                <!--Botão Voltar-->
                <div class="botao-padrao-voltar">
                    <a href="../pages/editar_salas.php"><input type="submit" class="botao-voltar-submit"  value="VOLTAR"></a>
                </div>
                <!--Botão Cadastrar Novo Perfil-->
                <div class="botao-padrao-novo-perfil">
                    <a href="../pages/cadastro_perfil.php"><input type="submit" class="botao-novo-perfil-submit"  value="CADASTRAR PERFIL"></a>
    </div>
 </div>
    
</body>
</html>