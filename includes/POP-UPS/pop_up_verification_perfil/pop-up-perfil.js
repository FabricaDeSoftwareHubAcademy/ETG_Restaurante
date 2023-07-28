function openPopupPerfil(){
    let popup = document.getElementById('popup-up-perfil');
    let btn = document.getElementById("submit-btn-perfil").style.display = "none";

    popup.classList.add("open-popup");
    
}

function closePopupPerfil(){
    document.getElementById("popup-up-perfil").style.display = "none";
    document.getElementById("submit-btn-perfil").style.display = "block";

    popup.classList.remove("open-popup");
}