<?php
session_start();
require __DIR__.'/vendor/autoload.php';

use App\Entity\Pergunta;

$recado = new Pergunta('Simões');

print_r($recado->getPerguntasById(12)->fetchAll(PDO::FETCH_ASSOC));
