function openPopupsenha(){
    let popup = document.getElementById('popup-up-senha');
    //let btn = document.getElementById("submit-btn-senha").style.display = "none";

    popup.classList.add("open-popup");
    
}

function closePopupsenha(){
    document.getElementById("popup-up-senha").style.display = "none";
    document.getElementById("submit-btn-senha").style.display = "block";

    popup.classList.remove("open-popup");
}