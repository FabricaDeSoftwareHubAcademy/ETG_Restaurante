
let fileInput = document.getElementById("file-input");
let imageContainer = document.getElementById("images");
let numOfFiles = document.getElementById("num-of-files");

function preview(){
    imageContainer.innerHTML = "";
    numOfFiles.textContent = `${fileInput.files.length} Arquivos escolhidos`;

    for(i of fileInput.files){
        let reader = new FileReader();
        let figure = document.createElement("figure");
        let figCap = document.createElement("figcaption");
        figCap.innerText = i.name;
        figure.appendChild(figCap);
        reader.onload=()=>{
            let img = document.createElement("img");
            img.setAttribute("src",reader.result);
            figure.insertBefore(img,figCap);
        }
        imageContainer.appendChild(figure);
        reader.readAsDataURL(i);
    }
}

function acao(){
    
    let modal = document.querySelector('.mom')

    // modal.style.display = 'flex';

    let modala = document.querySelector('.bi.bi-x-circle')
    modal.classList.add('active');


    // modala.style.display = 'none';    
}

function fechar(){

    let modal = document.querySelector('.mom')
    modal.classList.remove('active');
}