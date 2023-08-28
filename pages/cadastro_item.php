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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro item</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <main class="meio">
        <h1 id="titulo">
            Cadastro de Perguntas
         </h1>
        <form class="formis">
            <div class="pesquisa">
                <div class="input_group field">
                    <input type="input" class="input_field" placeholder="." required="" name="nome-checklist" autocomplete="off">
                    <label for="name" class="input_label">Nome do CheckList
                    </label> <!--Alterar para o nome do input-->
                    <i class="bi bi-search" id="lupa"></i>
                </div>
            </div>
            <section class="perguntas">
                <div class="question1">
                    <p name="question_text" id="question_text">Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?</p>
                    <i class="bi bi-pencil-square"></i>
                    <i class="bi bi-trash"></i>                    </i>
                </div>
                <div class="question1">
                    <p name="question_text" id="question_text">Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?</p>
                    <i class="bi bi-pencil-square"></i>
                    <i class="bi bi-trash"></i>                    </i>
                </div>
                <div class="question1">
                    <p name="question_text" id="question_text">Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?</p>
                    <i class="bi bi-pencil-square"></i>
                    <i class="bi bi-trash"></i>                    </i>
                </div>
                <div class="question1">
                    <p name="question_text" id="question_text">Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?</p>
                    <i class="bi bi-pencil-square"></i>
                    <i class="bi bi-trash"></i>                    </i>
                </div>
                <div class="question1">
                    <p name="question_text" id="question_text">Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?</p>
                    <i class="bi bi-pencil-square"></i>
                    <i class="bi bi-trash"></i>                    </i>
                </div>
                <div class="question1">
                    <p name="question_text" id="question_text">Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?</p>
                    <i class="bi bi-pencil-square"></i>
                    <i class="bi bi-trash"></i>                    </i>
                </div>
                <div class="question1">
                    <p name="question_text" id="question_text">Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?</p>
                    <i class="bi bi-pencil-square"></i>
                    <i class="bi bi-trash"></i>                    </i>
                </div>
                <div class="question1">
                    <p name="question_text" id="question_text">Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?</p>
                    <i class="bi bi-pencil-square"></i>
                    <i class="bi bi-trash"></i>                    </i>
                </div>
                
                <div class="question1">
                    <p name="question_text" id="question_text">Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?</p>
                    <i class="bi bi-pencil-square"></i>
                    <i class="bi bi-trash"></i>                    </i>
                </div>
            </section>
            
            <div class="botao">
                <a href="#"><input type="submit" class="botao-cadastrar-submit"  value="CADASTRAR"></a>
            </div>
        </form>
        
    </main>
</body>
</html>

