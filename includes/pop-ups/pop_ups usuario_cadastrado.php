<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETG</title>
    <link rel="stylesheet" href="../../assets/css/pop_ups/pop_ups-usuario_cadastrado.css">
</head>
<body>

<div class="container-pop-up-user">
        <button type="submit" class="btn-pop-up-user" id="submit-btn-user" onclick="openPopupUserCadastrado()">Submit</button>
        <div class="popup-user" id="popup-up-user">
            <div class="div-img">
                <img src="img/erro.png" alt="carregando" id="img_check">
                <p>Usuario cadastrado com sucesso!</p>
            </div>
            <div class="botao-padrao-ok">
                <a href="#"><input type="submit" class="botao-ok-submit" onclick="closePopupUserCadastrado()" value="OK"></a>
            </div>
        </div>
    </div>


    <script src="pop_ups usuario_cadastrado.js"></script>
<!-- </body>
</html> -->