function openPopupSala(){
    let popup = document.getElementById('popup-up-sala');
    let btn = document.getElementById("submit-btn-sala").style.display = "none";

    popup.classList.add("open-popup");
    
}

function closePopupSala(){
    document.getElementById("popup-up-sala").style.display = "none";
    document.getElementById("submit-btn-sala").style.display = "block";

    popup.classList.remove("open-popup");
}