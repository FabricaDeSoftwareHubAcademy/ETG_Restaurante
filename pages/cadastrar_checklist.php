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
    $tr .= "    <tr> 
                    <td><input type='checkbox'  id='checkbox' name='perguntas[]' value='" . $rowdados['id'] . "'></td>
                    <td>" . $rowdados['descricao'] . "</td>   
                </tr>";
}

if (isset($_POST['btn_cadastrar']) && isset($_POST['nome_checklist'])) {
    $check = new CadastroChecklist();
    $check->nome = $_POST['nome_checklist'];
    $id = $check->cadastrar($_POST['perguntas']);
    echo ("
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js'></script>
    <script>    
        Swal.fire({
            title: 'Cadastrado com sucesso!', 
            icon: 'success', 
            confirmButtonColor: '#609437', 
            confirmButtonText: 'OK'
        });
    </script>");
}



require("../includes/header/header.php");
require("../includes/main/main_cadastrar_checklist.php");
?>