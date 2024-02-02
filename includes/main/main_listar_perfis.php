<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
<script src="../assets/js/deletar_perfil.js"></script>
<link rel="stylesheet" href="../assets/css/listar_perfis.css">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">


<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
  
  <?php 
    include_once('../includes/modal_excluir/perfil_bloqueado.php');
    ?>
<body class="tela_gerenciam_perfis">
    <main class="pai-de-todos">
        <form action="" method="GET">
            <div class="container_gp">
                <h1 class="Perfis">Perfis</h1>
                <ul class="cardsgerenc">
                    <?=$imprimir?>
                </ul>
                
            </div>
            <div class="container_gp2">
                
                <div class="alinar-botoes">
                    
                    <div class="botao-padrao-voltar">
                        <a href="listar_salas.php" class="botao-voltar-submit">VOLTAR</a>
                    </div>
                    
                    <div class="botao-padrao-cadastrar">
                        <a href="cadastrar_perfil.php" class="botao-cadastrar-link">CADASTRAR</a>
                    </div>

                </div>  
                        
            </div> 
        </form>
    </main>
    <script src="../includes/modal_excluir/perfil_bloqueado.js"></script>
</body>

<script>


    async function deletarPerfil(id)
    {
        let dados = await fetch('./actions/perfil_delete_action.php?id_perfil='+id);
        let response = await dados.json();
        window.location.reload();
        
    }

    function callPopUp(data)
    {
        var idtemp = data['children'][0]['attributes']['dataid']['value']
        var lock = data['children'][0]['attributes']['lock']['value']
        if (lock == 'true')
        {
             openModal2()
        
        }
        else
        {
            Swal.fire({
            title: "Deseja excluir esse perfil?",
            text: "Essa ação não poderá ser desfeita!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sim!"
            }).then((result) => {
            if (result.isConfirmed)
            {
                deletarPerfil(idtemp);
                Swal.fire({
                title: "Excluído!",
                text: "O perfil foi excluído com sucesso!",
                icon: "success"
                });
            }
            });
        }

       
    }
    


</script>
