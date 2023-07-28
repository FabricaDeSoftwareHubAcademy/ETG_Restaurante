function openPopupValidar(){
    let popup = document.getElementById('popup-up-notificacao');
    let btn = document.getElementById("submit-btn-notificacao").style.display = "none";

    popup.classList.add("open-popup");
    
}

function closePopupValidar(){
    document.getElementById("popup-up-notificacao").style.display = "none";
    document.getElementById("submit-btn-notificacao").style.display = "block";

    popup.classList.remove("open-popup");
}