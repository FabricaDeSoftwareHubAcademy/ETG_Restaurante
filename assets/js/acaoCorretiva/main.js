import { Dom } from './Dom.js';

 
// Obtenha o array armazenado no sessionStorage
var dadosGetStorage = JSON.parse(sessionStorage.getItem('NaoConformidades'));
var AcoesCorretivas = [];
const DOM = new Dom(dadosGetStorage, AcoesCorretivas);
// console.log(dadosGetStorage);


document.querySelector("#btn-cadastrar-acao-corretiva").addEventListener("click", function(event){
    event.preventDefault();

    var dadosAjax = []

    dadosAjax.push(AcoesCorretivas);
    ajaxHTTP(dadosAjax);
})




async function ajaxHTTP(dados) {
    var request = await fetch("actions/action_cadastrar_acao_corretiva.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(dados)
    });
    var response = await request.json();
    console.log(response)

    if (response["status"] == true) {
        //MODAL
        window.location.href = "./listar_checklist_concluidas.php";
    }
}

DOM.showPerguntas();


