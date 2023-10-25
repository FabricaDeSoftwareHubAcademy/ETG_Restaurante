<?php
require __DIR__."/../vendor/autoload.php";
include_once("../includes/menu.php"); 
require("../includes/header/header.php");



$obj_sala = new App\Entity\Sala;
$obj_imagem = new App\Entity\Imagens;

use App\Entity\CadastroChecklist; 
$objCadastroChecklist = new CadastroChecklist();


if (isset($_GET['id_sala']))
{  
     
    $dados_sala = $obj_sala::getDadosById($_GET['id_sala']);
    $funcionamento = json_decode($dados_sala[0]['horarios'], true);
}        

$options = '';
$checklists = array();  
$dados = $objCadastroChecklist -> getDados();

foreach ($dados as $row_check)
{
    $checklists[$row_check['id']] = $row_check['nome']; 
    $options .= '<option  class="ops" value="'.$row_check['id'].'"> '.$row_check['nome'].' </option>';
}
 

if (isset($_POST['btn_submit']))
{
    //echo($dados_sala[0]['id']);exit;
    //novo JSON de turnos para UPDATE
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
    if (!empty($_FILES['imagem_sala']['name']))
    {   
        $novo_nome_imagem = $obj_imagem::storeImg($_FILES['imagem_sala']['name']);
        $antigo_nome_imagem = '../storage/salas/'.$dados_sala[0]['imagem'];
        unlink($antigo_nome_imagem);
    }
    $obj_sala -> setDados($_GET['id_sala'],
    [   
        'nome'              =>  $_POST['nome'],
        'codigo'             =>  $_POST['codigo'],
        'cor_itens'         =>  $_POST['cor_itens'],
        'img_sala'         =>  (strlen($_FILES['imagem_sala']['tmp_name']) ? $novo_nome_imagem : $dados_sala[0]['img_sala']),
        'descricao'            =>  $_POST['descricao'],
        'status'               =>  null,
        'horarios'    =>  $dias_funcionamentoJson,
        'id_check'     =>  $_POST['checklist']
    ]);
    
    header("Location: ../");
    
    
    // if($obj_sala -> setDados()){
    //     echo('cadastrou');
    //     echo("<script>function abrir_modal(){
    //         Swal.fire({
    //             title: 'Cadastrado com sucesso!', //TITULO DO POP_UP DE ACORDO COM SUA TELA 
    //             icon: 'success', // success, error e warning
    //             confirmButtonColor: '#609437', // DEFINE A COR DO BOTÃO OK
    //             confirmButtonText: 'OK'
    //         });
    //     }</script>");
    //     sleep(2);
    //     header("Location: listar_salas.php");
    // }



}
require("../includes/main/main_editar_sala.php");
?>