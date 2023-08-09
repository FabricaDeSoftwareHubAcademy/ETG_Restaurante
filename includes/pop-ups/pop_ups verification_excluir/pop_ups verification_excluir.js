
 
function openPopupexcluir(){
    let popup = document.getElementById('popup-up-excluir');
    // let btn = document.getElementById("submit-btn-excluir").style.display = "none";

    popup.classList.add("open-popup");
    
}

function closePopupexcluir(){

    location.reload()
    document.getElementById("popup-up-excluir").style.display = "none";
    // document.getElementById("submit-btn-excluir").style.display = "block";

    // popup.classList.remove("open-popup");
}