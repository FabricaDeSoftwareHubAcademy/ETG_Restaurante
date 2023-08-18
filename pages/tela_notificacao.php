<?php


require __DIR__."/../vendor/autoload.php";
use App\Entity\Notificacao;

require_once("../includes/menu.php"); 

$notificacao = new Notificacao ;

$dados = $notificacao -> getNotificacao();

 


date_default_timezone_set('America/Sao_paulo');

// $dataBanco = Notificacao::getNotificacao()[0]['data_hora'];
 

// $primeiraData = new DateTime($dataBanco);

// $segundaData = new DateTime(date('Y-m-d H:i:s'));
 

// $diferenca = $segundaData->getTimestamp() - $primeiraData->getTimestamp();




$todas_notificacao = '';

foreach ($dados as $contador){

    $dataBanco = $contador['data_hora'];
     

    $primeiraData = new DateTime($dataBanco);

    $segundaData = new DateTime(date('Y-m-d H:i:s'));
    $unidadeTempo = "";

    $diferenca = $segundaData->getTimestamp() - $primeiraData->getTimestamp();

    $minutes = round($diferenca/60);
    $hours = round($diferenca/60/60);
    $days = round($diferenca/60/60/24);

    
    if($diferenca < 60){

        $tempoAtras = $diferenca." Segundos";

    }
    else if(($diferenca/60) > 59 and $diferenca/60/60 < 24){

        // $diferenca = ($diferenca /60)/60;
        // $unidadeTempo = ' Horas ';

        $tempoAtras = $hours." Horas";
    }
    else if(($diferenca/60) < 60 and $diferenca/60/60 < 59){

        // $diferenca = $diferenca /60;
        // $unidadeTempo = " Minutos ";

        $tempoAtras = $minutes." Minutos";

    }
    else if($diferenca/60/60 > 59){

        $tempoAtras = $days." Dias";

    }

    $diferenca = round($diferenca);
    
    



    if($contador['visualizado'] == 1){

        $todas_notificacao .='                              <div class="notificacao_individual">

                                                            <p class="texto_notificacao">

                                                                '.$contador['descricao'].'

                                                            </p>

                                                            <div class="area_temp_coracao">

                                                                <div class="tempo">'.$tempoAtras.'</div>


                                                                 

                                                                <div class="coracaov2 active" id="coracaoPreenchido'.$contador['id_notificacao'].'"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                                </svg> </div>

                                                            </div>                             
                                                        </div>
                                                        ';

    }else{

        $todas_notificacao .='                              <div class="notificacao_individual" onclick="trocar_coracao('.$contador['id_notificacao'].')">
    
                                                                <p class="texto_notificacao">
    
                                                                    '.$contador['descricao'].'
    
                                                                </p>
    
                                                                <div class="area_temp_coracao">
                        
                                                                    <div class="tempo"> '.$tempoAtras.' </div>
    
    
                                                                    <div class="coracao" id="coracaoVazio'.$contador['id_notificacao'].'"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                                                    </svg></div>
    
                                                                    <div class="coracaov2" id="coracaoPreenchido'.$contador['id_notificacao'].'"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                                    </svg> </div>
    
                                                                </div>                             
                                                            </div>
                                                            ';


    }




} 








?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de notificação </title>
    <link rel="stylesheet" href="../assets/css/tela_notificacao.css">
    <link rel="stylesheet" href="../assets/css/estilo_botões_padronizados.css">


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>

    
<body class="tela_notificacao">  


 
    <main class="area_not">

        <!-- <h1 class="titulo_tela_notificacao">Notificações</h1>

        <div class="notificacao_individual" onclick="trocar_coracao()">

            <p class="texto_notificacao" >

                aqui ficara todo o texto da notificação etc tec te ah gbdh gbsjkd fgbbgsdb gsjkdbf sd bfghkid bfgdsn fjkndsjk fbsdk fbsjkd fjksdb fjksbdjk fbsdhf sd fjksdb fsdjk fjk

            </p>

            <div class="area_temp_coracao">

                <div class="tempo">5 Min</div>


                <div class="coracao"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                </svg></div>

                <div class="coracaov2"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                </svg> </div>

            </div> -->

            <?=$todas_notificacao?>

        </div>





        
        <div class="botoes">

            <div class="botao-padrao-voltar">
                <a href="#"><input type="submit" class="botao-voltar-submit"  value="VOLTAR"></a>
            </div>


        </div>
    </main>        

    <script> 



        async function trocar_coracao(id){
            console.log(id)
            const coracaoVazio = document.getElementById("coracaoVazio"+id);

            const coracaoPreenchido = document.getElementById("coracaoPreenchido"+id);

            coracaoVazio.classList.add("active");

            coracaoPreenchido.classList.add("active");

            const dados = await fetch('./actions/visualizar_notificacao.php?id_notificacao='+id);

            const response =  await dados.json();
            if(response['status']){

                Swal.fire({
                title: 'OHHHHHHHH!',
                text: 'Visualizado com Sucesso!',
                imageUrl: 'https://m.media-amazon.com/images/I/51NPUA7Kk2L._AC_UF894,1000_QL80_.jpg',
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: 'Custom image',
                })

            }else{

                Swal.fire({
                title: 'Erro ao visualizar', //TITULO DO POP_UP DE ACORDO COM SUA TELA 
                icon: 'error', // success, error e warning
                confirmButtonColor: '#ff0000', // DEFINE A COR DO BOTÃO OK
                confirmButtonText: 'OK'
                });

            }
            



        }



        
        

    </script>



</body>
</html>