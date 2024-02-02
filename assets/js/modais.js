function modalStatus(texto,tipo){
    var sectionModal = document.querySelectorAll(".section_modal");

// Verifique se o elemento foi encontrado antes de tentar removê-lo
    if (sectionModal) {
        sectionModal.forEach((item) => {

            item.remove()

        })
    } 

    let icon_modal = '';
    let tit_modal = ''
    let color_btn_modal = ''

    if(tipo == 'success'){
        icon_modal = '<i class="fa-regular fa-circle-check"></i>'
        tit_modal = 'Concluído'
        color_btn_modal = '#609437'

    }else if(tipo == 'error'){

        icon_modal = '<i class="fa-regular fa-circle-xmark" style="color: #ec0000;"></i>'
        tit_modal = 'Erro'
        color_btn_modal = '#ec0000'
    }

    var linkElement = document.createElement('link');

    linkElement.rel = 'stylesheet';
    linkElement.type = 'text/css';
    linkElement.href = '../assets/css/modalSucesso.css';
    document.head.appendChild(linkElement);

    // <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    var linkFontAwesome = document.createElement('link')
    linkFontAwesome.rel = 'stylesheet'; 
    linkFontAwesome.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'
    document.head.appendChild(linkFontAwesome);



    var sectionModal = document.createElement('section')

    sectionModal.innerHTML = '<section class="section_modal"> <span class="overlay-modal"></span> <div class="modal-box">'+icon_modal+' <h2 class="titulo_pop_up">'+tit_modal+'</h2> <h3 class="subtitulo_pop_up">'+texto+'</h3> <div class="buttons-pop_up"> <div class="container_dos_btns"> <button class="close-btn" style="background-color: '+color_btn_modal+'">Ok, fechar</button> </div> </div> </div> </section>'
    
    sectionModal.classList.add('section_modal') 

    document.body.insertBefore(sectionModal, document.body.firstChild);

    let overlay = document.querySelector(".overlay-modal")
    let modal = document.querySelector(".modal-box")

   
    let closeModalBtn = document.querySelector('.close-btn');

     
    closeModalBtn.addEventListener('click', closeModal);

     
    function openModal() { 
        overlay.style.opacity = '1';
        overlay.style.pointerEvents = 'auto';
        modal.style.opacity = '1';
        modal.style.pointerEvents = 'auto';
    }
    function closeModal() {
        overlay.style.opacity = '0';
        overlay.style.pointerEvents = 'none';
        modal.style.opacity = '0';
        modal.style.pointerEvents = 'none';
    }

    openModal()
     
    

}