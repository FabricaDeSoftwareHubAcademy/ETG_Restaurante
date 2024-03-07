import { Dom } from './Dom.js';

 
// Obtenha o array armazenado no sessionStorage
var dadosGetStorage = JSON.parse(sessionStorage.getItem('NaoConformidades'));
var id_realizacao = JSON.parse(sessionStorage.getItem('id_realizacao'));
var id_sala = JSON.parse(sessionStorage.getItem('id_sala'));
var AcoesCorretivas = [];
// console.log(id_realizacao);

// console.log(dadosGetStorage)
var preenchidas = []
for (let i = 0; i < dadosGetStorage.length; i++) {
    // console.log(dadosGetStorage[i])
    preenchidas[i] = {"id_pergunta": dadosGetStorage[i]["id_pergunta"],
    "preenchido": false}
}
console.log(preenchidas)




const DOM = new Dom(dadosGetStorage, AcoesCorretivas, preenchidas);


document.querySelector("#btn-cadastrar-acao-corretiva").addEventListener("click", function(event){
    event.preventDefault();
    console.log(preenchidas);

    
    let aprovado = true;
    for (let i = 0; i < preenchidas.length; i++) {
        if (preenchidas[i]["preenchido"] == false) {
            aprovado = false;
            break;
        }
    }
    
    if (aprovado) {
        var dadosAjax = []
        // AcoesCorretivas
        // console.log("foii")
        console.log(dadosAjax);
        dadosAjax.push(AcoesCorretivas);
        ajaxHTTP(dadosAjax);
    } else {
        modalStatus("Preencha todos os campos", "error")
    }
    
})

async function ajaxHTTP(dados) {
    var request = await fetch("actions/action_cadastrar_acao_corretiva.php?id_realizacao="+id_realizacao+"&id_sala="+id_sala, {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(dados)
    });
    var response = await request.json();
    console.log(response)

    if (response == true || response == "true") {
        //MODAL
        modalStatus("Sucesso", "success", () => {window.location.href = "./listar_checklist_concluidas.php";});
        
    }
}

DOM.showPerguntas();


