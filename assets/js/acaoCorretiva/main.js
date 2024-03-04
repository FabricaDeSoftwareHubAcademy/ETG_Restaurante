import { Dom } from './Dom.js';

 
// Obtenha o array armazenado no sessionStorage
var dadosGetStorage = JSON.parse(sessionStorage.getItem('NaoConformidades'));
console.log(dadosGetStorage);



var NaoConformidades = [];
var AcoesCorretivas = [];
const DOM = new Dom(dadosGetStorage, AcoesCorretivas);

DOM.showPerguntas();


