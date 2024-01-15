    
$(document).ready(function(){

    $('[id="btn_trash_excluir"]').on('click',async function(){

        let formData = new FormData()
        formData.append('id_usuario',$(this).attr('btn_excluir'))

        let dados_php = await fetch('../pages/actions/usuario_delete_action.php',{ 
            method:"POST",
            body:formData 
        })
        let response = await dados_php.json()

        $(".close-btn").on('click',function(){

            window.location.reload()

        })
        if(response.status){

            openModalTeste()

        }else{

            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.onmouseenter = Swal.stopTimer;
                  toast.onmouseleave = Swal.resumeTimer;
                }
              });
              Toast.fire({
                icon: "error",
                title: "Erro: Há funções atreladas ao usuário"
              }); 

        }

    })



})