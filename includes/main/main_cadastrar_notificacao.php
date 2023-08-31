
<link rel="stylesheet" href="../assets/css/estilo_enviar_notificacao.css">


<body class="pai_de_todos">

<div class="tudo">   
 
    <div class="pagina"> 
        <section class="Enviar-notificacao">
            <h1>Enviar Notificação</h1>
        </section>
        
        <!--Input-->

        <section class="centralizar-inputs-tela-enviar-notificacao">

            <div class="input_group field">
                <input type="input" class="input_field" placeholder="Name" required="">
                <label for="name" class="input_label">Para:</label> <!--Alterar para o nome do input-->
            </div>

            <!--Textarea-->
            <div class="textarea">
                <label class="titulo-notificacao" for="story">Notificação:</label>
                <textarea class="quadrado_text" name="story" rows="5" cols="33"></textarea>
            </div>

        </section>

        <!--Botões-->

        <section class="centralizar_botoes_enviar_notificacao">
                
                <!--Botão Voltar-->
            <div class="botao-padrao-voltar">
                <a href="#"><input type="submit" class="botao-voltar-submit"  value="VOLTAR"></a>
            </div>

                <!--Botão Confirmar-->
            <div class="botao-padrao-confirmar">
                <a href="#"><input type="submit" class="botao-confirmar-submit"  value="CONFIRMAR"></a>
            </div>

        </section>

    </div>
</div>
  
</body>
</html>