<?php

$maiorIdade=0;

if($_POST){
    $maiorIdade=true;
}else{
    $maiorIdade=false;
}

// echo(json_encode($_POST));
echo(json_encode($maiorIdade));

