<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETG</title>
    <link rel="stylesheet" href="pop-up-notificacao.css">
</head>
<body>

    <div class="container-pop-up-notificacao">
        <button type="submit" class="btn-pop-up-notificacao" id="submit-btn-notificacao" onclick="openPopupValidar()">Submit</button>
        <div class="popup-notificacao" id="popup-up-notificacao">
            <img src="imgs/Check_ring.png" alt="carregando">
            <p>Notificação enviada com sucesso </p>
            <div class="botao-padrao-ok">
                <a href="#"><input type="submit" class="botao-ok-submit" onclick="closePopupValidar()" value="OK"></a>
            </div>
        </div>
    </div>


    <script src="script-pop-up-notificacao.js"></script>
</body>
</html>