
<?php
require __DIR__."/../vendor/autoload.php";

include_once("../includes/menu.php"); 

use App\Entity\Sala;
use App\Entity\CadastroChecklist;
use App\Entity\Imagens;




$objCadastroChecklist = new CadastroChecklist();
$dados = $objCadastroChecklist -> getDados();
$options = '';
foreach ($dados as $row_check ){
    $options .= '<option  class="ops" value="'.$row_check['id'].'"> '.$row_check['nome'].' </option>';
}

 
if (isset(
            $_POST      ['btn_submit']    
        ))
{   
    // var_dump($_FILES);exit;
    if (!empty($_FILES['img_sala']['name']))
    {
        $objImagem = new Imagens;
        // $imagem = $objImagem::storeImg($_FILES['imagem_sala']['name']);
        $novo_nome_imagem = $objImagem::storeImg($_FILES['img_sala']['name']); 
        
    
            
    $dias_funcionamento = array("segunda" => ($_POST['segunda'] == 'on' ? 'sim' : 'nao'),

    "terca" => ($_POST['terca'] == 'on' ? 'sim' : 'nao'),

    "quarta" => ($_POST['quarta'] == 'on' ? 'sim' : 'nao'),

    "quinta" => ($_POST['quinta'] == 'on' ? 'sim' : 'nao'),

    "sexta" => ($_POST['sexta'] == 'on' ? 'sim' : 'nao'),
    
    "sabado" => ($_POST['sabado'] == 'on' ? 'sim' : 'nao'),

    "turnos" => array(
        'matutino'          => ($_POST['matutino'] == 'on' ? 'sim' : 'nao'),
        'vespertino'        => ($_POST['vespertino'] == 'on' ? 'sim' : 'nao'),
        'noturno'           => ($_POST['noturno'] == 'on' ? 'sim' : 'nao')
                    )
    );
    $dias_funcionamentoJson = json_encode($dias_funcionamento);
    // linha que eu add  $imagem = $objImagem::storeImg($_FILES['imagem_sala']['name']); // 
    // $imagem = $objImagem::storeImg($_FILES['imagem_sala']['name']);
    $obj_sala = new Sala
    (
        $_POST       ['nome_sala'],
        $_POST      ['codigo_sala'],
        $_POST      ['cor_sala'],
        $imagem,
        $_POST      ['descricao_sala'],
        null, //status
        $dias_funcionamentoJson, //horarios
        $_POST['checklist'],
        null
    );
        $obj_sala -> cadastrar();
        header("Location: listar_salas.php");
    }
}   
require("../includes/header/header.php");
require("../includes/main/main_cadastrar_sala.php");
require("../includes/footer/footer.php");

?>