function openPopupimg(){
    let popup = document.getElementById('popup-up-img');
    let btn = document.getElementById("submit-btn-img").style.display = "none";

    popup.classList.add("open-popup");
    
}

function closePopupimg(){
    document.getElementById("popup-up-img").style.display = "none";
    document.getElementById("submit-btn-img").style.display = "block";

    popup.classList.remove("open-popup");
}