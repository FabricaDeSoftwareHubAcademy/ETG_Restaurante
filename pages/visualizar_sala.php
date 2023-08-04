<?php
    require_once("../includes/menu.php");

    require __DIR__."/../vendor/autoload.php";
    use App\Entity\Sala;

    if(isset($_GET['id_sala'])){
        $id_sala = $_GET['id_sala'];

        $dados = Sala::getById($id_sala);
        

    }
    

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
                        <h1><?=$dados[0]['nome']?></h1>
                    </div>
        

                        <div class="paragrafo_card">
                            <h2 id="paragrafo_descricao">
                                Descrição
                            </h2>

                            <p> <?=$dados[0]['descricao']?></p>
                            
                            
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




