<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../assets/js/modais.js"></script>
</head>
<script>
    var error = true

    function teste123(){ 
        if(error){

            modalStatus('erro ao cadastrar!','error')
        }else{
            modalStatus('Sucesso!','success')
        }
    }

</script>
<body>
    
    <!-- <button onclick="modalStatus('Deu Certo!!!','question', () => modalStatus('Error!','error'))" >Teste</button> -->

    <button onclick="modalStatus('Deseja deletar esse perfil?','question', () => teste123() )">Cadastrar</button>
</body>
</html>