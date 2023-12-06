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

<body class="tela_gerenciam_perfis">

<!-- <div class="container-pop-up-notificacao">
        <button type="submit" class="btn-pop-up-notificacao" id="submit-btn-notificacao" onclick="openPopupValidar()">Submit</button>
        <div class="popup-notificacao" id="popup-up-notificacao">
            <div class="div-img">
                <img src="img/erro.png" alt="carregando" id="img_check">
                <p>Perfil excluído com sucesso! </p>
            </div>
            <div class="botao-padrao-ok">
                <a href="#"><input type="submit" class="botao-ok-submit" onclick="closePopupValidar()" value="OK"></a>
            </div>
        </div>
    </div> -->

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
    </body>
<script defer>

    function callPopUp(data)
    {
        deletarPerfil(data['children'][0]['attributes']['dataid']['value']);
        
        // var id_profile = $(".btn_excluir").attr("data-id");
        //  console.log(id_profile);

        // console.log('teste')
        // Swal.fire({
        // title: "Are you sure?",
        // text: "You won't be able to revert this!",
        // icon: "warning",
        // showCancelButton: true,
        // confirmButtonColor: "#3085d6",
        // cancelButtonColor: "#d33",
        // confirmButtonText: "Yes, delete it!"
        
        // }).then((result) => {
        // if (result.isConfirmed) {
        //     Swal.fire({
        //     title: "Deleted!",
        //     text: "Your file has been deleted.",
        //     icon: "success"
        //     });
        // }
        // });
    }
    


</script>
