var intervaloInput 
$("#input").on("input", async function(){ 
    clearTimeout(intervaloInput); 
    // definindo setTimeout para que dps de 500ms apareça as perguntas
    intervaloInput = setTimeout(async function(){
        $("#perguntas").empty()
        for(pergunta in dadosPerguntas){

            let descricao =  dadosPerguntas[pergunta].descricao.toLowerCase()
            if(descricao.includes($("#input").val().toLowerCase())){

                let divPergunta = '<div class="question1 move" animation="right"> <p name="question_text" id="question_text">'+dadosPerguntas[pergunta].descricao+' </p> <div class="icons-question1"> <button class="editar" onclick="openPopup2()"><i class="bi bi-pencil-square"></i></button> <button class="excluir" btn_excluir="'+dadosPerguntas[pergunta].id+'" id="btn_trash_excluir_pergunta" onclick="openPopup3()"><i class="bi bi-trash"></i></button> </div> </div>'
                
                $('#perguntas').append(divPergunta)
            }
        }
        $('[id="btn_trash_excluir_pergunta"]').on('click',async function(){ 
            id_atual_excluir_pergunta = $(this).attr('btn_excluir')  
        })


           
        const observer = new IntersectionObserver((entries) => {
    
            entries.forEach((entry) => {
        
                // console.log(entry);
                
                if(entry.isIntersecting){
        
                    entry.target.classList.add('show');
        
                }
            });
        })
        var hiddenElements = document.querySelectorAll('.move');
        hiddenElements.forEach((el) => observer.observe(el))

    },500)
})

// botao de confirmar cadastro de pergunta 
$("#btn_cad_pergunta").click(async function(event){
    event.preventDefault()

    // se todos os campos estiverem corretamente preenchidos
    if((($('#nova_pergunta').val().trim().length) > 0) && $('#check1').prop('checked') || $('#check2').prop('checked')){
        let formData = new FormData($('#overlay')[0])    
        let dados_php = await fetch('./actions/cad_pergunta.php',{
            method:'POST',
            body: formData
        })
        let response = await dados_php.json()
        console.log(response)
        // let novaPergunta = '<div class="question1 move" animation="right"> <p name="question_text" id="question_text">'+dadosPerguntas[pergunta].descricao+' </p> <div class="icons-question1"> <button class="editar" onclick="openPopup2()"><i class="bi bi-pencil-square"></i></button> <button class="excluir" onclick="openPopup3()"><i class="bi bi-trash"></i></button> </div> </div>'
        // $('#perguntas').prepend(novaDiv);

        closePopup1()
        $("#nova_pergunta").val('')
        $('#check1').prop('checked',false)
        $('#check2').prop('checked',false)

        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.onmouseenter = Swal.stopTimer;
              toast.onmouseleave = Swal.resumeTimer;
            }
          });
          Toast.fire({
            icon: "success",
            title: "Cadastrado com sucesso"
          });

        listarPerguntas()
    }else{

        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.onmouseenter = Swal.stopTimer;
              toast.onmouseleave = Swal.resumeTimer;
            }
          });
          Toast.fire({
            icon: "error",
            title: "Preencha todos os campos"
          }); 
    } 
})  

$("#btn_cancelar_cad_pergunta").click(async function(event){
    event.preventDefault()

    closePopup1()
    $("#nova_pergunta").val('')
    $('#check1').prop('checked',false)
    $('#check2').prop('checked',false)

})


$("#botao-sim-submit").on('click',async function(event){

    closePopup3()
    let dados_php = await fetch('../pages/actions/action_excluir_pergunta.php?id_pergunta='+id_atual_excluir_pergunta)

    let response = await dados_php.json()
    console.log(response)
    if(response.status){


        listarPerguntas()
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.onmouseenter = Swal.stopTimer;
              toast.onmouseleave = Swal.resumeTimer;
            }
          });
          Toast.fire({
            icon: "success",
            title: "Pergunta excluida com sucesso!"
          }); 

          $("input").val('')



    }else{
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.onmouseenter = Swal.stopTimer;
              toast.onmouseleave = Swal.resumeTimer;
            }
          });
          Toast.fire({
            icon: "error",
            title: "Erro ao excluir pergunta, tente novamente mais tarde"
          }); 

    }
})


function setDadosPerguntaById(id){
    let dados_sala = ''
    for(let i = 0; i < dadosPerguntas.length; i++){
        if(dadosPerguntas[i]['id'] == id){
            dados_sala = dadosPerguntas[i]
        }
    }

    console.log(dados_sala)
    if(dados_sala['tipo'] == '0'){
        $('#check3').prop('checked',true)
    }

    if(dados_sala['tipo'] == '1'){
        $('#check4').prop('checked',true)
    }

    if(dados_sala['tipo'] == '2'){
        $('#check3').prop('checked',true)

        $('#check4').prop('checked',true)
    }




    $("#text_editar_pergunta").val(dados_sala['descricao'])

     
    
    
}