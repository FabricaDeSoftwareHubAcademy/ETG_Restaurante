<?php 

require __DIR__."/../vendor/autoload.php";
use App\Entity\Pergunta;
use App\Entity\Checklist;

$ob_checklist = new Checklist(12);
echo($ob_checklist->checklistResp(1))


?>