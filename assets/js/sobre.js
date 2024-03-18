let nextDom = document.getElementById('next');
let prevDom = document.getElementById('prev');
let carouselDom = document.querySelector('.carousel');
let SliderDom = carouselDom.querySelector('.carousel .list');
let thumbnailBorderDom = document.querySelector('.carousel .thumbnail');
let timeDom = document.querySelector('.carousel .time');


let photos = [
    { src: "../assets/imgs/devs/andre.jpg", author: "Fabrica de Software 276", title: "André Fellype", topic: "FullStack",   description: "Um programador full-stack entusiasta por códigos de programação e pela metodologia de desenvolvimento Scrum. No primeiro semestre de 2024, estarei finalizando meu curso técnico em Desenvolvimento de Sistemas ministrado pelo SENAC/MS e em 2025 finalizarei a graduação em Sistemas para Internet no IFMS - Instituto Federal de Mato Grosso do Sul", link: "https://www.linkedin.com/in/andr%C3%A9-fellype-634594207/"},
    { src: "../assets/imgs/devs/frank_corr.jpg", author: "Fabrica de Software 276", title: "Arthur Frantz", topic: "FullStack",  description: "Aficionado por criar experiências incríveis, do front ao back. Sempre buscando novas soluções e melhorias.", link:"https://www.linkedin.com/in/arthurfrantz/"  },
    { src: "../assets/imgs/devs/simoes.jpeg", author: "Fabrica de Software 276", title: "Arthur Simões", topic: "FullSatack",   description: "Olá, meu nome é Arthur Simões, tenho 18 anos e sou um entusiasta da Tecnologia. Desde sempre, tenho sido fascinado por essa área. Atuo no desenvolvimento de sites e projetos tanto front-end quanto back-end, além de contribuir ativamente para a comunidade Open Source no GitHub e em projetos livres, como Bots e APIs.", link: "https://www.linkedin.com/in/arthur-sim%C3%B5es/" },
    { src: "../assets/imgs/devs/Guilherme.jpeg", author: "Fabrica de Software 276", title: "Guilherme Schuindt", topic: "ANIMAL",   description: "#",link: "#" },
    { src: "../assets/imgs/devs/Igor.jpeg", author: "Fabrica de Software 276", title: "Igor Savioli", topic: "FullStack",    description: "Apaixonado por desafios que agregam conhecimento. Com uma sólida experiência tanto no desenvolvimento front-end quanto no back-end, estou constantemente em busca de oportunidades que me permitam expandir meu conjunto de habilidades e me manter atualizado com as últimas tecnologias e tendências do setor.", link: "https://www.linkedin.com/in/igor-savioli-albieri-766525265/"},
    { src: "../assets/imgs/devs/joceyr.jpg", author: "Fabrica de Software 276", title: "Joceyr Martins", topic: "ANIMAL",    description: "#", link: "https://www.linkedin.com/in/joceyr-gomes-martins/"},
    { src: "../assets/imgs/devs/leandro.jpeg", author: "Fabrica de Software 276", title: "Leandro Cavalcante", topic: "Front-end",   description: "#", link: "#" },
    { src: "../assets/imgs/devs/lluiz.jpg", author: "Fabrica de Software 276", title: "Luiz Chimenes", topic: "Dev'Ops",   description: "Aficionado por tecnologia e colaboração.Foco em automação, entrega continua e integração entre dev e ops. Sempre aprendendo e experimentando.Café é vida", link: "https://www.linkedin.com/in/luiz-guilherme-chimenes-56927b253/" },
    { src: "../assets/imgs/devs/thays.jpeg", author: "Fabrica de Software 276", title: "Thays Martines", topic: "Ui Ux Designer/Front-end",   description: "Tenho um forte domínio das áreas de front-end, especialmente na criação da parte visual de produtos. Além disso, tenho uma paixão pela área de Product Owner, onde posso moldar a visão do produto e trabalhar diretamente com as necessidades dos clientes. Nas horas vagas, também me aventuro no design e na criação de protótipos", link: "https://www.linkedin.com/in/thays-martines-622161214/"},
    { src: "../assets/imgs/devs/Vinicius.jpeg", author: "Fabrica de Software 276", title: "Vinicius Martins", topic: "ANIMAL",  description: "#", link: "#"},
    { src: "#", author: "Fabrica de Software 276", title: "Wanderley Terra", topic: "Back-end",  description: "#", link: "#"}
];


let currentIndex = 0;

function addPhotoToSlider(photo) {
    let item = document.createElement('div');
    item.classList.add('item', 'item-grow-from-center'); 
    item.innerHTML = `
        <img src="${photo.src}">
        <div class="content">
            <div class="author">${photo.author}</div>
            <div class="title">${photo.title}</div>
            <div class="topic">${photo.topic}</div>
            <div class="des">${photo.description}</div> <!-- Aqui exibimos a descrição correspondente -->
            <div class="buttons">
                <a class="link-contato" href="${photo.link}"><i id="icon" class="bi bi-linkedin"></i></a>
                <a class="link-contato" href="#"><i id="icon" class="bi bi-github"></i></a>
                <a class="link-contato" href="#"><i id="icon" class="bi bi-envelope-at-fill"></i></a>
            </div>
  
        </div>
    `;
    SliderDom.appendChild(item);
}

function updateThumbnailGallery() {
    thumbnailBorderDom.innerHTML = ""; 

    for (let i = currentIndex; i < currentIndex + 4; i++) {
        let index = i % photos.length; 
        let photo = photos[index]; 

        let thumbnailItem = document.createElement('div');
        thumbnailItem.classList.add('item');
        thumbnailItem.innerHTML = `
            <img src="${photo.src}">
            <div class="content">
                <div class="title">${photo.title}</div>
              
            </div>
        `;
        thumbnailBorderDom.appendChild(thumbnailItem);
    }
}

addPhotoToSlider(photos[currentIndex]);

updateThumbnailGallery();

function showNext() {
    nextDom.onclick = null; 
    currentIndex = (currentIndex + 1) % photos.length; 
    SliderDom.innerHTML = "";
    addPhotoToSlider(photos[currentIndex]); 
    updateThumbnailGallery(); 
    setTimeout(function() {
        nextDom.onclick = showNext; 
    }, 2000); 
}

function showPrev() {
    prevDom.onclick = null; 
    currentIndex = (currentIndex - 1 + photos.length) % photos.length; 
    SliderDom.innerHTML = ""; 
    addPhotoToSlider(photos[currentIndex]); 
    updateThumbnailGallery(); 
    setTimeout(function() {
        prevDom.onclick = showPrev; 
    }, 2000); 
}

nextDom.onclick = showNext;
prevDom.onclick = showPrev;

// function autoNext() {
//     nextDom.click();
//     setTimeout(autoNext, 5000);
// }

autoNext();