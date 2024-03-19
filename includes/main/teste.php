<?php


if(isset($_GET['parametro'])){

    $x = $_GET['parametro'];

    echo $x;

    if($x == 'true'){
        echo "es verdaded cabron";
    }


}else{
    echo "No paramet";
}


