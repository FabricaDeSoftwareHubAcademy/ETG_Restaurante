<?php 

require __DIR__."/../../vendor/autoload.php";
use App\Entity\NaoConformidade;

// definindo variaveis
$id_user = 1;
$id_checklist = 1;
$data_abertura = '2024-02-27 11:14:22';
$data_fechamento = '2024-04-27 15:14:30';
$datas = [$data_abertura,$data_fechamento];

// $datas = [$data_abertura,$data_fechamento];

print_r(NaoConformidade::getNCLogistica(id_prof:$id_user,datas:$datas));



?>