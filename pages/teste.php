<?php 

require __DIR__."/../vendor/autoload.php";
use App\Entity\Pergunta;
use App\Entity\Checklist;

$ob_checklist = new Checklist(12);
$ob_checklist->updateChecklist([3,3,1],'RORONOA ZORO');


?>