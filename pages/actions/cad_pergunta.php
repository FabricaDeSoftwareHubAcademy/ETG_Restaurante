<?php 

require __DIR__."/../../vendor/autoload.php";
use App\Entity\Pergunta; 
$obPergunta = new Pergunta($_POST['nova_pergunta']);

if(isset($_POST['antes_da_aula'],$_POST['depois_da_aula'])){
    // ambas 
    $obPergunta->cadastrar('2');

}elseif(isset($_POST['antes_da_aula'])){
    // apenas antes 
    $obPergunta->cadastrar('0');


}elseif(isset($_POST['depois_da_aula'])){
    // apenas depois 
    $obPergunta->cadastrar('1');

}
 

echo(json_encode($_POST));

?>