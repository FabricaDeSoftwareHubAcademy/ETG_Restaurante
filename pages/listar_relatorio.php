<?php
session_start();
$titulo_page = 'Mural Recados'; 
include_once("../includes/menu.php");

use App\Entity\Relatorio;

$salas = "";
$dados = Relatorio::getTudo();

// echo '<pre>';
// print_r($dados);
// echo '</pre>';
// exit;

foreach($dados as $sala){
    $status_sala = $sala['status'];

        // var_dump($dados);exit;

    if($sala['status'] == 'L'){
    $salas_lista .='
        <tbody>
            <td>
                <div class="div-td">
                    <img src="../storage/salas/'.$sala['img_sala'].'" alt="img" class="img-td">
                    <p>'.$sala['nome_sala'].'</p>
                </div>
            </td>
            <td>
                <div class="div-td">
                    <i class="bi bi-circle-fill-green"> Em dia</i>
                </div>
            </td>
            <td>
                <div class="div-td">
                    <p class="p-data">'.$sala['data_fechamento'].'</p>
                </div>
            </td>
            <td>
                <div class="div-td">
                    <div class="progress-bar-dia">
                        <div class="progress-dia"></div>
                    </div>
                    <p class="p-progress">Sem intervenção</p>
                </div>
            </td>
            <td>
                <div class="div-td">
                <p class="p-docente">'.$sala['nome_responsavel'].'</p>
                </div>
            </td>
        </tbody>';
    }

    if($sala['status'] == 'B'){
        $salas_lista .='
            <tbody>
                <td>
                    <div class="div-td">
                        <img src="../storage/salas/'.$sala['img_sala'].'" alt="img" class="img-td">
                        <p>'.$sala['nome_sala'].'</p>
                    </div>
                </td>
                <td>
                    <div class="div-td">
                        <i class="bi bi-circle-fill"> Em atraso</i>
                    </div>
                </td>
                <td>
                    <div class="div-td">
                        <p class="p-data">'.$sala['data_fechamento'].'</p>
                    </div>
                </td>
                <td>
                <div class="div-td">
                        <div class="progress-bar">
                            <div class="progress"></div>
                        </div>
                    <p class="p-progress">Aguardando Logística</p>
                </div>
                </td>
                <td>
                    <div class="div-td">
                    <p class="p-docente">'.$sala['nome_responsavel'].'</p>
                    </div>
                </td>
            </tbody>';
        }
        if($sala['status'] == 'A'){
            $salas_lista .='
                <tbody>
                    <td>
                        <div class="div-td">
                            <img src="../storage/salas/'.$sala['img_sala'].'" alt="img" class="img-td">
                            <p>'.$sala['nome_sala'].'</p>
                        </div>
                    </td>
                    <td>
                        <div class="div-td">
                            <i class="bi bi-circle-fill"> Em atraso</i>
                        </div>
                    </td>
                    <td>
                        <div class="div-td">
                            <p class="p-data">'.$sala['data_fechamento'].'</p>
                        </div>
                    </td>
                    <td>
                    <div class="div-td">
                            <div class="progress-bar">
                                <div class="progress"></div>
                            </div>
                        <p class="p-progress">Aguardando Logística</p>
                    </div>
                    </td>
                    <td>
                        <div class="div-td">
                        <p class="p-docente">'.$sala['nome_responsavel'].'</p>
                        </div>
                    </td>
                </tbody>';
            }
            if($sala['status'] == 'D'){
                $salas_lista .='
                    <tbody>
                        <td>
                            <div class="div-td">
                                <img src="../storage/salas/'.$sala['img_sala'].'" alt="img" class="img-td">
                                <p>'.$sala['nome_sala'].'</p>
                            </div>
                        </td>
                        <td>
                            <div class="div-td">
                                <i>DESATIVADA</i>
                            </div>
                        </td>
                        <td>
                            <div class="div-td">
                                <p class="p-data">'.$sala['data_fechamento'].'</p>
                            </div>
                        </td>
                        <td>
                        <div class="div-td">
                            <p class="p-progress">DESATIVADA</p>
                        </div>
                        </td>
                        <td>
                            <div class="div-td">
                            <p class="p-docente">'.$sala['nome_responsavel'].'</p>
                            </div>
                        </td>
                    </tbody>';
                }
}





            // <h1 class="title_sala">'.$sala['nome'].'</h1>
            
            // require autoload = 0 bugs 
            require "../vendor/autoload.php";
            
            
            
            
            $titulo_page = 'Listar Relatorios';
            
    
    include_once("../includes/header/header.php");
    require("../includes/main/main_listar_relatorio.php");

?>