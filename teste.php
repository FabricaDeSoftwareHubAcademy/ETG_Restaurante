<?php
session_start();
require __DIR__.'/vendor/autoload.php';

use App\Entity\Notificacao;


$pacoca = new Notificacao (null,1552,6792,"paçoca123");

// var_dump($pacoca);



// $pacoca -> cadastrar_notificacao ();

// echo(date('h/d/m/y'));


$dados = $pacoca -> getNotificacao();

var_dump($dados);

