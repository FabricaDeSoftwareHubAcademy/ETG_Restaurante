<?php
require __DIR__ ."/../vendor/autoload.php";
$titulo_page = 'Cadastrar Checklist';
include_once("../includes/menu.php"); 
require("../includes/header/header.php");
require("../includes/main/main_cadastrar_checklist.php");

use App\Entity\Pergunta;
use App\Entity\CadastroChecklist;

$dados = Pergunta::getDados()->fetchAll(PDO::FETCH_ASSOC);
$tr = "";

foreach ($dados as $rowdados) {
    $tr .= "<tr> 
                    <td><input type='checkbox'  id='checkbox' name='pergunta[]' value='" . $rowdados['id_cadastro_pergunta'] . "'></td>
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
    $check   = $_POST['id_cadastro_pergunta'];
    $id = $check->cadastrar();
}
if (isset($_POST['pergunta'])) {
    $perguntas = $_POST['pergunta'];
    $check->cadastroPergunta($perguntas, $id);

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

?>