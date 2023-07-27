<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETG</title>
    <link rel="stylesheet" href="pop_ups verification_cheklist_feito.css">
</head>
<body>

    <div class="container-pop-up-cheklist">
        <button type="submit" class="btn-pop-up-cheklist" id="submit-btn-cheklist" onclick="openPopupCheklist()">Submit</button>
        <div class="popup-cheklist" id="popup-up-cheklist">
            <img src="imgs/Check_ring.png" alt="carregando">
            <p>Cheklist feito com sucesso</p>
            <div class="botao-padrao-ok">
                <a href="#"><input type="submit" class="botao-ok-submit" onclick="closePopupCheklist()" value="OK"></a>
            </div>
        </div>
    </div>


    <script src="pop_ups verification_cheklist_feito.js"></script>
</body>
</html>