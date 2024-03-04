import { Dom } from './Dom.js';


var NaoConformidades = [];
const DOM = new Dom(NaoConformidades);

DOM.showPerguntas();

var buttonSubmit = document.querySelector("#botao-cadastrar-submit");
buttonSubmit.addEventListener("click", function(event) {
    event.preventDefault();
    sessionStorage.setItem('NaoConformidades', JSON.stringify(NaoConformidades));
    window.location.href = "acao_corretiva.php";
});
