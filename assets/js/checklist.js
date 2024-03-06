
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
            'imgs': [],
            'id_pergunta':id_atual
        }

        let  green = document.getElementById('green'+id)
        let  red = document.getElementById('red'+id)
        green.classList = 'bi bi-check-circle'
        red.classList = 'bi bi-x'
        
    }
    else
    {
        
        if(listaData[id_atual] !== undefined){ 
            $('#descricao_nao_conf').val(listaData[id_atual].descricao)
            loadImgs()
        }else{

            listaData[id_atual] = {
                'status':true,
                'descricao': '',
                'imgs': [],
                'id_pergunta':id_atual
            }

        }

        let descricao_pergunta_click = dadosPerguntas.find((e) => e.id_pergunta == id_atual)
        $('.pergunta_nao_conf').text(descricao_pergunta_click.pergunta)


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

    delete listaData[id_atual]
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

function todasPergResp(){

    let todasResp = true

    perguntasPre.forEach((e) => { 
        if(listaData[e] == undefined){ 
            todasResp = false 
        }
    })

    return todasResp

    

}

const btn_submit = document.getElementById('btn_submit');
btn_submit.addEventListener('click', async (e) => {

    e.preventDefault();
    JSON.stringify()

    const urlParams = new URLSearchParams(window.location.search);
    const id_sala = urlParams.get('id_sala');
    
     
    if(todasPergResp()){

        let data_php = await fetch('./actions/cat_data_pergunta.php?id_sala='+id_sala+'&id_checklist='+id_checklist, {
            method: 'POST',
            body: JSON.stringify(listaData) 
        });
        
        let res = await data_php.json()
        
        if(res.status == true){

            modalStatus('Checklist efetuado com Sucesso!','success',() => { 
                location.href = 'visualizar_sala.php?id_sala='+id_sala 
            })

        }else{

            modalStatus('Aconteceu, tente novamente mais tarde','error',() => { 
                location.href = 'visualizar_sala.php?id_sala='+id_sala 
            })

        }


    }else{

        modalStatus('Responda todo o formulário!','error')

    }
    

    // let response = await data_php.json();



    // if(response){
    //     modalStatus("Cadastrado com sucesso!","success",() => {
    //         location.href="listar_salas.php"
        
    //     });
    // }

  
       
    });
 