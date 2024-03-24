<?php
session_start();
require __DIR__."/../vendor/autoload.php";
use App\Entity\Checklist;

$objCheck = new Checklist();
if(isset($_GET['id_usuario']) && $_GET['id_checklist']){

    $id_usuario=$_GET['id_usuario'];
    $id_checklist=$_GET['id_checklist'];
    // echo("entrou no if !");
     }
    
$busca = Checklist::getDetalhes($id_usuario,$id_checklist);
// echo '<pre>';
// echo print_r($busca);
// echo '</pre>';

$dados_responsavel='';

$dados_responsavel .= '<div class="dados_responsavel">
        
<div class="esquerda"><p>Nome: '.$busca[0] ["nome_usuario"].'
<p>Sala: '.$busca[0] ["nome_sala"].' </p>
</div>  

<div class="direita">
<p>Data Abertura: '.$busca[0] ["data_abertura"].'</p>
<p>Data Fechamento: '.$busca[0] ["data_fechamento"].' 
</p>
</div>
</div>';

$nao_conformidade='';

foreach($busca as $sala){
    $nao_conformidade .= '<div class="nao_conformidade">
    <P class="texto_nao_conformidade" >'.$sala["descricao_NC"].' </P>

    <div class="area_imagens">
        <img class="imagem_nao_conformidade" src="../storage/n_conformidade/'.$sala["img1"].'" alt="">
        <img class="imagem_nao_conformidade" src="../storage/n_conformidade/'.$sala["img2"].'" alt="">
        <img class="imagem_nao_conformidade" src="../storage/n_conformidade/'.$sala["img3"].'" alt="">  
        
    </div>
                                                                                                                </div>';
}











include_once("../includes/menu.php"); 
require("../includes/main/main_detalhes_relatorio.php");
// require("../includes/footer/footer.php");















?>