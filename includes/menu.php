<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https/cdnjs.cloudflare.comlibs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../assets/css/menu.css">


</head>

<body>

    <div class="cabecalho-menu">
        <div class="container-menu">
            <a  class="toggleBox-menu">
              <span class="icon-menu"></span>
            </a>
            <ul class="navItems-menu">
                <li class="li-menu">
                    <a href="#" class="link-menu">
                        <i class="bi bi-bell" style="--i:1"></i>                
                    </a>
                </li>
                <li class="li-menu">
                    <a href="#" class="link-menu">
                        <i class="bi bi-house-door" style="--i:2"></i>                    
                    </a>
                </li>            
                <li class="li-menu">
                    <a href="#" class="link-menu">
                        <i class="bi bi-person" style="--i:3"></i>                
                    </a>
                </li>        
                <li class="link_submenu">
                    <a href="#" class="link-menu">
                        <i class="bi bi-list-check" id="btnsubmenu" onclick="openSubmenu()" style="--i:4"></i>
                    </a>
                        <ul class="sub-menu">            
                            <li class="iten-submenu"><a href="#" id="fonte-submenu">Cadastro de Salas</a></li>
                            <li class="iten-submenu"><a href="#" id="fonte-submenu">Relatórios</a></li>
                            <li class="iten-submenu"><a href="#" id="fonte-submenu">Cadastro Checklist</a></li>
                            <li class="iten-submenu"><a href="#" id="fonte-submenu">Cadastro de Perguntas</a></li>                        
                        </ul>
                </li>         
                <li class="saida">
                    <button class="btnOpenmodal-menu" onclick="openModal()" >  
                        <a href="#" class="link-menu">
                            <i class="bi bi-box-arrow-left" style="--i:5"></i>
                        </a>
                    </button>
                </li>        
                <div class="modal-container-menu">
                    <div class="modal-menu">
                    
                        <h3 class="text-popmenu">
                        Tem Certeza que Deseja Sair?
                        </h3>
                        <div class="btns-menu">
                            <button class="btnOk-menu" onclick="closeModal(0)" > NÃO</button>
                            <button class="btnClose-menu" onclick="closeModal(1)" > SIM</button>
                        </div>
                    </div>
                </div>        
            </ul>
        </div>
        <script src="js.js"></script>    
        <div class="container-logo">
            <div class="logo">
                <ul class="cabecalho_logo"><img src="../assets/imgs/logos/MicrosoftTeams-image.png" alt="Carregando" id = "img-logo"></ul>
            </div>
            <div class="fitas">
                <ul class="sub-fita"><div id="bloc1"></div></ul>
                <ul class="sub-fita"><div id="bloc2"></div></ul>
            </div>
        </div>
    </div> 
    
    </div>
    <script>
        var toggleClick = document.querySelector(".toggleBox-menu");
        var container = document.querySelector(".container-menu");
        toggleClick.addEventListener("click", ()=>{
          toggleClick.classList.toggle("active");
          container.classList.toggle("active");
          submenu.classList.remove('active');
          btn_submenu.setAttribute('onclick', 'openSubmenu()');
          closeModal()
        })


        const modal = document.querySelector('.modal-container-menu')
const submenu = document.querySelector('.sub-menu')
const btn_submenu = document.getElementById('btnsubmenu')


function openModal() {
  modal.classList.add('active')
     
}

function closeModal(valor) {

  if(valor == 1){

    window.location.href = "./sair.php";

  }

  modal.classList.remove('active')

}

function openSubmenu(){
  submenu.classList.add('active')
  btn_submenu.setAttribute('onclick', 'closeSubmenu()')
}

function closeSubmenu(){
  submenu.classList.remove('active')
  btn_submenu.setAttribute('onclick', 'openSubmenu()')

}
    </script>       
</body>
</html>