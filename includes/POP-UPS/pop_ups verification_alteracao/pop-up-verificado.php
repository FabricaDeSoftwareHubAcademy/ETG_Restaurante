<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETG</title>
    <link rel="stylesheet" href="pop-up-alteracao.css">
</head>
<body>

    <div class="container-pop-up-alteracao">
        <button type="submit" class="btn-pop-up-alteracao" id="submit-btn-alteracao" onclick="openPopupAlterar()">Submit</button>
        <div class="popup-alteracao" id="popup-up-alteracao">
            <img src="imgs/Check_ring.png" alt="carregando">
            <p>Alterações salvas com sucesso </p>
            <div class="botao-padrao-ok">
                <a href="#"><input type="submit" class="botao-ok-submit" onclick="closePopupAlterar()" value="OK"></a>
            </div>
        </div>
    </div>


    <script src="script-pop-up-alteracao.js"></script>
</body>
</html>