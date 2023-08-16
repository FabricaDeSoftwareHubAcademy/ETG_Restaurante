<?php

include_once("../includes/menu.php");
require ("../vendor/autoload.php");

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checklist Pré-Aula</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="../assets/css/estilo_checklist_pre_aula.css">
    
</head>

<body class="container_checklist">
    <h1 class="titulo_checklist">Checklist Pré-Aula</h1>
    <h2 class="nome_sala">Cozinha Didática 2</h2>

    <main class="main_checklist">
        <form action="checklist_pre_aula.php" method="POST">
            <div class="input_checklist">
                <label class="label_checklist" for="data">Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?</label>
                    <div class="row">
                        <div class="checkmark" onclick="check(false)">
                            <i id="red" class="bi bi-x"></i>
                        </div>

                        <div class="checkmark" onclick="check(true)">
                            <i id="green" class="bi bi-check"></i>
                        </div>
                    </div>
            </div>
            <div class="botoes">
                <!--Botão Voltar-->
                <div class="botao-padrao-voltar">
                    <a href="gerenc_perfis.php"class="botao-voltar-submit">CONFIRMAR</a>
                </div>
                <!--Botão Salvar-->
                <div class="botao-padrao-voltar">
                    <a href="#"><input name="botao_salvar" type="submit" class="botao-salvar-submit"  value="CANCELAR" onclick="abrir_modal()"></a>
                </div>
            </div>
        </form>
    </main>
</body>
<script src="../assets/js/checklist.js"></script>
</html>