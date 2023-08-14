<?php
session_start();
if(!isset($_SESSION['num_matricula_logado'])){
 
    header('Location: ../');
}
include_once("../includes/menu.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela_cadastro_item</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="pai-de-todos">
<?php include_once("../includes/menu.php"); ?>
    <main class="container"> 
        <div class="pag_name">
            <p class="wanderley-titulo">Cadastro de perguntas</p>
        </div>
        <form class="content">
            <textarea name="descricao" id="descricao" cols="30" rows="10" placeholder="Descrição da nova pergunta"></textarea>
            <p class="wanderley"> A nova pergunta será cadastrada para: </p>
            <div class="boxes">
                <label class="wanderley">
                    Antes das aulas
                    <input type="checkbox" class="antes_aula">
                </label>
                <label class="wanderley">
                    Depois das aulas
                    <input type="checkbox" class="depois_aula">
                </label>
            </div>
            <p class="wanderley">Peguntas já cadastradas:</p>
        </form>
        <div class="perguntas_cadastradas">
            <div class="titulo"></div>
            <div class="box_perguntas"></div>
        </div>
        <div class="botoes">
            <a href="#"><input type="submit" class="botao-voltar-submit"  value="VOLTAR"></a>
            <a href="#"><input type="submit" class="botao-cadastrar-submit"  value="CADASTRAR"></a>
        </div>
    </main>
</body>
</html>