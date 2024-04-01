import { Dom } from './Dom.js';
// console.log(perguntasJson)
var url = new URLSearchParams(window.location.search)
const id_realizacao = url.get("id_realizacao")
var preenchidas = perguntasJson.length;
for (let i = 0; i < perguntasJson.length; i++) {
    if (perguntasJson[i]["tipo"] == 2) {
        preenchidas++
    }
}
// console.log(preenchidas)
const DOM = new Dom();

DOM.showPerguntas();


var buttonSubmit = document.querySelector("#botao-cadastrar-submit");
buttonSubmit.addEventListener("click", async function(event) {
    event.preventDefault();
    //pegando o id_realizacao do get
    var todas_n_conf = document.querySelectorAll('.bi-x-circle[id="este_e_da_pergunta"]')
    var todas_corretas = document.querySelectorAll('.bi-check-circle[id="este_e_da_pergunta"]')
    var total = (todas_n_conf.length + todas_corretas.length)
    // console.log(total)
    // console.log(todas_n_conf);
    // console.log(todas_corretas);
    if (!(total >= preenchidas)) {
        modalStatus("Responda todas as perguntas", "error")
    }
    else {
        modalStatus("Deseja enviar o email para coordenação? ", "question", () => {
            // so_nao_conformidade(true)
            so_nao_conformidade(false)
            
            modalStatus("Deseja realizar as ações corretivas agora? ", "question", () => {
                window.location.href = "acao_corretiva.php?id_realizacao="+id_realizacao
            })
        })
    }
})

async function so_nao_conformidade(email = false) {
    var id_docente = perguntasJson[0]["id_user_realiza"]
    var id_sala = perguntasJson[0]["id_sala"]

    try {
        let url = ""
        if (email) {
            url = './actions/action_cadastrar_nao_conformidade_logistica.php?id_realizacao='+id_realizacao+'&id_docente='+id_docente+'&id_sala='+id_sala+'&email=true'
        } else {
            url = './actions/action_cadastrar_nao_conformidade_logistica.php?id_realizacao='+id_realizacao+'&id_docente='+id_docente+'&id_sala='+id_sala+'&email=false'
        }

        let request = await fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(DOM.get_dataNaoConf())
        })
        let response = await request.json()
        console.log(response)
    } catch (error) {
        modalStatus(error, "error", () => {window.location.href = "listar_checklist_concluidas.php"})
    }

}
