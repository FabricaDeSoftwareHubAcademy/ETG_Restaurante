import { Dom } from './Dom.js';

// console.log(perguntasJson)
var preenchidas = [];
for (let i = 0; i < perguntasJson.length; i++) {
    if (perguntasJson[i]["NaoConformidade"]) {
        continue;
    }
    let id_pergunta =  perguntasJson[i]["id_pergunta"]
    preenchidas[i] = {"id_pergunta": id_pergunta,
    "preenchido": false}
}
// console.log(preenchidas)
var NaoConformidades = [];
const DOM = new Dom(NaoConformidades, preenchidas);

DOM.showPerguntas();


var buttonSubmit = document.querySelector("#botao-cadastrar-submit");
buttonSubmit.addEventListener("click", function(event) {
    event.preventDefault();

    //pegando o id_realizacao do get
    console.log(preenchidas);
    let aprovado = true;
    for (let i = 0; i < preenchidas.length; i++) {
        if (preenchidas[i]["preenchido"] == false) {
            aprovado = false;
            break;
        }
    }

    if (aprovado) {
        var url = new URLSearchParams(window.location.search)
        var id_realizacao = url.get("id_realizacao")
    
        if (NaoConformidades.length == 0) {
            // console.log("tudo certo por aqui");
            window.location.href = "actions/action_cadastrar_acao_corretiva.php?id_realizacao="+id_realizacao + "&tudo_correto=" + true + "&id_sala=" + id_sala;
        } else {
            // console.log(NaoConformidades)
            sessionStorage.setItem('NaoConformidades', JSON.stringify(NaoConformidades));
            sessionStorage.setItem('id_realizacao', id_realizacao);
            sessionStorage.setItem('id_sala', id_sala);
            window.location.href = "acao_corretiva.php";
        }
    } else {
        alert("PREENCHE TUDO AE VEI")
    }


});
