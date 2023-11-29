<?php

$maiorIdade=0;

if($_POST){
    $maiorIdade=true;
    return(json_encode($_POST));

}else{
    $maiorIdade=false;
}

// echo(json_encode($_POST));

// var_dump($_POST);

// var_dump($maiorIdade);
// echo(json_encode($maiorIdade));

