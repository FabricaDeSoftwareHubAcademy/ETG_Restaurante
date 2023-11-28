
$(document).ready(function(){
    $(".upload-area").click(function(){
        $('#upload-input').trigger('click');
    });

    $('#upload-input').change(event => {
        if(event.target.files){
            let filesAmount = event.target.files.length;
            if (filesAmount < 4 && filesAmount > 0){
                $('.upload-img').html("");
                for(let i = 0; i < filesAmount; i++){
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

            else {
                let modal = document.querySelector('.mensagem')
                modal.classList.remove('active');
            }
            
        }
    });

    $(window).click(function(event){
        if($(event.target).hasClass('remove-btn')){
            $(event.target).parent().remove();
        } else if($(event.target).parent().hasClass('remove-btn')){
            $(event.target).parent().parent().remove();
        }
    })

    $
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

