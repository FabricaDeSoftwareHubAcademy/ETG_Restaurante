<?php
include_once("../includes/menu.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de notificação </title>
    <link rel="stylesheet" href="../assets/css/tela_notificacao.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="tela_notificacao">  



    <main class="area_not">

        <h1 class="titulo_tela_notificacao">Notificações</h1>

        <div class="notificacao_individual" onclick="trocar_coracao()">

            <p class="texto_notificacao">

                aqui ficara todo o texto da notificação etc tec te asdmskdgbsjnfgjkbfdh gbdh gbsjkd fgbbgsdb gsjkdbf sd bfghkid bfgdsn fjkndsjk fbsdk fbsjkd fjksdb fjksbdjk fbsdhf sd fjksdb fsdjk fjk

            </p>

            <div class="area_temp_coracao">

                <div class="tempo">5 Min</div>


                <div class="coracao"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                </svg></div>

                <div class="coracaov2"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                </svg> </div>

            </div>



        </div>


    </main>        

    <script>
        function trocar_coracao(){

            const coracao = document.querySelector(".coracao")

            const coracaov2 = document.querySelector(".coracaov2")

            coracao.classList.add("active");

            coracaov2.classList.add("active");


        }

        
        

    </script>


</body>
</html>