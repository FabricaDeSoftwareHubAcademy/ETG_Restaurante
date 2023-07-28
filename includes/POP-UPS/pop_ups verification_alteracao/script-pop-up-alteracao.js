function openPopupAlterar(){
    let popup = document.getElementById('popup-up-alteracao');
    let btn = document.getElementById("submit-btn-alteracao").style.display = "none";

    popup.classList.add("open-popup");
    
}

function closePopupAlterar(){
    document.getElementById("popup-up-alteracao").style.display = "none";
    document.getElementById("submit-btn-alteracao").style.display = "block";

    popup.classList.remove("open-popup");
}

