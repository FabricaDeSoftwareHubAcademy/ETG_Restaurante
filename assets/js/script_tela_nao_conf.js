var listasrc = []
var disponiveis = {'1': false, '2': false, '3': false}
var temporaria = null

$(document).ready(function(){
    $(".upload-area").click(function(){
        $('#upload-input').trigger('click');
    });
    $('#upload-input').change(event => {
 
        
        if(event.target.files){
            //VARIAS IMAGENS
            let filesAmount = event.target.files.length; 
            if (filesAmount < 4 && filesAmount > 1)
            {    

                listasrc = []
                for(c = 0; c < event.target.files.length; c++)
                {
                    let reader = new FileReader();
                    let figCap = document.createElement("figcaption");
                    reader.onload = function(event)
                    {   
                        
                        listasrc.push(event.target.result);
                        let html = `
                            <div class = "uploaded-img">
                                <img  src = "${event.target.result}" class = "beluga">
                                <button type = "button" btn="${temporaria}"  class = "remove-btn">
                                    <i class = "fas fa-times btn-remove-x"></i>
                                </button>
                            </div>
                        `;
                        $(".upload-img").append(html);
                    }
             
                    reader.readAsDataURL(event.target.files[c]);
                     
 
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
                        else{
                            temporaria = false;
                        }
                    }
                    if (temporaria != false)
                    {
                        // ESQUECEMOS OQ E ISSO, ENTENDA DEPOIS
                        listasrc.push(event.target.result);
                        let html = `
                            <div class = "uploaded-img">
                                <img  src = "${event.target.result}" class = "beluga">
                                <button type = "button" btn="${temporaria}"  class = "remove-btn">
                                    <i class = "fas fa-times btn-remove-x"></i>
                                </button>
                            </div>
                        `;
                        $(".upload-img").append(html);
                    }
                    
                    }

                    reader.readAsDataURL(arrayfotos[c]);

                }
                $('.upload-img').css('padding', "20px");
            } 
            
            
            $('#upload-input').val('');

        }
    });

    $(window).click(function(event){
       
        if($(event.target).hasClass('remove-btn')){
            $(event.target).parent().remove();
                btn = $(event.target).attr('btn');
                disponiveis[btn] = false;
        }
    })


});
let currentID;
function acao(id){
    currentID = id
    let modal = document.querySelector('.mom')

    modal.classList.add('active');

 
    
}

function fechar(){
    listasrc = []
    removerimgs()

    let modal = document.querySelector('.mom')
    modal.classList.remove('active');

    let  red = document.getElementById('red'+currentID)
    red.classList = 'bi bi-x'
}

function removerimgs()
{
    let imagens = document.querySelectorAll('.uploaded-img')
    for (var div of imagens) {
        div.remove();
    }
}
