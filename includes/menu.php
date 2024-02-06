<?php

if(!isset($_SESSION['id_user'])){
    header('Location: ../');
}


ob_start();
require __DIR__."/../vendor/autoload.php";
include_once("../includes/menu.php");
require("../includes/header/header.php");

//REGRAS DE NEGOCIO ABAIXO 
 

use App\Entity\Usuario;
 
$objUsuario = new Usuario();
$logado = false;
$erro = false;

$dados = $objUsuario->getDadosById($_SESSION['id_user']); 
$perfil = ($objUsuario->getDadosPerfil($_SESSION['id_user']))[0];


$ifperfil = $perfil['gerenciar_perfis'] == '1';
$ifuser = $perfil['gerenciar_usuarios'] == '1';
$ifgensala = $perfil['gerenciar_salas'] == '1';
$ifgencheck = $perfil['gerenciar_checklist'] == '1';
$ifgenperg = $perfil['gerenciar_perguntas'] == '1';
$ifgennot = $perfil['gerenciar_notificacoes'] == '1';
$ifgenrec = $perfil['gerenciar_recados'] == '1';
$ifreacheck = $perfil['realizar_checklist'] == '1';
$ifreaac = $perfil['realizar_acao_corretiva'] == '1';
 
?>


<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="https/cdnjs.cloudflare.comlibs/font-awesome/6.4.0/css/all.min.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

<link rel="stylesheet" href="../assets/css/menu/menu.css">
<body> 

    <div class="cabecalho-menu">
        <div class="container-menu">
            <a  class="toggleBox-menu">
              <span class="icon-menu"></span>
            </a>

            <ul class="navItems-menu">

                <li class="parte-perfil">
                    <a href="../pages/editar_usuario.php" id="teste" class="link-menu">                           
                        <img src="../assets/imgs/users/<?=$dados[0]["foto"]?>" class="icon-perfil" style="--i:2" alt="...">                    
                        <h5 class="titulo-nome"><?=substr($dados[0]["nome"], 0, 10)?></h5>
                    </a>
                </li>
    
                
                <li class="li-menu">
                    <a href="../pages/listar_recados.php" class="link-menu">
                        <i id="icon-casa" class="bi bi-house-door"  style="--i:1"></i>   
                        <h5 class="titulo-info" id="titulo-home" style="--i:1">Home</h5>                 
                    </a>
                </li>  

     
                <li class="link_submenu2">
                    <?php 
                        echo '
                        <li class="li-menu">
                            <a href="#" class="link-menu">
                            <i id="icon-pessoa" class="bi bi-person" style="--i:2"></i>
                            <h5 class="titulo-info" id="titulo-perf" style="--i:2">Usuários</h5>                    
                            </a>
                            
                            <ul class="submenu2" id="submenu-icon-pessoa">
                            
                            <li class="iten-submenu2"><a href="../pages/visualizar_usuario.php" id="fonte-submenu2">Gerenciar Usuario</a></li>
                            '.
                            ($ifperfil ? '<li class="iten-submenu2"><a href="../pages/listar_perfis.php" id="fonte-submenu2">Gerenciar Perfis</a></li><li class="iten-submenu2"><a href="../pages/cadastrar_perfil.php" id="fonte-submenu2">Cadastrar Perfil</a></li>' : '').
                            ($ifuser ? '<li class="iten-submenu2"><a href="../pages/cadastrar_usuario.php" id="fonte-submenu2">Cadastrar Usuário</a></li>' : '')
                            
                            .'
                            <li class="iten-submenu2"><a href="../pages/editar_usuario.php" id="fonte-submenu2">Minha Conta</a></li>
                            </ul>
                            </li>';
                    ?>
                </li>
                
                <li class="link_submenu3">
                    <li class="li-menu">
                        <a href="#" class="link-menu">
                            <i id="btnsubmenu3" class="bi bi-clipboard2-check" onclick="openSubmenu3()"></i>   
                            <h5 class="titulo-info" id="titulo-home">Check-List</h5>                 
                        </a>
                        <ul class="sub-menu3">
                            <?php
                            echo '<li class="iten-submenu3"><a href="gerenciar_checklist.php" id="fonte-submenu3">Vizualizar Check-List</a></li>';
                            echo '<li class="iten-submenu3"><a href="listar_checklist_concluidas.php" id="fonte-submenu3">Validar Check-List</a></li>';
                            echo '<li class="iten-submenu3"><a href="cadastrar_checklist.php" id="fonte-submenu3">Cadastrar Check-List</a></li>';
                            ?>
                        </ul>
                    </li>
                </li>


                <li class="li-menu">
                    
                    <a href="../pages/listar_notificacoes.php" class="link-menu">
                        <i id="icon-notificacao" class="bi bi-bell"  style="--i:3"></i>  
                        <h5 class="titulo-info" id="titulo-noti" style="--i:3">Notificações</h5>              
                    </a>
                </li>   
                
                <li class="li-menu">

                    <a href="listar_salas.php" class="link-menu">
                        <i id="icon-vizualizar" class="bi bi-person-video3"  style="--i:4"></i>     
                        <h5 class="titulo-info" id="titulo-not" style="--i:4">Salas</h5>              
                    </a>  
                </li>      
                
                
                <li class="link_submenu"> 
                    <?php
                        if($ifgensala || $ifgencheck || $ifgenperg || $ifgennot || $ifuser || $ifperfil){
                           echo '
                        <li class="li-menu">   
                            <a href="#" class="link-menu">
                                <i class="bi bi-list-check" id="btnsubmenu" onclick="openSubmenu()" style="--i:5"></i>
                                <h5 class="titulo-info" id="titulo-cad" style="--i:5">Cadastros</h5>
                            </a>
                           
                            <ul class="sub-menu">
                            '.
                            ($ifgensala ? '<li class="iten-submenu"><a href="../pages/cadastrar_sala.php" id="fonte-submenu">Cadastrar  Salas</a></li>' : '').
                            ($ifgenperg ? '<li class="iten-submenu"><a href="../pages/cadastrar_pergunta.php" id="fonte-submenu">Cadastrar  Perguntas</a></li>' : '').
                            ($ifgencheck ? '<li class="iten-submenu"><a href="../pages/cadastrar_checklist.php" id="fonte-submenu">Cadastrar Checklist</a></li>' : '').
                            ($ifgennot ? '<li class="iten-submenu"><a href="../pages/cadastrar_notificacao.php" id="fonte-submenu">Cadastrar  Notificações</a></li>' : '').
                            ($ifuser ? '<li class="iten-submenu"><a href="../pages/cadastrar_usuario.php" id="fonte-submenu2">Cadastrar  Usuário</a></li>' : '').
                            ($ifperfil ? '<li class="iten-submenu"><a href="../pages/cadastrar_perfil.php" id="fonte-submenu2">Cadastrar  Perfil</a></li>' : '')
                            .'
                            </ul>
                        </li> ';
                        }
                    ?>
                    <!-- <li class="li-menu">   
                        <a href="#" class="link-menu">
                            <i class="bi bi-list-check" id="btnsubmenu" onclick="openSubmenu()" style="--i:5"></i>
                            <h5 class="titulo-info" id="titulo-cad" style="--i:5">Cadastros</h5>
                        </a>
                        
                        <ul class="sub-menu">            
                        <li class="iten-submenu"><a href="../pages/cadastrar_sala.php" id="fonte-submenu">Cadastro de Salas</a></li>
                            <li class="iten-submenu"><a href="../pages/cadastrar_checklist.php" id="fonte-submenu">Cadastro Checklist</a></li>
                            <li class="iten-submenu"><a href="../pages/cadastrar_pergunta.php" id="fonte-submenu">Cadastro de Perguntas</a></li>                       
                            <li class="iten-submenu"><a href="../pages/cadastrar_notificacao.php" id="fonte-submenu">Cadastro de Notificações</a></li> 
                            <li class="iten-submenu"><a href="../pages/cadastrar_usuario.php" id="fonte-submenu2">Cadastro de Usuário</a></li> 
                            <li class="iten-submenu"><a href="../pages/cadastrar_perfil.php" id="fonte-submenu2">Cadastro de Perfil</a></li> 
                            <li class="iten-submenu"><a href="../pages/cadastrar_pergunta.php" id="fonte-submenu">Cadastro de Perguntas</a></li>  
                            <li class="iten-submenu"><a href="../pages/cadastrar_notificacao.php" id="fonte-submenu">Cadastro de Notificações</a></li>                      

                        </ul>
                    </li>  -->
                </li>         


                <li class="saida">
                    <button class="btnOpenmodal-menu" onclick="openModal()">  
                        <a href="actions/sair.php" class="link-menu">
                            <i class="bi bi-box-arrow-left" style="--i:6"></i>
                            <h5 class="titulo-info" onclick="openModal()" id="titulo-sair" style="--i:6">Sair</h5>
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
        <!-- <script src="js.js"></script>     -->
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

// ================================================  JAVA SCRIPT DO SUB-MENU DE CADASTRO/MENU ==============================================================
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
const submenu3 = document.querySelector('.sub-menu3')
const btn_submenu3 = document.getElementById('btnsubmenu3')


function openModal() {
  modal.classList.add('active')
     
}

function closeModal(valor) {

  if(valor == 1){

    window.location.href = "./actions/sair.php";

  }

  modal.classList.remove('active')

}

function openSubmenu(){
  submenu.classList.add('active')
  btn_submenu.setAttribute('onclick', 'closeSubmenu()')
}

function openSubmenu3(){
  submenu3.classList.add('active')
  btn_submenu3.setAttribute('onclick', 'closeSubmenu3()')
}

function closeSubmenu(){
  submenu.classList.remove('active')
  btn_submenu.setAttribute('onclick', 'openSubmenu()')
}

function closeSubmenu3(){
  submenu3.classList.remove('active')
  btn_submenu3.setAttribute('onclick', 'openSubmenu3()')

}

document.addEventListener("click", function(event) {
    // Fechar o submenu quando clicar fora dele
    // if (!submenu.contains(event.target) && !btn_submenu.contains(event.target)) {
    //     closeSubmenu();
    // }

    if (!submenu3.contains(event.target) && !btn_submenu3.contains(event.target)) {
        closeSubmenu3();
    }

    // Fechar a modal quando clicar fora dela
    if (!modal.contains(event.target) && event.target !== document.querySelector('button[onclick="openModal()"]')) {
        closeModal(0);
    }

    // Fechar o menu quando clicar fora dele
    if (!container.contains(event.target) && !toggleClick.contains(event.target)) {
        toggleClick.classList.remove("active");
        container.classList.remove("active");
        // submenu.classList.remove('active');
        // btn_submenu.setAttribute('onclick', 'openSubmenu()');
        closeModal();
    }
});

// ================================================  JAVA SCRIPT DO SUB-MENU DOS PERFIS  ==============================================================

document.addEventListener("DOMContentLoaded", function() {
        const submenuIconPessoa = document.getElementById("submenu-icon-pessoa");

        function toggleSubmenu(submenu) {
            submenu.classList.toggle("active");
        }

        document.getElementById("icon-pessoa").addEventListener("click", function(event) {
            event.preventDefault();
            toggleSubmenu(submenuIconPessoa);
        });

        document.addEventListener("click", function(event) {
            if (!submenuIconPessoa.contains(event.target) && !document.getElementById("icon-pessoa").contains(event.target)) {
                submenuIconPessoa.classList.remove("active");
            }

        }); 
    });

    </script>       
</body>


<?php

// ob_end_flush();

?>

