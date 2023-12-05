<?php 

require __DIR__."/../../vendor/autoload.php";
use App\Entity\Pergunta;

// if($_POST['antes_da_aula'] == 'on' && $_POST['depois_da_aula'] == 'on'){

//     try{

//         // cadastrar primeiro o pre 
//         $obPergunta = new Pergunta($_POST['nova_pergunta']);
//         $obPergunta->cadastrar('PRE');
    
//         // cadastrando o pos 
//         $obPergunta->cadastrar('POS');

        


//     }catch(Exception $e){

//         echo(json_encode($e->getMessage()));

//     }
// }elseif($_POST['antes_da_aula'] == 'on'){


//     try{ 

//         // cadastrar primeiro o pre 
//         $obPergunta = new Pergunta($_POST['nova_pergunta']);
//         $obPergunta->cadastrar('PRE'); 

//     }catch(Exception $e){

//         echo(json_encode($e->getMessage()));

//     } 
// }


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
 

echo(json_encode('cadastrou'));

?>