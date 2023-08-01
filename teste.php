<?php
session_start();
require __DIR__.'/vendor/autoload.php';

use App\Entity\Recado;

$recado = new Recado($_SESSION['num_matricula_logado'],'ugauga?');
$recado->update(50);
