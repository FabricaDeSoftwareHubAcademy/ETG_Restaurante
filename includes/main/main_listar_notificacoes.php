<link rel="stylesheet" href="../assets/css/listar_notificacoes.css">
<link rel="stylesheet" href="../assets/css/estilo_botões_padronizados.css">

<body class="tela_notificacao">  
    <main class="area_not">
        <?=$todas_notificacao?>
    </main>        


    <script> 
        async function trocar_coracao(id){
            console.log(id)
            const coracaoVazio = document.getElementById("coracaoVazio" + id);
            const coracaoPreenchido = document.getElementById("coracaoPreenchido"+id);
            const card_notificacao =document.getElementById("card_notificacao"+id);


            coracaoVazio.classList.add("active");
            coracaoPreenchido.classList.add("active");
            
            // removendo função onclick do card clickado 
            card_notificacao.removeAttribute("onclick");


            const dados = await fetch('./actions/visualizar_notificacao.php?id_notificacao='+id);

            const response =  await dados.json();
            if(response['status']){

                Swal.fire({
                title: 'OHHHHHHHH!',
                text: 'Visualizado com Sucesso!',
                imageUrl: 'https://m.media-amazon.com/images/I/51NPUA7Kk2L._AC_UF894,1000_QL80_.jpg',
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: 'Custom image',
                })

            }else{

                Swal.fire({
                title: 'Erro ao visualizar', //TITULO DO POP_UP DE ACORDO COM SUA TELA 
                icon: 'error', // success, error e warning
                confirmButtonColor: '#ff0000', // DEFINE A COR DO BOTÃO OK
                confirmButtonText: 'OK'
                });

            }
        
        }
    </script>
</body>
