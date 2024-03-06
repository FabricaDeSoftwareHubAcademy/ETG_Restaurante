import { Dom } from './Dom.js';


var NaoConformidades = [];
const DOM = new Dom(NaoConformidades);

DOM.showPerguntas();


var buttonSubmit = document.querySelector("#botao-cadastrar-submit");
buttonSubmit.addEventListener("click", function(event) {
    event.preventDefault();

    //pegando o id_realizacao do get
    var url = new URLSearchParams(window.location.search)
    var id_realizacao = url.get("id_realizacao")

    if (NaoConformidades.length == 0) {
        // console.log("tudo certo por aqui");
        window.location.href = "actions/action_cadastrar_acao_corretiva.php?id_realizacao="+id_realizacao + "&tudo_correto="+true;
    } else {
        // console.log(NaoConformidades)
        sessionStorage.setItem('NaoConformidades', JSON.stringify(NaoConformidades));
        sessionStorage.setItem('id_realizacao', id_realizacao);
        window.location.href = "acao_corretiva.php";
    }
});
