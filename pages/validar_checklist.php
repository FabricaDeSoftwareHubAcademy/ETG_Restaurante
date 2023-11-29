<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../assets/css/validação_checklist.css">

</head>
<body class="pai_de_todos">
    <?php

    include_once("../includes/menu.php");

    ?> 

    <section class="tudo">
        
        <div class="pagina">

            <div class="titulo"> 
                <h1>Validação do Checklist</h1>
            </div>
            
            <section class="gear-second">
                <div class="item">
                    <span class="label">Professor:</span>
                    <span class="value">Cristiane</span>
                </div>
                <div class="item">
                    <span class="label">Ambiente:</span>
                    <span class="value">Cozinha Didática I</span>
                </div>
            </section>

            <section class="gear-third">
                <div class="item">
                    <span class="label">Data:</span>
                    <span class="value">03/03/2023</span>
                </div>

                <div class="item">
                    <span class="label">Aberto:</span>
                    <span class="value">7:30 h</span>
                </div>

                <div class="item">
                    <span class="label">Encerrado:</span>
                    <span class="value">11:50 h</span>
                </div>
                </div>
            
            </section>

            <section class="inputs">
                <div class="area-check">
                    <div class="input">                      
                        <p class = "texto-checklist">
                            Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?
                        </p>
                    </div>
                    <i class="bi bi-check-circle" id="check"></i>
                </div>               
                <div class="area-check">
                    <div class="input">                      
                        <p class = "texto-checklist">
                            Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?
                        </p>
                    </div>
                    <i class="bi bi-x-circle" id="not-check"></i>
                </div>
                <div class="area-check">
                    <div class="input">                      
                        <p class = "texto-checklist">
                            Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?
                        </p>
                    </div>
                    <i class="bi bi-check-circle" id="check"></i>
                </div>
                <div class="area-check">
                    <div class="input">                      
                        <p class = "texto-checklist">
                            Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?
                        </p>
                    </div>
                    <i class="bi bi-check-circle" id="check"></i>
                </div>
                <div class="area-check">
                    <div class="input">                      
                        <p class = "texto-checklist">
                            Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?
                        </p>
                    </div>
                    <i class="bi bi-check-circle" id="check"></i>
                </div>
                <div class="area-check">
                    <div class="input">                      
                        <p class = "texto-checklist">
                            Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?
                        </p>
                    </div>
                    <i class="bi bi-x-circle" id="not-check"></i>
                </div>
                <div class="area-check">
                    <div class="input">                      
                        <p class = "texto-checklist">
                            Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?
                        </p>
                    </div>
                    <i class="bi bi-x-circle" id="not-check"></i>
                </div>
            </section>
            
        </div>

    </section>
    <div class="alinar-botoes">

        <div class="botao-padrao-voltar">
            <a href="listar_salas.php" class="botao-voltar-link">VOLTAR</a>
        </div>

        <div class="botao-padrao-cadastrar">
            <a><input name="btn_submit" type="submit" class="botao-cadastrar-submit"  value="FINALIZAR" ></a>
        </div>

    </div>
    
</body>