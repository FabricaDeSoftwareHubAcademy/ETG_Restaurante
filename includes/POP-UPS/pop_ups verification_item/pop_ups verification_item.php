<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETG</title>
    <link rel="stylesheet" href="pop_ups verification_item.css">
</head>
<body>

    <div class="container-pop-up-item">
        <button type="submit" class="btn-pop-up-item" id="submit-btn-item" onclick="openPopupItem()">Submit</button>
        <div class="popup-item" id="popup-up-item">
            <img src="imgs/Check_ring.png" alt="carregando">
            <p>Item cadastro com sucesso </p>
            <div class="botao-padrao-ok">
                <a href="#"><input type="submit" class="botao-ok-submit" onclick="closePopupItem()" value="OK"></a>
            </div>
        </div>
    </div>


    <script src="pop_ups verification_item.js"></script>
</body>
</html>