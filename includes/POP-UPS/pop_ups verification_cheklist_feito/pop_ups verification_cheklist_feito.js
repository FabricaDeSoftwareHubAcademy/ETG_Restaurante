function openPopupCheklist(){
    let popup = document.getElementById('popup-up-cheklist');
    let btn = document.getElementById("submit-btn-cheklist").style.display = "none";

    popup.classList.add("open-popup");
    
}

function closePopupCheklist(){
    document.getElementById("popup-up-cheklist").style.display = "none";
    document.getElementById("submit-btn-cheklist").style.display = "block";

    popup.classList.remove("open-popup");
}