async function deletarPerfil(id)
{

    // var id_profile = $(".btn_excluir").attr("data-id");
    // console.log(id);

    // var id_profile = document.getElementById('')
    // var overlay_conf = document.getElementById("overlay_conf");
    // var popup = document.querySelector(".popup");
  
    // overlay_conf.style.opacity = 0;
    // overlay_conf.style.visibility = "hidden";
    
    id = await fetch('./actions/perfil_delete_action.php?id_perfil='+id);
    
    // JSON.stringify(id);
    // let data_php = await fetch( {
    //     method: 'GET',
    //     body: id 
    // });
  
    // const response = await id.json();
    // console.log(response)
    

}
