<?php
    require_once("../includes/menu.php");

    require __DIR__."/../vendor/autoload.php";
    use App\Entity\Sala;

    if(isset($_GET['id_sala'])){
        $id_sala = $_GET['id_sala'];

        $dados = Sala::getDadosById($id_sala);
       
 
    }
    // print_r($dados);
//  echo($dados['funcionamento']);
 $funcionamento = json_decode($dados[0]['funcionamento'],true);
//  print_r($funcionamento);

 $segunda = $funcionamento['segunda'] == 'sim' ? 'Segunda' : '';
 $terca = $funcionamento['terca'] == 'sim' ? 'Terça' : '';
 $quarta = $funcionamento['quarta'] == 'sim' ? 'Quarta' : '';
 $quinta = $funcionamento['quinta'] == 'sim' ? 'Quinta' : '';
 $sexta = $funcionamento['sexta'] == 'sim' ? 'Sexta' : '';
 $sabado = $funcionamento['sabado'] == 'sim' ? 'Sábado' : '';
 $matutino = $funcionamento['turnos']['matutino'] == 'sim' ? 'Matutino' : ' ';
 $vespertino = $funcionamento['turnos']['vespertino'] == 'sim' ? 'Vespertino' : ' ';
 $noturno = $funcionamento['turnos']['noturno'] == 'sim' ? 'Noturno' : ' ';
 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Sala</title>
    <link rel="stylesheet" href="../assets/css/visualizar_sala.css">
    <style>


 
.card{
    border: solid  <?=$dados[0]['cor']?>;
    box-shadow: 0 0 1em <?=$dados[0]['cor']?>;
}

    </style>

    
</head>
<body class="visualizar_sala">
    <div class="pagina-visualizar-sala">
        <section class="area_card">
            <div class="card">
                <div class="imagem_card">
                        
                    <img src="../storage/salas/<?= $dados[0]['imagem']?>" alt="" id="img_config">
                </div>
                <div class="texto_card">

                    <div class="titulo_card">
                        <p class="label-sala">Nome da Sala</p>
                        <h1 class="nome-sala"><?=$dados[0]['nome']?></h1>
                    </div>
        

                        <div class="paragrafo_card">
                            <h2 id="paragrafo_descricao">
                                Descrição
                            </h2>

                            <p class="texto-descricao"> <?=$dados[0]['descricao']?></p>
                            
                            
                        </div>
                        <div class="dias-de-funcionamento">
                            <h2 id="dias-funcionamento">
                                Dias de Funcionamento
                            </h2>

                            <p class="dias_funcionamento"> <?php
                            
                                echo $segunda.'  ';
                                echo $terca.' ';
                                echo $quarta.' ';
                                echo $quinta.' ';
                                echo $sexta.' ';
                                echo $sabado.' ';


                            ?></p>
                            
                            
                        </div>
                        <div class="turnos-de-funcionamento">
                            <h2 id="turnos-funcionamento">
                                Turnos de Funcionamento
                            </h2>

                            <p class="turnos_funcionamento"> <?php
                            
                                echo $matutino.' ';
                                echo $vespertino.' ';
                                echo $noturno.' ';

                            
                            ?></p>
                            
                            
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




