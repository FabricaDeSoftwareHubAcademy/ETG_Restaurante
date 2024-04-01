import { Dom } from './Dom.js';
var preenchidas = perguntasJson.length;
const id_salaa = perguntasJson[0]["id_sala"]
console.log(perguntasJson)
// console.log(perguntasJson)
// var AcoesCorretivas = [];
// var preenchidas = []
// for (let i = 0; i < dadosGetStorage.length; i++) {
//     // console.log(dadosGetStorage[i])
//     preenchidas[i] = {"id_pergunta": dadosGetStorage[i]["id_pergunta"],
//     "preenchido": false}
// }

const DOM = new Dom(perguntasJson);

document.querySelector(".botao-cadastrar-submit").addEventListener("click", function(event){
    event.preventDefault();

    var todas_corretas = document.querySelectorAll('.bi-check-circle[id="este_e_da_pergunta"]')
    // !(todas_corretas.length == preenchidas)
    if (false) {
        modalStatus("Responda todas as perguntas", "error") 
    } else {
        modalStatus("Você tem certeza que deseja cadastrar as ações corretivas? ", "question", () => {
            modalStatus("Ações corretivas cadastradas com sucesso! ", "success", () => {
                cadastrar_acao_corretiva()
                // window.location.href = "listar_checklist_concluidas.php"
            })
        })
    }
})

document.querySelector(".botao-voltar-link").addEventListener("click", function(event) {
    event.preventDefault()
    modalStatus("Você tem certeza que deseja sair sem realizar as ações corretivas? ", "question", () => {
        window.location.href = "listar_checklist_concluidas.php"
    })
}) 

async function cadastrar_acao_corretiva() {
    let url = "./actions/action_cadastrar_acao_corretiva.php?id_sala="+id_salaa
    let request = await fetch(url, {
        method: "POST",
        headers:{
                "Content-Type": "application/json"
        },
        body: JSON.stringify(DOM.post_malone_rockstar())
    })

    let response = await request.json()
    console.log(response)
}


DOM.showPerguntas();


