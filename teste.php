<?php
session_start();
require __DIR__.'/vendor/autoload.php';

use App\Entity\Notificacao;


$pacoca = new Notificacao (null,1552,6792,"Por favor Sr. Bauman, comparecer ao setor de carne para averiguarmos sua inadimplencia a respeito da cozinha!");

 



$pacoca -> cadastrar_notificacao ();

 