
// let awser = "";
// const red = document.getElementById('red')
var ids = document.getElementById('')
var id_atual = 0; 
var dados = Array();
var somadados = Array();


// status true é quando é conforme  
let listaData = { 

    // '8':{
    //     'status':true,
    //     'descricao':'as panelas estavam sujas' ,
    //     'imgs': []
    // }



}

function atualizarValor(id, bool)


{
    id_atual = id;
    

    if(bool)
    {
        listaData[id_atual] = {
            'status':true,
            'descricao': '',
            'imgs': []
        }

        let  green = document.getElementById('green'+id)
        let  red = document.getElementById('red'+id)
        green.classList = 'bi bi-check-circle'
        red.classList = 'bi bi-x'
        
    }
    else
    {
        console.log()
        if(listaData[id_atual] !== undefined){ 
            $('#descricao_nao_conf').val(listaData[id_atual].descricao)
            loadImgs()
        }else{

            listaData[id_atual] = {
                'status':true,
                'descricao': '',
                'imgs': []
            }

        }
        let  green = document.getElementById('green'+id)
        let  red = document.getElementById('red'+id)
        green.classList = 'bi bi-check'
        red.classList = 'bi bi-x-circle'
        respondidas[id] = false
        acao(id)


    }
}

$("#btn_confirm_cad").on('click',(e) => {
    e.preventDefault()
    if(($('#descricao_nao_conf').val().length > 0 ) && (listaData[id_atual].imgs.length > 0)){

        listaData[id_atual].descricao = $('#descricao_nao_conf').val()
        listaData[id_atual].status = false

        fecharModal()

    }else{
        modalStatus('Preencha todos os campos!','error')
    }


})

function fecharModal(){
 
    
    $(".upload-img").empty()
    $("#descricao_nao_conf").val('')
    let modal = document.querySelector('.mom')
    modal.classList.remove('active');
 
}

function cancelarNc(){

    listaData[id_atual] = {
        'descricao': '',
        'imgs': []
    }
    fecharModal()

    let  red = document.getElementById('red'+currentID)
    red.classList = 'bi bi-x'

}

async function getDados()
{ 
    let descricao_nao_conf = document.getElementById('descricao_nao_conf');
   
    dados = {
        'id_pergu': id_atual,
        'descricao_NC': descricao_nao_conf.value,
        'img1': (typeof listasrc[0] === 'undefined') ? null : listasrc[0],
        'img2': (typeof listasrc[1] === 'undefined') ? null : listasrc[1],
        'img3': (typeof listasrc[2] === 'undefined') ? null : listasrc[2]
    };

    

    somadados.push(dados); 
    descricao_nao_conf.value = "";
    
    removerimgs()
    let modal = document.querySelector('.mom')
    modal.classList.remove('active');
    for (var chave in disponiveis)
    {
        disponiveis[chave] = false
    }
    
    listasrc = [] 
    dados = {}
    
    $('#btn_x'+id_atual).removeAttr('onclick');

}


function loadImgs(){
    let count = 0

    if(id_atual != 0){
        $(".upload-img").empty()
        
        listaData[id_atual].imgs.forEach(element => {

             
            carregarImg(element,count)
            count+=1
        });
       
        return true

    }else{
        return false
    }
    

}


function carregarImg(img64,index){

   
    let html = `
        <div class = "uploaded-img" btn_rm="${index}">
            <img  src = "${img64}" class = "beluga">
            <button type = "button"  class = "remove-btn">
                <i class = "fas fa-times btn-remove-x"></i>
            </button>
        </div>`;

    $(".upload-img").append(html);

}


const btn_submit = document.getElementById('btn_submit');
btn_submit.addEventListener('click', async (e) => {
   e.preventDefault();
   
   for (var chave in respondidas)
    {
        if (respondidas[chave] == null)
        {
            continuar_rodando = false 
            
            modalStatus("Marque todos os campos","error")
            break;
            
        }
    }
    if (continuar_rodando)
    {  
        // console.log('teste');
        //pegando os dados para pasar pelo metodo GET
        // Obtém a string da URL atual
        var queryString = window.location.search;
    
        // Cria um objeto URLSearchParams com a string da URL
        var params = new URLSearchParams(queryString);
    
        // Obtém o valor de um parâmetro específico
        var parametro = params.get('id_sala');
    
       JSON.stringify(somadados);
       let data_php = await fetch('./actions/cat_data_pergunta.php?id_sala='+parametro, {
           method: 'POST',
           body: JSON.stringify(somadados) 
       });
    
    //    let response = await data_php.json();
       let response = await data_php.json();


        console.log("response");

        if(response){
            modalStatus("Cadastrado com sucesso!","success",() => {
                location.href="listar_salas.php"
            
            });
        }

  
       
    }


    });
 