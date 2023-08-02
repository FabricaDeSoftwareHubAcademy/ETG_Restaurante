<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETG</title>
    <link rel="stylesheet" href="pop-up-perfil.css">
</head>
<body>

    <div class="container-pop-up-perfil">
        <button type="submit" class="btn-pop-up-perfil" id="submit-btn-perfil" onclick="openPopupPerfil()">Submit</button>
        <div class="popup-perfil" id="popup-up-perfil">
            <img src="imgs/Check_ring.png" alt="carregando">
            <p>Perfil criado com sucesso </p>
            <div class="botao-padrao-ok">
                <a href="#"><input type="submit" class="botao-ok-submit" onclick="closePopupPerfil()" value="OK"></a>
            </div>
        </div>
    </div>


    <script src="pop-up-perfil.js"></script>
</body>
</html>