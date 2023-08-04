<?php
    require_once("../includes/menu.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Sala</title>
    <link rel="stylesheet" href="../assets/css/visualizar_sala.css">


    
</head>
<body class="visualizar_sala">
    <div class="pagina-visualizar-sala">
        <section class="area_card">
            <div class="card">
                <div class="imagem_card">

                    <img src="../assets/imgs/others/cozinha_etg.jpg" alt="" id="img_config">
                </div>
                <div class="texto_card">

                    <div class="titulo_card">
                        <h1>COZINHA DIDÁTICA I</h1>
                    </div>
        

                        <div class="paragrafo_card">
                            <h2 id="paragrafo_descricao">
                                Descrição
                            </h2>

                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget ante scelerisque, scelerisque nibh et, placerat risus. Integer suscipit, arcu sit amet finibus commodo, lectus diam suscipit leo, eu tempor turpis sem sit amet nibh</p>
                            
                            <h2 id="paragrafo_horarios">
                                Horários
                            </h2>
                            <p>7:30 - 11:30</p>
                        </div>


                    
                    
                </div>
            </div>

            <div class="alinhar_botoes">

                <!--Botão Voltar-->
                <div class="botao-padrao-voltar">
                    <a href="mural.php"><input type="submit" class="botao-voltar-submit"  value="VOLTAR"></a>
                </div>

                <div class="botao-padrao-fazer-checklist">
                    <a href="#"><input type="submit" class="botao-fazer-checklist-submit"  value="FAZER CHECKLIST"></a>
                </div>

            </div>
        </section>
    </div>
    
</body>
</html>




