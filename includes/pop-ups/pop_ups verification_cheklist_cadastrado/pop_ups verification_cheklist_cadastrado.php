<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETG</title>
    <link rel="stylesheet" href="pop_ups verification_cheklist_cadastrado.css">
</head>
<body>

    <div class="container-pop-up-cheklist_cadastrado">
        <button type="submit" class="btn-pop-up-cheklist_cadastrado" id="submit-btn-cheklist_cadastrado" onclick="openPopupCheklist_cadastrado()">Submit</button>
        <div class="popup-cheklist_cadastrado" id="popup-up-cheklist_cadastrado">
            <img src="imgs/Check_ring.png" alt="carregando">
            <p>Cheklist cadastrado com sucesso</p>
            <div class="botao-padrao-ok">
                <a href="#"><input type="submit" class="botao-ok-submit" onclick="closePopupCheklist_cadastrado()" value="OK"></a>
            </div>
        </div>
    </div>


    <script src="pop_ups verification_cheklist_cadastrado.js"></script>
</body>
</html>