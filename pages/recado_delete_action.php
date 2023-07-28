<?php

use \App\Entity\Recado;


if(isset($_GET['id_recado'])){
    $id_recado = $_GET['id_recado'];
}else{
    header("Location: mural.php");
}


$recado = new Recado();

// coming soon....