<?php
session_start();
require __DIR__."/../vendor/autoload.php";
include_once("../includes/menu.php"); 
$titulo_page = 'Visualizar Sala';
require("../includes/header/header.php");

 
use App\Entity\Sala;
use App\Entity\Checklist;

 
if(isset($_GET['id_sala'])){
    
    $id_sala = $_GET['id_sala'];

    $dados = Sala::getDadosById($id_sala);
 
}

$btn_checklist = '';

$objCheck = new Checklist();
$teste = $objCheck->getLastCheck($id_sala);
$status = Sala::getDados(col:'status,responsavel',where:'id = '.$id_sala);

if($status[0]['status']=='L'){
    $btn_checklist = '
    <div class="botao-padrao-fazer-checklist">
        <a href="../pages/cadastrar_checklist_preaula.php?id_sala='.$_GET['id_sala'].'">
            <input type="submit" class="botao-fazer-checklist-submit" value="FAZER CHECKLIST">
        </a>
    </div>';
}
elseif($status[0]['status']=='A'){
    if($status[0]['responsavel'] ==$_SESSION['id_user'] || $ifreaac){
        $btn_checklist = '
                <div class="botao-padrao-fazer-checklist">
                    <a href="../pages/cadastrar_checklist_posaula.php?id_sala='.$_GET['id_sala'].'"><input type="submit" class="botao-fazer-checklist-submit"  value="PÓS AULA"></a>
                </div>';
    }
}




// if (isset($teste[0]["data_abertura"]) == null) {
//     $btn_checklist = '
//     <div class="botao-padrao-fazer-checklist">
//         <a href="../pages/cadastrar_checklist_preaula.php?id_sala='.$_GET['id_sala'].'">
//             <input type="submit" class="botao-fazer-checklist-submit" value="FAZER CHECKLIST">
//         </a>
//     </div>';
// }else{
    
//     if($teste[0]["data_fechamento"] != null){
    
//         $btn_checklist = '
//         <div class="botao-padrao-fazer-checklist">
//             <a href="../pages/cadastrar_checklist_preaula.php?id_sala='.$_GET['id_sala'].'"><input type="submit" class="botao-fazer-checklist-submit"  value="FAZER CHECKLIST"></a>
//         </div>';
//     }else{ 
    
//         $btn_checklist = '
//         <div class="botao-padrao-fazer-checklist">
//             <a href="../pages/cadastrar_checklist_posaula.php?id_sala='.$_GET['id_sala'].'"><input type="submit" class="botao-fazer-checklist-submit"  value="PÓS AULA"></a>
//         </div>';
    
//     }
// }

// print_r($dados);
// echo($dados['funcionamento']);
$funcionamento = json_decode($dados[0]['horarios'], true);
// print_r($funcionamento);

$segunda = $funcionamento['segunda'] == 'sim' ? 'Segunda' : '';
$terca = $funcionamento['terca'] == 'sim' ? 'Terça' : '';
$quarta = $funcionamento['quarta'] == 'sim' ? 'Quarta' : '';
$quinta = $funcionamento['quinta'] == 'sim' ? 'Quinta' : '';
$sexta = $funcionamento['sexta'] == 'sim' ? 'Sexta' : '';
$sabado = $funcionamento['sabado'] == 'sim' ? 'Sábado' : '';
$matutino = $funcionamento['turnos']['matutino'] == 'sim' ? 'Matutino' : ' ';
$vespertino = $funcionamento['turnos']['vespertino'] == 'sim' ? 'Vespertino' : ' ';
$noturno = $funcionamento['turnos']['noturno'] == 'sim' ? 'Noturno' : ' ';

require("../includes/main/main_visualizar_sala.php");
require("../includes/footer/footer.php");
?>