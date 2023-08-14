 

const modalExcluirRecado = document.querySelector('.area_modal_excluir_recado');
const btn_confirmar = document.querySelector('.botao-confirmar-submit');
const textareaEditar = document.getElementById("text-descricao-pop-up");
 
var id_atual = '';
 
bnt_excluir = document.querySelectorAll(".icon_card_recado_excluir");
bnt_editar = document.querySelectorAll(".icon_card_recado_editar");
overlay_excluir = document.querySelector(".overlay_modal_excluir_recado");

const btn_salvar_editar = document.querySelector('.botao-salvar-submit');
const btn_salvar_excluir = document.querySelector('.botao-excluir-submit');


btn_salvar_excluir.addEventListener('click',deletarRecado);

btn_salvar_editar.addEventListener('click',confirmarEditar);

 
bnt_excluir.forEach(btn => {
    btn.addEventListener('click',openModalExcluir)
});
 
bnt_editar.forEach(btnE => {
    btnE.addEventListener('click',openModalEditar)
  
});

async function openModalEditar(){

    openPopup()
    
    var id_recado = this.getAttribute('id_recado');
    id_atual = id_recado
    

    dados = {
        id_recado: id_recado
    }
    
    response =  await fetch('actions/mural_get_descricao.php',{
        method: 'POST',
        
        headers: {
            'Content-Type': 'application/json'
        },

        body:  JSON.stringify(dados)

    });


    const conteudo = await response.json();

    // console.log(conteudo);

    textareaEditar.value = conteudo['descricao']

    btn_salvar_excluir.setAttribute('id_recado',conteudo['id_recado'])
    btn_salvar_editar.setAttribute('id_recado',conteudo['id_recado'])

}

// function salvar alterações 
async function confirmarEditar(){

    var id_recado = btn_salvar_editar.getAttribute('id_recado');
    var descricao = textareaEditar.value;
     dados = {

        id_recado : id_recado,
        novaDescricao: descricao
    }

    request = await fetch('actions/mural_update_descricao.php',{

        method: "POST",
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(dados)

    });

    response = await request.json();
    if(response['status']){

        location.reload();

    }else{
        // mensagem de erro 
    }

}


function openModalExcluir(){

    var id_recado = this.getAttribute('id_recado');
    id_atual = id_recado;
    
     
    btn_confirmar.setAttribute('id_recado',id_recado);
    
    modalExcluirRecado.classList.add('active');
    overlay_excluir.classList.add('active');

    bnt_excluir.forEach(btn=>{
        btn.removeEventListener('click', openModalExcluir)
    })  

}
function retornaAlgo(){
    console.log('algo')
}

function closeModalExcluir(){

    bnt_excluir.forEach(btn => {
        btn.addEventListener('click',openModalExcluir)
    });
    modalExcluirRecado.classList.remove('active');
    overlay_excluir.classList.remove('active');
    

}

async function deletarRecado(){
    
 
    let id_recado_delete = id_atual;
   
    const dados = await fetch('./actions/recado_delete_action.php?id_recado='+id_recado_delete);
 
    const response = await dados.json();
    if(response['status']){

        location.reload()

    }else{
        console.log("Algo inesperado aconteceu")
    }
     
  
     
 
}