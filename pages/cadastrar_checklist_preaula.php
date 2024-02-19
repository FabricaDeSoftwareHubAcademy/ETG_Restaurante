<?php  
session_start();
require __DIR__."/../vendor/autoload.php";
$titulo_page = 'Cadastrar Checklist Pre Aula';
require("../includes/header/header.php");
include_once("../includes/menu.php");
if(!$ifreacheck){
    header("Location: ./listar_recados.php");
}
use App\Entity\Checklist;
use App\Entity\Pergunta;
use App\Entity\Sala;
use App\Entity\NaoConformidade;
use App\Entity\Funcoes;
$obj_checklist = new Checklist();
$obj_pergunta = new Pergunta();
$dados_imprimir = "";
$obj_sala = new Sala();
 
//REGRAS DE NEGOCIO ABAIXO
$id_sala = $_GET["id_sala"]; //do metodo GET	
$id_usuario = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : ""; //do metodo GET
$data_fechamento = null;

$dados_pergunta = $obj_pergunta::getDados($id_sala);  
$dados_sala = $obj_sala::getDadosById($id_sala);

if ($dados_pergunta)
{
    foreach ($dados_pergunta as $linha)
    { 
        if ($linha["tipo"] == "0" || $linha['tipo'] == '2')
        {
            $dados_imprimir .= '
            <div class="input_checklist">

                <label class="label_checklist" for="data">'.$linha["pergunta"].'</label>
    
                <div class="row">
                    <div class="checkmark" id="btn_x'.$linha['id_pergunta'].'" onclick="atualizarValor('.$linha['id_pergunta'].',false)">
                        <i id="red'.$linha['id_pergunta'].'" class="bi bi-x"></i>
                    </div>
    
                    <div class="checkmark" onclick="atualizarValor('.$linha['id_pergunta'].',true)">
                        <i id="green'.$linha['id_pergunta'].'" class="bi bi-check"></i>
                    </div>
                </div>
            </div>';
        }  
    }
}


$dados_imprimir .= '
<input type="hidden" id="valor_booleano" name="valor_booleano" value="0">';

// $dados = json_decode(file_get_contents('php://input'), true);

echo('<script>
var respondidas = {}
    </script>');

//FIM DAS REGRAS DE NEGOCIO
require("../includes/main/main_cadastrar_checklist_preaula.php");

foreach ($dados_pergunta as $linha)
{
    if ($linha["tipo"] == "0" || $linha['tipo'] == '2')
    {
        echo('<script>
        respondidas['.$linha['id_pergunta'].'] = null
        </script>');
    }
}
require("../includes/footer/footer.php");




?>