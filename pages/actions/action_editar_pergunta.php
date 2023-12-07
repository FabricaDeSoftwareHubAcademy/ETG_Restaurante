<?php 

require __DIR__."/../../vendor/autoload.php";
use App\Entity\Pergunta;

// echo(json_encode($_GET));

if(isset($_POST['antes_da_aula']) || isset($_POST['depois_da_aula'])){
    

    if(isset($_POST['antes_da_aula'],$_POST['depois_da_aula'])){


        Pergunta::updatePergunta($_GET['id_pergunta'],'2',$_POST['nova_pergunta']);

    }else{

        if(isset($_POST['antes_da_aula'])){


            Pergunta::updatePergunta($_GET['id_pergunta'],'0',$_POST['nova_pergunta']);
    
        }
    
        if(isset($_POST['depois_da_aula'])){
    
    
            Pergunta::updatePergunta($_GET['id_pergunta'],'1',$_POST['nova_pergunta']);
    
        }

    }

    
    
    $return = [
        'status'=>true

    ];
    echo(json_encode($return));



    
}



?>