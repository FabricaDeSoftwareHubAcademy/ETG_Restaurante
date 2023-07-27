function openPopupCheklist_cadastrado(){
    let popup = document.getElementById('popup-up-cheklist_cadastrado');
    let btn = document.getElementById("submit-btn-cheklist_cadastrado").style.display = "none";

    popup.classList.add("open-popup");
    
}

function closePopupCheklist_cadastrado(){
    document.getElementById("popup-up-cheklist_cadastrado").style.display = "none";
    document.getElementById("submit-btn-cheklist_cadastrado").style.display = "block";

    popup.classList.remove("open-popup");
}