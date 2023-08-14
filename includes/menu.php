<?php
 
 ?>
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
                    <a href="mural.php" class="link-menu">
                        <i id="icon-casa" class="bi bi-house-door"  style="--i:1"></i>                    
                    </a>
                </li>  

            
                <li class="link_submenu2">
                    <a href="#" class="link-menu2">
                        <i id="icon-pessoa" class="bi bi-person"  style="--i:2"></i>                
                    </a>
                
                    <ul class="sub-menu2" id="btnsubmenu2" onclick="openSubmenu2()">
                        <li class="iten-submenu2"><a href="#" id="fonte-submenu">Gerenciar Perfil</a></li>
                        <li class="iten-submenu2"><a href="#" id="fonte-submenu">Editar Usuario</a></li>
                    </ul>
                </li>   


                <li class="li-menu">
                    <a href="#" class="link-menu">
                        <i id="icon-notificacao" class="bi bi-bell"  style="--i:3"></i>                
                    </a>
                </li>   

                <li class="li-menu">
                    <a href="listar_salas.php" class="link-menu">
                        <i id="icon-vizualizar" class="bi bi-person-video3"  style="--i:4"></i>              
                    </a>  
                </li>      

                
                <li class="link_submenu">
                    <a href="#" class="link-menu">
                        <i class="bi bi-list-check" id="btnsubmenu" onclick="openSubmenu()" style="--i:6"></i>
                    </a>

                        <ul class="sub-menu">            
                            <li class="iten-submenu"><a href="../pages/cadastro_salas.php" id="fonte-submenu">Cadastro de Salas</a></li>
                            <li class="iten-submenu"><a href="cadastro_checklist.php" id="fonte-submenu">Cadastro Checklist</a></li>
                            <li class="iten-submenu"><a href="cadastro_item.php" id="fonte-submenu">Cadastro de Perguntas</a></li>
                            <li class="iten-submenu"><a href="cadastro_usuario.php" id="fonte-submenu">Cadastro de Usuario</a></li>                        
                        </ul>

                </li>         


                <li class="saida">
                    <button class="btnOpenmodal-menu" onclick="openModal()" >  
                        <a href="" class="link-menu">
                            <i class="bi bi-box-arrow-left" style="--i:7"></i>
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
          submenu2.classList.remove('active');
          btn_submenu.setAttribute('onclick', 'openSubmenu()');
          btn_submenu2.setAttribute('onclick', 'openSubmenu2()');
          closeModal()
        })


        const modal = document.querySelector('.modal-container-menu')
const submenu = document.querySelector('.sub-menu')
const submenu2 = document.querySelector('.sub-menu2')
const btn_submenu = document.getElementById('btnsubmenu')
const btn_submenu2 = document.getElementById('btnsubmenu2')


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

function openSubmenu2(){
  submenu2.classList.add('active')
  btn_submenu2.setAttribute('onclick', 'closeSubmenu2()')
} 

function closeSubmenu2(){
  submenu2.classList.remove('active')
  btn_submenu2.setAttribute('onclick', 'openSubmenu2()')

}
    </script>       
</body>
</html>