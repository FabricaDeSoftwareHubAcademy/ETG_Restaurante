<?php
session_start();
require __DIR__.'/vendor/autoload.php';

use App\Entity\Notificacao;


$pacoca = new Notificacao (null,1552,6792,"desliga o gas rapá!");

 



$pacoca -> cadastrar_notificacao ();

 