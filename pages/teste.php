<?php 
require __DIR__."/../vendor/autoload.php";
use App\Entity\Pergunta;

var_dump(Pergunta::getPerguntasByChecklist(2));



?>