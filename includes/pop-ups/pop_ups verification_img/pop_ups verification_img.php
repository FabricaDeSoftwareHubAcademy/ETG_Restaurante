<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETG</title>
    <link rel="stylesheet" href="pop_ups verification_img.css">
</head>
<body>

    <div class="container-pop-up-img">
        <button type="submit" class="btn-pop-up-img" id="submit-btn-img" onclick="openPopupimg()">Submit</button>
        <div class="popup-img" id="popup-up-img">
            <img src="imgs/Check_ring.png" alt="carregando">
            <p>Imagem salva com sucesso</p>
            <div class="botao-padrao-ok">
                <a href="#"><input type="submit" class="botao-ok-submit" onclick="closePopupimg()" value="OK"></a>
            </div>
        </div>
    </div>


    <script src="pop_ups verification_img.js"></script>
</body>
</html>