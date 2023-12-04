var dadosPerguntas
async function listarPerguntas(){
    
    let dados_php = await fetch('../pages/actions/action_get_perguntas.php')
    dadosPerguntas = await dados_php.json()

    console.log(dadosPerguntas)
    for(pergunta in dadosPerguntas){
        

        let divPergunta = '<div class="question1 move" animation="right"> <p name="question_text" id="question_text">'+dadosPerguntas[pergunta].descricao+' </p> <div class="icons-question1"> <button class="editar" onclick="openPopup2()"><i class="bi bi-pencil-square"></i></button> <button class="excluir" onclick="openPopup3()"><i class="bi bi-trash"></i></button> </div> </div>'
 
        $('#perguntas').append(divPergunta)
    } 


    const observer = new IntersectionObserver((entries) => {

        entries.forEach((entry) => {
    
            console.log(entry);
            
            if(entry.isIntersecting){
    
                entry.target.classList.add('show');
    
            }
            
        });
    
    })
    
    
    var hiddenElements = document.querySelectorAll('.move');
    hiddenElements.forEach((el) => observer.observe(el))


};




// var intervaloInput 
// $("#input").on("input", async function(){ 
//     clearTimeout(intervaloInput);
//     // definindo setTimeout para que dps de 500ms apareça as perguntas
//     intervaloInput = setTimeout(async function(){

//         $("#perguntas").empty()


//         for(pergunta in dadosPerguntas){

//             let descricao =  dadosPerguntas[pergunta].descricao.toLowerCase()
//             if(descricao.includes($("#input").val())){

//                 let divPergunta = '<div class="question1 move" animation="right"> <p name="question_text" id="question_text">'+dadosPerguntas[pergunta].descricao+' </p> <div class="icons-question1"> <button class="editar" onclick="openPopup2()"><i class="bi bi-pencil-square"></i></button> <button class="excluir" onclick="openPopup3()"><i class="bi bi-trash"></i></button> </div> </div>'
    
//                 $('#perguntas').append(divPergunta)
//             }

//         }
//     },500)
// })

