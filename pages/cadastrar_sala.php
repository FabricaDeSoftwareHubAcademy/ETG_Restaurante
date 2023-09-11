
<?php
require __DIR__."/../vendor/autoload.php";
include_once("../includes/menu.php"); 
require("../includes/header/header.php");

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
    //logica do Json das checkbox de periodo
            // $dias_funcionamento = array("segunda" => ($_POST['segunda'] == 'on' ? 'sim' : 'nao'),

            //                             "terca" => ($_POST['terca'] == 'on' ? 'sim' : 'nao'),

            //                             "quarta" => ($_POST['quarta'] == 'on' ? 'sim' : 'nao'),

            //                             "quinta" => ($_POST['quinta'] == 'on' ? 'sim' : 'nao'),

            //                             "sexta" => ($_POST['sexta'] == 'on' ? 'sim' : 'nao'),
                                        
            //                             "sabado" => ($_POST['sabado'] == 'on' ? 'sim' : 'nao'),

            //                             "turnos" => array(
            //                                 'matutino'          => ($_POST['matutino'] == 'on' ? 'sim' : 'nao'),
            //                                 'vespertino'        => ($_POST['vespertino'] == 'on' ? 'sim' : 'nao'),
            //                                 'noturno'           => ($_POST['noturno'] == 'on' ? 'sim' : 'nao')
            //                                             )
            //                             );
            // $dias_funcionamentoJson = json_encode($dias_funcionamento);
            
            //var_dump($dias_funcionamentoJson);exit;
    if (!empty($_FILES['imagem_sala']['name']))
    {
        $objImagem = new Imagens;
        $imagem = $objImagem::storeImg($_FILES['imagem_sala']['name']);
        
    }
            
    $obj_sala = new Sala
    (
        $_POST       ['nome_sala'],
        $_POST      ['codigo_sala'],
        $_POST      ['cor_sala'],
        $imagem,
        $_POST      ['descricao_sala'],
        null, //status
        null, //horarios
        $_POST['checklist'],
        null
        
            
    );
        
    if($obj_sala -> cadastrar())
    {
        die('cadastrou!');
    }
    else
    {
        die('nao cadastrou');
    }
            
}   
        
require("../includes/main/main_cadastrar_sala.php");
require("../includes/footer/footer.php");
?>