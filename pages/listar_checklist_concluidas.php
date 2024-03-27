<?php
session_start();
include_once("../includes/menu.php");
if(!$ifgencheck){
    header("Location: ../pages/listar_recados.php");
}

use App\Entity\Checklist;


$_GET['pagina'] = isset($_GET['pagina']) ? $_GET['pagina']:1;
$inicio = ($_GET['pagina']-1)*5;
// var_dump($_GET['pagina'],$inicio);
$checklist = Checklist::getDoneCheck($inicio);
$length = ceil($checklist[1]['total']/5);
$checklist = $checklist[0];
// var_dump($checklist, $length);

$list = '';
foreach($checklist as $row){
    $row['data_abertura'] = date('d/m/Y H:i', strtotime($row['data_abertura']));
    $row['data_fechamento']!=null ? $row['data_fechamento'] = date('d/m/Y H:i', strtotime($row['data_fechamento'])) : $row['data_fechamento']='';
    $row['conf_logis'] = ($row['conf_logis']=='n') ? '<i class="bi bi-exclamation-octagon"></i>' : '<i class="bi bi-check-square"></i>';
    $list .= '<a href="validar_checklist.php?id_realizacao='.$row['id_responder'].'" class="card">
                <div class="card_detalhes">
                    <div class="card_img" style="border: 2px solid'.$row['cor'].'">
                        <img class="img_sala" src="../storage/salas/'.$row['img_sala'].'" alt="foto da sala">
                        <h3 class="cod_sala">'.$row['codigo'].'</h3>
                    </div>
                    <div class="card_info">
                        <div class="card_text">
                            <div class="card_header_title">
                                <h3>'.$row['nome_sala'].'</h3>
                            </div>
                            
                            <div class="card_header_subtitle">
                                <p>Aberto: '.$row['data_abertura'].'</p>
                                <p>Fechado: '.$row['data_fechamento'].'</p>
                                <p>Docente: '.strtok($row['nome'],' ').'</p>
                            </div>

                        </div>
                    </div>
                </div>
                
                <div class="card_icon">'.
                $row['conf_logis']
                .'</div>
            </a>';
    }


include_once("../includes/header/header.php");
include_once("../includes/main/main_listar_checklist_concluidas.php");