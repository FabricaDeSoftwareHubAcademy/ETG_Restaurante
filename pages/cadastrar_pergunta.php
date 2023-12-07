<?php
session_start();
require __DIR__."/../vendor/autoload.php";
include_once("../includes/menu.php"); 
$titulo_page = 'Cadastrar Pergunta';
require("../includes/header/header.php");

//REGRAS DE NEGOCIO ABAIXO
use App\Entity\Pergunta;
$obPergunta = new Pergunta();

$dados = $obPergunta->getPerguntas(); 
$divs = ""; 
foreach ($dados as $item) {

    $divs .= '<div class="question1">
    <p name="question_text" id="question_text">'.$item['descricao'].'</p>
    <div class="icons-question1">
        <button class="editar" onclick="openPopup2()"><i class="bi bi-pencil-square"></i></button>
        <button class="excluir" onclick="openPopup3()"><i class="bi bi-trash"></i></button>
    </div>
    </div>';

}

// <div class="question1">
// <p name="question_text" id="question_text">Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?</p>
// <i class="bi bi-pencil-square"></i>
// <i class="bi bi-trash"></i>                    </i>
// </div>


//FIM DAS REGRAS DE NEGOCIO

require("../includes/main/main_cadastrar_pergunta.php");
require("../includes/footer/footer.php");
?>