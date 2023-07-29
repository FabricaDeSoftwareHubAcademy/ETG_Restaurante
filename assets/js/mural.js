const modalExcluirRecado = document.querySelector('.area_modal_excluir_recado');
const btn_confirmar = document.querySelector('.botao-confirmar-submit');


var id_atual = '';
console.log('teadioawdj')
bnt_excluir = document.querySelectorAll(".icon_card_recado_excluir");

bnt_excluir.forEach(btn => {
    btn.addEventListener('click',openModalExcluir)
});


function openModalExcluir(){

    var id_recado = this.getAttribute('id_recado');
    console.log(id_recado);
     
    
    btn_confirmar.setAttribute('id_recado',id_recado);
    var id_atual = id_recado;

    
    modalExcluirRecado.classList.add('active');

    bnt_excluir.forEach(btn=>{
        btn.removeEventListener('click', openModalExcluir)
    })  

}
function retornaAlgo(algo){
    console.log(algo)
}

function closeModalExcluir(){

    bnt_excluir.forEach(btn => {
        btn.addEventListener('click',openModalExcluir)
    });
    modalExcluirRecado.classList.remove('active');

}


setInterval(function(){

    console.log(id_atual);

},300);


function deletarRecado(){

    let id_recado_delete = btn_confirmar.getAttribute('id_recado');
    alert(id_recado_delete);

}