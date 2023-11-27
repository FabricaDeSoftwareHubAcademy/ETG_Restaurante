var listasrc = []
var disponiveis = {'1': false, '2': false, '3': false}
var temporaria = null
$(document).ready(function(){
    $(".upload-area").click(function(){
        $('#upload-input').trigger('click');
    });
    $('#upload-input').change(event => {
        if(event.target.files){
            let filesAmount = event.target.files.length;
            //VARIAS IMAGENS
            if (filesAmount < 4 && filesAmount > 1)
            {
                $('.upload-img').html("");
                for(i = 0; i < filesAmount; i++){
                    let reader = new FileReader();
                    let figCap = document.createElement("figcaption");
                   
                    reader.onload = function(event){                        
                        let html = `
                        <div class = "uploaded-img">
                                <img src = "${event.target.result}" class = "beluga">
                                <button type = "button" class = "remove-btn">
                                <i class = "fas fa-times"></i>
                                </button>
                                </div>
                                `;
                                $(".upload-img").append(html);
                    }
                    
                    reader.readAsDataURL(event.target.files[i]);
                }
                
                $('.upload-img').css('padding', "20px");
            }
            //UMA IMAGEM POR VEZ
            else
            {
                let arrayfotos = []
                let files = event.target.files;
                arrayfotos.push(files[0])


                for(c = 0; c < arrayfotos.length; c++)
                {   
                    
                    let reader = new FileReader();
                    let figCap = document.createElement("figcaption");

                    reader.onload = function(event)
                    {

                    for (var key in disponiveis)
                    {

                        if (disponiveis[key] == false)
                        {
                            temporaria = key;
                            disponiveis[key] = true;

                            break;
                        }
                        else
                        {
                            temporaria = false;
                        }
                    }
                    if (temporaria != false)
                    {
                       console.log(disponiveis);
                        listasrc.push({'1': event.target.result});
                        let html = `
                            <div class = "uploaded-img">
                                <img  src = "${event.target.result}" class = "beluga">
                                <button type = "button" btn="${temporaria}"  class = "remove-btn">
                                    <i class = "fas fa-times"></i>
                                </button>
                            </div>
                        `;
                        $(".upload-img").append(html);
                    }
                    
                    }

                    reader.readAsDataURL(arrayfotos[c]);
                    // console.log(arrayfotos[c]['name']);
                }
                $('.upload-img').css('padding', "20px");
            }

            // else {
            //     let modal = document.querySelector('.mensagem')
            //     modal.classList.remove('active');
            // }
            
        }
    });

    $(window).click(function(event){
        if($(event.target).hasClass('remove-btn')){
            $(event.target).parent().remove();
                btn = $(event.target).attr('btn');
                disponiveis[btn] = false;
                console.log(disponiveis);
        }
        //  else if($(event.target).parent().hasClass('remove-btn')){
        //     $(event.target).parent().parent().remove();
        // }
    })


});
let currentID;
function acao(id){
    currentID = id
    let modal = document.querySelector('.mom')
    modal.classList.add('active');   
}

function fechar(){
    let modal = document.querySelector('.mom')
    modal.classList.remove('active');

    let  red = document.getElementById('red'+currentID)
    red.classList = 'bi bi-x'
}

