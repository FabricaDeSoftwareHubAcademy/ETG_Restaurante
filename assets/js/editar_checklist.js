var getPre = []
var getPos = []

$('document').ready(function() { 
    listarPerguntas() 
})

async function getPerguntas() {

    const urlParams = new URLSearchParams(window.location.search);
    const id_checklist = urlParams.get('id_checklist');
    if(id_checklist == null){

        location.href = "gerenciar_checklist.php"

    }


    let data_php = await fetch("./actions/action_get_perguntas_checklist.php?id_checklist="+id_checklist)
    let dados = await data_php.json() 
 
    return dados
}
  
async function printPerguntas() {
    console.log(await getPerguntas())
}
 
async function listarPerguntas() {
    let dadosPerguntas = await getPerguntas()
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
        if(dadosPerguntas.some(item => item.id === element.id)){

            checkedBox = 'checked'

        };
        
        // puxar todas as perguntas disponiveis 

        let tr = document.createElement("tr")
        tr.innerHTML = "<tr> <td><input type='checkbox' "+checkedBox+"  id='checkbox' name='perguntas[]' value='" + element['id'] + "'></td> <td>" + element['descricao'] + "</td> </tr>"
        tr.setAttribute('preId', element.id)
         $("#tablePre").append(tr)
    });

    getPos.forEach(element => {
        let tr = document.createElement("tr")
        tr.innerHTML = "<tr id='pergPos'> <td><input type='checkbox'  id='checkbox' name='perguntas[]' value='" + element['id'] + "'></td> <td>" + element['descricao'] + "</td> </tr>"
        tr.setAttribute('posId', element.id)
 
        $("#tablePos").append(tr)
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

