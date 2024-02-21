function openPopupUserCadastrado() {
    let popup = document.getElementById('popup-up-user');
    let btn = document.getElementById("submit-btn-user");

    btn.style.display = "none";
    popup.classList.add("open-popup");
}

function closePopupUserCadastrado() {
    let popup = document.getElementById("popup-up-user");
    let btn = document.getElementById("submit-btn-user");

    btn.style.display = "block";

    popup.classList.remove("open-popup");
}
