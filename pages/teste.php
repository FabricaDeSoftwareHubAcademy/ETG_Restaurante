<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../assets/js/modais.js"></script>
</head>
<script>

    function teste123(teste){ 
        alert(teste) 
    }
    error = false

</script>
<body>
    
    <!-- <button onclick="modalStatus('Deu Certo!!!','question', () => modalStatus('Error!','error'))" >Teste</button> -->

    <button onclick="modalStatus('Deseja deletar esse perfil?','question',  modalStatus('Erro ao deletar Perfil!','error')  )">Cadastrar</button>
</body>
</html>