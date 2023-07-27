function openPopupItem(){
    let popup = document.getElementById('popup-up-item');
    let btn = document.getElementById("submit-btn-item").style.display = "none";

    popup.classList.add("open-popup");
    
}

function closePopupItem(){
    document.getElementById("popup-up-item").style.display = "none";
    document.getElementById("submit-btn-item").style.display = "block";

    popup.classList.remove("open-popup");
}