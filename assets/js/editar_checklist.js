 
var getPre = []
var getPos = []
var tiposPerg = {

    0:'Pré',
    1:'Pós',
    2:'Ambas'

}

$('document').ready(function() { 
    listarPerguntas() 
})

async function getDadosChecklist(id_checklist){
 

    let data_php = await fetch('./actions/action_get_checklist_by_id.php?id_checklist='+id_checklist)
    let dados = await data_php.json()  
    return dados
    

}



async function getPerguntasChecklist() {

    const urlParams = new URLSearchParams(window.location.search);
    const id_checklist = urlParams.get('id_checklist');

    if(id_checklist == null){

        location.href = "gerenciar_checklist.php"

    } 

    let data_php = await fetch("./actions/action_get_perguntas_checklist.php?id_checklist="+id_checklist)
    let dados = await data_php.json() 
 
    return dados
}

async function getPerguntas() {

    const urlParams = new URLSearchParams(window.location.search);
    const id_checklist = urlParams.get('id_checklist');
    if(id_checklist == null){

        location.href = "gerenciar_checklist.php"

    } 

    let data_php = await fetch("./actions/action_get_perguntas.php")
    let dados = await data_php.json() 
    

 
    return dados
}
   
async function printPerguntasChecklist() {
    console.log(await getPerguntasChecklist())
}
async function printPerguntas() {
    console.log(await getPerguntas())
}

function pergInCheck(id_perg, dPC){
  
    return dPC.find(e => id_perg == e.id) !== undefined

}

async function listarPerguntas() {

    const urlParams = new URLSearchParams(window.location.search);
    const id_checklist = urlParams.get('id_checklist');
    
    $('#input_nome_checklist').val((await getDadosChecklist(id_checklist))[0].nome)

    $('.input_label').css('background-color','transparent')
    $('.input_label').css('font-size','17px')


    let dadosPerguntas = await getPerguntas()
    let dadosPerguntasChecklist = await getPerguntasChecklist()

  

    $("#tablePre").empty()
    $("#tablePos").empty()
    getPre = []
    getPos = []
 
    dadosPerguntas.forEach(element => {
        
        if ((element.tipo == "0") || (element.tipo == "2")) {
            getPre.push(element) 
        } 

        if ((element.tipo == "1") || (element.tipo == "2")) { 
            getPos.push(element)
        }

    });


    let trTopo = document.createElement("tr")
    trTopo.innerHTML = '<tr class="topo-tabela"> <th>Pergunta Pré</th> <th></th>  </tr>'

    let trTopoPos = document.createElement("tr")
    trTopoPos.innerHTML = '<tr class="topo-tabela"> <th>Pergunta Pós</th> <th></th>  </tr>'

    $("#tablePre").append(trTopo)
    $("#tablePos").append(trTopoPos)

  
    getPre.forEach(element => {
 
        let checkedBox = '' 
        
        if(pergInCheck(element.id, dadosPerguntasChecklist)){ 
            checkedBox = 'checked' 
        };
        
        // puxar todas as perguntas disponiveis 
        
        
        let tipoPrint = element.tipo  == 2 ? 'Ambas' : ''
        let classAmbas = element.tipo == 2 ? "class='ambasCheck"+element.id+"'" : ''


        let tr = document.createElement("tr")
        tr.innerHTML = "<tr>   <td> <h3 class='text_tipo_perg'>"+tipoPrint+"</h3>  <input "+classAmbas+" type='checkbox' "+checkedBox+"  id='checkbox' name='perguntas[]' value='" + element['id'] + "'></td> <td>" + element['descricao'] + "</td> </tr>"
        tr.setAttribute('preId', element.id)
        $("#tablePre").append(tr)


         if(element.tipo == 2){
            // atualizar as perguntas pre e pos de acordo com oq foi clicado
            $('#tablePre .ambasCheck'+element.id).on('change',function() {
                $('#tablePos .ambasCheck'+element.id).prop('checked',this.checked)
            })

        }
    });

    getPos.forEach(element => {

        let checkedBox = '' 
         
        if(pergInCheck(element.id, dadosPerguntasChecklist)){ 
            checkedBox = 'checked' 
        };
        let tipoPrint = element.tipo  == 2 ? 'Ambas' : ''
        let classAmbas = element.tipo == 2 ? "class='ambasCheck"+element.id+"'" : ''

        let tr = document.createElement("tr")
        tr.innerHTML = "<tr id='pergPos'> <td> <h3 class='text_tipo_perg'>"+tipoPrint+"</h3> <input "+classAmbas+" type='checkbox' "+checkedBox+" id='checkbox' name='perguntas[]' value='" + element['id'] + "'></td> <td>" + element['descricao'] + "</td> </tr>"
        tr.setAttribute('posId', element.id)
        
        $("#tablePos").append(tr)


        if(element.tipo == 2){

            $('#tablePos .ambasCheck'+element.id).on('change',function() {
                $('#tablePre .ambasCheck'+element.id).prop('checked',this.checked)
            })

        }
    });

}

$('[id=perg_del]').on('click',function(){
    console.log(123123)
})

var intervalo 

$("#ajaxPergunta").on("input", function(elementInput) { 
   filterPerguntas(elementInput); 
})
async function filterPerguntas(elementInput){

    clearTimeout(intervalo)
    
    intervalo = setTimeout(() => { 
        var trsPre = $('#tablePre tr');
        var trsPos = $('#tablePos tr');
  
        trsPre.each(function (elementPre,i) {   
            getPre.forEach(function (e){
 
                if(e.id == i.getAttribute('preid')){ 
                    if(!e.descricao.toLowerCase().includes($('#ajaxPergunta').val().toLowerCase())){    
                        i.classList.add('escondido')
                    }else{
                        if(i.classList.contains('escondido')){
                            i.classList.remove('escondido')
                        }
                    }
                }
            })
        });
        

        trsPos.each(function (elementPre,i) {   

            getPos.forEach(function (e){
                
                if(e.id == i.getAttribute('posid')){ 
                    if(!e.descricao.toLowerCase().includes($('#ajaxPergunta').val().toLowerCase())){    
                        i.classList.add('escondido')
                    }else{
                        if(i.classList.contains('escondido')){
                            i.classList.remove('escondido')
                        }
                    }
                }
            })
        });
    // repete a função a cada 10ms
    },10) 
} 

function mostrarPerguntas(){ 
    var trsPre = $('#tablePre tr');
    var trsPos = $('#tablePos tr');

    trsPre.each(function (elementPre,i) {   
        i.classList.remove('escondido')  
    })
    trsPos.each(function (elementPre,i) {   
        i.classList.remove('escondido')  
    }) 
}
// falta implementar ainda 
function ResetListaPerguntas(){
 
    $('#ajaxPergunta').val('')
    mostrarPerguntas()

}

