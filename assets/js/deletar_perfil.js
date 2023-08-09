async function deletarPerfil(){
    var overlay_conf = document.getElementById("overlay_conf");
    var popup = document.querySelector(".popup");
  
    overlay_conf.style.opacity = 0;
    overlay_conf.style.visibility = "hidden";
    
    const dados = await fetch('./actions/perfil_delete_action.php?id_cadastro_perfil='+ id_atual);

  
    const response = await dados.json();
    if(response['status']){
        openPopupexcluir();

        // setTimeout(function(){
        //     location.reload()
        // },2000);
    
    }else{
        console.log("Algo inesperado aconteceu")
    }
    console.log(response)
  }