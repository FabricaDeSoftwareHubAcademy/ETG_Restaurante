<?php
require __DIR__ ."/../vendor/autoload.php";
$titulo_page = 'Cadastrar Checklist';
include_once("../includes/menu.php"); 


use App\Entity\Pergunta;
use App\Entity\CadastroChecklist;
use App\Entity\Funcoes;



$dados = Pergunta::getDados();
$tr = "";
// die('teste');

// Funcoes::dd($dados);

foreach ($dados as $rowdados) {
    $tr .= "<tr> 
                    <td><input type='checkbox'  id='checkbox' name='pergunta' value='" . $rowdados['id'] . "'></td>
                    <td>" . $rowdados['descricao'] . "</td>   
                </tr>";
}

if (isset($_POST['cadastrar'])) {

    $check = new CadastroChecklist();
    $check->nome = $_POST['nome-checklist'];
    $id = $check->cadastrar();
}

if (isset($_POST[''])) {

    $check = new CadastroChecklist();
    $check = $_POST['id_cadastro_pergunta'];
    $id = $check->cadastrar();
}
if (isset($_POST['pergunta'])) {
    $perguntas = $_POST['pergunta'];
    $check->cadastrarPergunta($perguntas, $id);

    echo ("<script>
    function abrir_modal(){
        Swal.fire({
            title: 'Cadastrado com sucesso!', //TITULO DO POP_UP DE ACORDO COM SUA TELA 
            icon: 'success', // success, error e warning
            confirmButtonColor: '#609437', // DEFINE A COR DO BOTÃO OK
            confirmButtonText: 'OK'
        });
    }
        </script>");
}
require("../includes/header/header.php");
require("../includes/main/main_cadastrar_checklist.php");
?>