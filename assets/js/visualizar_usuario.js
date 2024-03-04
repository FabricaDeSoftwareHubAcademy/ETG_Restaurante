    
var id_atual 
$(document).ready(function(){

    // $('[id="btn_trash_excluir"]').on('click',async function(){

    //     let formData = new FormData()
    //     formData.append('id_usuario',$(this).attr('btn_excluir'))

    //     let dados_php = await fetch('../pages/actions/usuario_delete_action.php',{ 
    //         method:"POST",
    //         body:formData 
    //     })
    //     let response = await dados_php.json()

    //     $(".close-btn").on('click',function(){

    //         window.location.reload()

    //     })
         

    // }) 
    listar_users()
})



async function listar_users(){

    $('.cardsgerenc').empty()
 
    let data_php = await fetch('../pages/actions/action_get_users.php')
    let dados_users = await data_php.json()
     
    for(let i = 0; i < dados_users.length; i++){
         
        let li_each = $("<li></li>")
        li_each.html('<div class="titulo_gp"> <div class="card_perfil"> <div class="card_nome"> <h2 class="tipo_perfil">'+dados_users[i]["nome"]+'</h2> </div> <div class="icons-question1"><a href="./editar_usuario.php?id_user='+dados_users[i]["id"]+'"><i class="bi bi-pencil-square"></i></a> <i class="bi bi-trash" id="btn_excluir_user" id_user="'+ dados_users[i]["id"] + '" href="actions/perfil_delete_action.php?id='+dados_users[i]["id"]+'"></i> </div></div> </div>')
        $(".cardsgerenc").append(li_each)
    }

    $("[id='btn_excluir_user']").on('click',function() {

        const idUserValue = $(this).attr("id_user");
        console.log(idUserValue);
        id_atual = idUserValue
        openModal2()

    } );
    
  
}
$('[id="close-btn-exclur"').on('click', function(e){

    closeModalExcluir()

})
$('[id="close-btn"').on('click', function(e){

    closeModalExcluir()

})

$(".open-btn-excluir").on("click",function(e){

    excluirUser(id_atual)

})


var excluirUser = async (id_user) => {

    console.log(id_user)
    let data = await fetch('../pages/actions/action_user_delete.php?id_user='+id_user)
    let dados_php = await data.json()

    console.log(dados_php)
    if(dados_php){

        listar_users()
        changeIconAndMessage()
    }

}