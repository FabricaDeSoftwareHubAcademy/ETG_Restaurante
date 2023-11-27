// let awser = "";
// const red = document.getElementById('red')

var id_atual = 0;
var dados = Array();
var somadados = Array();
function atualizarValor(id, bool)
{
id_atual = id;
    if(bool){

        let  green = document.getElementById('green'+id)
        let  red = document.getElementById('red'+id)
        green.classList = 'bi bi-check-circle'
        red.classList = 'bi bi-x'

    }else{

        let  green = document.getElementById('green'+id)
        let  red = document.getElementById('red'+id)
        green.classList = 'bi bi-check'
        red.classList = 'bi bi-x-circle'
        acao(id)
    }


}
async function getDados()
{

    console.log(listasrc);
    // if (listasrc.length > 3)
    // {
    //     break;
    // }
    // let dataimg = document.getElementById('nomeimg');
    // // let dataimg2 = dataimg.value;
    // let caminhoImagem = dataimg.src;
    // let nomeImagem = caminhoImagem.substring(caminhoImagem.lastIndexOf('/') + 1);
    // getImgs(caminhoImagem);
    let descricao_nao_conf = document.getElementById('descricao_nao_conf');
    dados = {
        'id_pergu': id_atual,
        'descricao_NC': descricao_nao_conf.value,
        // 'img1': img1.value,
        // 'img2': img2.value,
        // 'img3': img3.value
    };
    somadados.push(dados);
    descricao_nao_conf.value = "";

    
}
const btn_submit = document.getElementById('btn_submit');
btn_submit.addEventListener('click', async (e ) => {
    

   e.preventDefault();

    //pegando os dados para pasar pelo metodo GET
    // Obtém a string da URL atual
    var queryString = window.location.search;

    // Cria um objeto URLSearchParams com a string da URL
    var params = new URLSearchParams(queryString);

    // Obtém o valor de um parâmetro específico
    var parametro = params.get('id_sala');

    console.log(parametro);

   JSON.stringify(somadados);
   let data_php = await fetch('./actions/cat_data_pergunta.php?id_sala='+parametro, {
       method: 'POST',
       body: JSON.stringify(somadados)
       
   });

   let response = await data_php.json();
   console.log(response);
   

});

function getImgs(files)
{
    console.log(files);
    // let files = event.target.files;
    // let formData = new FormData();

    // // Adiciona o arquivo ao objeto FormData
    // for (c = 0; c < files.length; c++)
    // {
        
    // }
    // formData.append('file', files[0]);

    // // Envia o formulário para o servidor usando uma requisição AJAX
    // let xhr = new XMLHttpRequest();
    // xhr.open('POST', 'URL_DO_SERVIDOR');
    // xhr.send(formData);
}