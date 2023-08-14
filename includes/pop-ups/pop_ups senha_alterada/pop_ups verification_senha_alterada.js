function openPopupsenha(){
    let popup = document.getElementById('popup-up-senha');
    let popup_container = document.querySelector('.container-pop-up-senha');

    //let btn = document.getElementById("submit-btn-senha").style.display = "none";

    popup.classList.add("open-popup");
    popup_container.classList.add("active")
}

function closePopupsenha(){

    let popup_container = document.querySelector('.container-pop-up-senha');
    let popup = document.getElementById('popup-up-senha');
    popup.classList.remove("open-popup");
    popup_container.classList.remove("active")
    
}