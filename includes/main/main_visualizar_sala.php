
<style>
        
        .card{
    border: solid  <?=$dados[0]['cor_itens']?>;
    box-shadow: 0 0 1em <?=$dados[0]['cor_itens']?>;
}

</style>

<link rel="stylesheet" href="../assets/css/visualizar_sala.css">

<body class="visualizar_sala">
    <div class="pagina-visualizar-sala">
        <section class="area_card">
            <div class="card">
                <div class="imagem_card">
                        
                    <img src="../storage/salas/<?= $dados[0]['img_sala']?>" alt="" id="img_config">
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
                    <a href="#"><input type="submit" class="botao-voltar-submit"  value="VOLTAR"></a>
                </div>
                <!--Botão Checklist -->
                <div class="botao-padrao-fazer-checklist">
                    <a href="#"><input type="submit" class="botao-fazer-checklist-submit"  value="FAZER CHECKLIST"></a>
                </div>

            </div>
        </section>
    </div>
    
</body>


