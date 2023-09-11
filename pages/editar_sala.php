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
    //die('teste');
    $funcionamento = json_decode($dados_sala[0]['funcionamento'], true);
}        

$options = '';
$checklists = array();  
$dados = $objCadastroChecklist -> getDados();

foreach ($dados as $row_check)
{
    $checklists[$row_check['id_cadastro_checklist']] = $row_check['nome']; 
    $options .= '<option  class="ops" value="'.$row_check['id_cadastro_checklist'].'"> '.$row_check['nome'].' </option>';
}
 

if (isset($_POST['btn_submit']))
{
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
        //var_dump($_FILES);
        $novo_nome_imagem = $obj_imagem::storeImg($_FILES['imagem_sala']['name']);
        $antigo_nome_imagem = '../storage/salas/'.$dados_sala[0]['imagem'];
        //echo $antigo_nome_imagem;exit;
        unlink($antigo_nome_imagem);
        
        
    }
    
    if($obj_sala -> setDados($_GET['id_sala'],
    [   
        'nome'              =>  $_POST['nome'],
        'andar'             =>  $_POST['andar_sala'],
        'checklist'         =>  $_POST['checklist'],
        'descricao'         =>  $_POST['descricao_sala'],
        'imagem'            =>  (strlen($_FILES['imagem_sala']['tmp_name']) ? $novo_nome_imagem : $dados_sala[0]['imagem']),
        'cor'               =>  $_POST['cor_sala'],
        'ativo_desativo'    =>  (isset($_POST['ativo_desativo']) ? 1 : 0),
        'funcionamento'     =>  $dias_funcionamentoJson
    ]))
    
    if($obj_sala -> setDados()){
        echo('cadastrou');
        echo("<script>function abrir_modal(){
            Swal.fire({
                title: 'Cadastrado com sucesso!', //TITULO DO POP_UP DE ACORDO COM SUA TELA 
                icon: 'success', // success, error e warning
                confirmButtonColor: '#609437', // DEFINE A COR DO BOTÃO OK
                confirmButtonText: 'OK'
            });
        }</script>");
        sleep(2);
        header("Location: listar_salas.php");
    }
    else
    {
        die('Update nao funcionou');
    }


}
require("../includes/main/main_editar_sala.php");
?>