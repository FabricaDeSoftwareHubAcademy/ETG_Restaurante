<link rel="stylesheet" href="../assets/css/listar_notificacoes.css">
<link rel="stylesheet" href="../assets/css/estilo_botões_padronizados.css">
<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

<body class="tela_notificacao"> 
    <div class="titulo_tela_notificacao">
        <h1>Notificações</h1>  
    </div>
    <section class="container">
        
        <main class="area_not">
            <?=$todas_notificacao?>
        </main>        
    </section>
    <div class="alinhar_botao_voltar">
        <div class="botao-padrao-voltar">
            <a href="listar_salas.php" class="botao-voltar-link">VOLTAR</a>
        </div>
    </div>
    <script> 
        async function desmarcar (id){
            // alert(id)

            const dados = await fetch('./actions/desmarcar_notificacao.php?id_notificacao='+id);
            
            const response =  await dados.json();
            if (response.status==true){
                // location.reload()

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                    })

                    Toast.fire({
                    icon: 'success',
                    title: 'DESMARCADO'
                    })

                    const coracaoVazio = document.getElementById("coracaoVazio" + id);
                    const coracaoPreenchido = document.getElementById("coracaoPreenchido"+id);
                    const card_notificacao =document.getElementById("card_notificacao"+id);    
                    coracaoVazio.classList.remove("active");
                    coracaoPreenchido.classList.remove("active");

                    card_notificacao.setAttribute("onclick",'trocar_coracao('+id+')' );

            }
            else{
                Swal.fire({
                title: 'Erro ao desmarcar', //TITULO DO POP_UP DE ACORDO COM SUA TELA 
                icon: 'error', // success, error e warning
                confirmButtonColor: '#ff0000', // DEFINE A COR DO BOTÃO OK
                confirmButtonText: 'OK'
                });
            }    
        }


        async function trocar_coracao(id){
            console.log(id)
            const coracaoVazio = document.getElementById("coracaoVazio" + id);
            const coracaoPreenchido = document.getElementById("coracaoPreenchido"+id);
            const card_notificacao =document.getElementById("card_notificacao"+id);


            coracaoVazio.classList.add("active");
            coracaoPreenchido.classList.add("active");
            
            // removendo função onclick do card clickado 
            card_notificacao.removeAttribute("onclick");

            card_notificacao.setAttribute("onclick",'desmarcar('+id+')' );


            const dados = await fetch('./actions/visualizar_notificacao.php?id_notificacao='+id);

            const response =  await dados.json();
            if(response['status']){

                // Swal.fire({
                //     title: 'OHHHHHHHH!',
                //     text: 'Visualizado com Sucesso!',
                //     imageUrl: 'https://m.media-amazon.com/images/I/51NPUA7Kk2L._AC_UF894,1000_QL80_.jpg',
                //     imageWidth: 400,
                //     imageHeight: 200,
                //     imageAlt: 'Custom image',
                // })
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                    })

                    Toast.fire({
                    icon: 'success',
                    title: 'VISUALIZADO'
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
