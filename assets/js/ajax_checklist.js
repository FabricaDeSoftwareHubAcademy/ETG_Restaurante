console.log("Hellow world");
var getPre = []
var getPos = []

$('document').ready(function() { 
    listarPerguntas() 
})

async function getPerguntas() {
    let data_php = await fetch("./actions/action_get_perguntas.php")
    let dados = await data_php.json()
    // console.log(dados);
    return dados
}

// var dadosPerguntas = getPerguntas()

// console.log(dadosPerguntas);

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
        
        if (element.tipo == "0" || element.tipo == "2") {
            getPre.push(element)
            

        }else if (element.tipo == "1" || element.tipo == "2") {
            getPos.push(element)
        }

    });
    let trTopo = document.createElement("tr")
    trTopo.innerHTML = '<tr class="topo-tabela"> <th>Selecione</th> <th>Pergunta Pré</th> </tr>'

    let trTopoPos = document.createElement("tr")
    trTopoPos.innerHTML = '<tr class="topo-tabela"> <th>Selecione</th> <th>Pergunta Pré</th> </tr>'

    $("#tablePre").append(trTopo)
    $("#tablePos").append(trTopoPos)

    getPre.forEach(element => {
        let tr = document.createElement("tr")
        tr.innerHTML = "<tr> <td><input type='checkbox'  id='checkbox' name='perguntas[]' value='" + element['id'] + "'></td> <td>" + element['descricao'] + "</td> </tr>"
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

// async function filterPerguntas() {

var intervalo 

$("#ajaxPergunta").on("input", function(elementInput) { 
   filterPerguntas(elementInput); 
})
async function filterPerguntas(elementInput){

    clearTimeout(intervalo)
    
    intervalo = setTimeout(() => { 
        var trsPre = $('#tablePre tr');

        // Itera sobre as linhas
         
        console.log('================================================================')
        trsPre.each(function (elementPre,i) {  
            // console.log(i.getAttribute('preid'));
            // console.log(getPre[i.getAttribute('preid')]);
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
   


        // // inserindo o topo da tabela 
        // let trTopo = document.createElement("tr")
        // trTopo.innerHTML = '<tr class="topo-tabela"> <th>Selecione</th> <th>Pergunta Pré</th> </tr>'
        // $("#tablePre").append(trTopo)
    
        // // inserindo o topo da tabela POS 
        // let trTopoPos = document.createElement("tr")
        // trTopoPos.innerHTML = '<tr class="topo-tabela"> <th>Selecione</th> <th>Pergunta Pré</th> </tr>'
        // $("#tablePos").append(trTopoPos)


        // getPre.forEach(element => {
            
        //     if(element.descricao.toLowerCase().includes(e.target.value.toLowerCase())){

        //         let tr = document.createElement("tr")
        //         tr.innerHTML = "<tr> <td><input type='checkbox'  id='checkbox' name='perguntas[]' value='" + element['id'] + "'></td> <td>" + element['descricao'] + "</td> </tr>"
        //         $("#tablePre").append(tr) 
        //     } 
        // })


        // getPos.forEach(element => {
            
        //     if(element.descricao.toLowerCase().includes(e.target.value.toLowerCase())){

        //         let tr = document.createElement("tr")
        //         tr.innerHTML = "<tr> <td><input type='checkbox'  id='checkbox' name='perguntas[]' value='" + element['id'] + "'></td> <td>" + element['descricao'] + "</td> </tr>"
        //         $("#tablePos").append(tr) 
        //     } 
        // })

    // repete a função a cada 10ms
    },10)


}






 


// async function filterPerguntas(e){

//     clearTimeout(intervalo)
    
//     intervalo = setTimeout(() => {
//         // console.log(e.target.value)
//         $("#tablePre").empty();
//         $("#tablePos").empty();
    
//         // inserindo o topo da tabela 
//         let trTopo = document.createElement("tr")
//         trTopo.innerHTML = '<tr class="topo-tabela"> <th>Selecione</th> <th>Pergunta Pré</th> </tr>'
//         $("#tablePre").append(trTopo)
    
//         // inserindo o topo da tabela POS 
//         let trTopoPos = document.createElement("tr")
//         trTopoPos.innerHTML = '<tr class="topo-tabela"> <th>Selecione</th> <th>Pergunta Pré</th> </tr>'
//         $("#tablePos").append(trTopoPos)


//         getPre.forEach(element => {
            
//             if(element.descricao.toLowerCase().includes(e.target.value.toLowerCase())){

//                 let tr = document.createElement("tr")
//                 tr.innerHTML = "<tr> <td><input type='checkbox'  id='checkbox' name='perguntas[]' value='" + element['id'] + "'></td> <td>" + element['descricao'] + "</td> </tr>"
//                 $("#tablePre").append(tr) 
//             } 
//         })


//         getPos.forEach(element => {
            
//             if(element.descricao.toLowerCase().includes(e.target.value.toLowerCase())){

//                 let tr = document.createElement("tr")
//                 tr.innerHTML = "<tr> <td><input type='checkbox'  id='checkbox' name='perguntas[]' value='" + element['id'] + "'></td> <td>" + element['descricao'] + "</td> </tr>"
//                 $("#tablePos").append(tr) 
//             } 
//         })

//     // repete a função a cada 10ms
//     },10)


// }