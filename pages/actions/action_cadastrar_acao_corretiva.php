<?php
require __DIR__."/../../vendor/autoload.php";
use App\Entity\AcaoCorretiva;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function convert_base64_png(String $img) {
    //LOGICA DA IMAGEM
    list($type, $data) = explode(';', $img);
    list(, $data) = explode(',', $data); 
    $img_decodificada = base64_decode($data); 
    $nome = uniqid().'_acao_corretiva.png'; 
    $caminho_salvar = '../../storage/acao_corretiva/'.$nome;
    file_put_contents($caminho_salvar, $img_decodificada);
    return $nome;
}

$data = json_decode(file_get_contents("php://input"), true);
// $response = ["status" => true, "data" => $data];

foreach ($data[0] as $AcaoCorretiva) {
    $id_nao_conformidade = $AcaoCorretiva["id_nao_conformidade"];
    $descricao = $AcaoCorretiva["textAreaContent"];
    $img_1 = $AcaoCorretiva["imagesToPHP"][0];
    // $img_2 = $AcaoCorretiva["imagesToPHP"][1];
    // $img_3 = $AcaoCorretiva["imagesToPHP"][2];

    $img_1 = ($img_1 != "") ? convert_base64_png($img_1) : "";
    // $img_2 = ($img_2 != "") ? convert_base64_png($img_2) : "";
    // $img_3 = ($img_3 != "") ? convert_base64_png($img_3) : "";
    
    
    $objeto_acao_corretiva = new AcaoCorretiva($id_nao_conformidade, $descricao, $img_1);
    echo json_encode($img_1);
    // $id_nao_conformidade,
    // $descricao,
    // $img_1,
    // $img_2,
    // $img_3?

    // $responseDB = $objeto_acao_corretiva->save();

    // if(!$responseDB) {
    //     //ARMAZENAR NO LOG
    //     $response = ["status" => false];
    //     break;
    // }
}






