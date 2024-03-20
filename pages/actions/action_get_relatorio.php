<?php 

require __DIR__."/../../vendor/autoload.php";
use App\Entity\NaoConformidade;
$id_user = 1;

print_r(NaoConformidade::getNCLogistica($id_user));



?>