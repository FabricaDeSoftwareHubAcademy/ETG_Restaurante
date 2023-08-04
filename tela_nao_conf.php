<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de não conformidade</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="estilo_tela_nao_conf.css">
</head>
<body>
    <header class="header">
        
    </header>
    <div onclick="acao()" class="btn"> Ajuda nois ae po</div>
    <main class="mom">
        <div class="meio">
            <div class="pergunta">
                <div class="pergunta_nao_conf">
                    Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?
                </div>
                <div class="xis" onclick="check(false)">
                    <i class="bi bi-x-circle" id="voa" height: 100px></i> 
                </div>
            </div>
            <div class="descricao">
                    <textarea name="descricao_nao_conf" class="descricao_nao_conf" placeholder="Descrição da não conformidade" cols="30" rows="10" autocomplete="off"></textarea>
                    <div class="container">
                        <input type="file" id="file-input" accept="image/png, image/jpeg" onchange="preview()" multiple>
                        <label for="file-input">
                            <i class="fas fa-upload"></i> &nbsp; Escolha uma foto
                        </label>
                    </div>
                </div>
            <div class="botoes">
                <form action="" method="post">
                    <a href="tela_nao_conf.html"><input type="submit" class="botao-cancelar-submit" value="CANCELAR"></a>
                    <a><input type="submit" class="botao-confirmar-submit"  value="CONFIRMAR"></a>
                </form>
            </div>
            <div class="pra_onde_vai">
                <p id="num-of-files"></p>
                    <div class="card-item">
                        <div id="images" div>
                    </div>
            </div>
        </div>
    </main>
    <script src="preview.js"></script>

</body>
</html>