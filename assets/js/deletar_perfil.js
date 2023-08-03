async function deletarPerfil(){

    let id_perfil_delete = id_perfil;
   
    const dados = await fetch('./actions/perfil_delete_action.php?id_recado='+ id_perfil_delete);
 
    const response = await dados.json();
    if(response['status']){

        location.reload()

    }else{
        console.log("Algo inesperado aconteceu")
    }
  }