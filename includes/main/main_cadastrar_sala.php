
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
<script src="https://code.jquery.com/jquery-3.7.0.js"integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="../assets/css/cadastrar_editar_sala.css"> 
<!-- <link rel="stylesheet" href="../../assets/css/pop_ups/pop-up-verification.css"> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php

    include_once("../includes/modais/modal_salas.php");
    

?>
<body class="tela-cadastro-salas">



    <!-- <div class="container-pop-up-notificacao">
        <div class="popup-notificacao" id="popup-up-notificacao">
            <div class="div-img">
                <img src="../includes/pop-ups/img/Check_ring.png" alt="carregando" id="img_check">
                <p>Alteração Salva Com Sucesso! </p>
            </div>
            <div class="botao-padrao-ok">
                <script>
                    function closePopupValidar() {
                                    let popup = document.getElementById("popup-up-notificacao");
                                    let btn = document.getElementById("submit-btn-notificacao");

                                    // btn.style.display = "block";

                                    popup.classList.remove("open-popup");
                                }
                </script>
                <a href="listar_salas.php"><input type="submit" class="botao-ok-submit" onclick="closePopupValidar()" value="OK"></a>
            </div>
        </div>
    </div> -->
      

    <section class="container">
   
        <div class="container-cadastro-salas">
            <div class="wrap-cadastro-salas">

                <form class="cadastro-sala-form" id="form_cad" method="POST" enctype="multipart/form-data">

                    

                    <div class="titulo_de_cadastro">

                        <h1> Cadastro De Salas </h1>
                        
                    </div>
                    
                    <div class="cadastro_codigo">

                        <div class="wrap-input margin-top-35 margin-bottom-35">



                            <div class="input_group field" id="input_coisa_nome">
                                <input type="input" class="input_field toguroo" id='nome_sala' placeholder="Name" required="" name="nome_sala" maxLength="32">
                                <label for="name" class="input_label">Nome Da Sala </label> <!--Alterar para o nome do input-->
                            </div>



                        </div>


                        <div class="wrap-inputx margin-top-35 margin-bottomx-35">



                            <div class="input_group field ">
                                <input type="input" class="input_field toguro" placeholder="Name" required="" id="codigo_sala" name="codigo_sala" maxLength="8" style="text-transform:uppercase" />
                                <label for="name" class="input_label toguro" > Código </label> <!--Alterar para o nome do input-->
                            </div>



                        </div>

                    </div>     

                    
                    <div class="dropdown-ck">

                        <select name="checklist" class="option" id="checklist">

                            <option>Selecione O Checklist </option>

                                <?=$options?>
                            
                        </select> 
                        
    
                        <a href="cadastrar_checklist.php" style="color: black;">
                            <i class="bi bi-plus-circle " style="font-size: 30px; opacity: 0.7;"></i>
                        </a>
                        
                    </div>

                    <div class="barra"></div>

                    <h3 class="alinar_titulo_h3">Dias De Funcionamento </h3>

                    <div class="area_Dos_check_box">

                        <div class="Check_Box_individual">
                            <p class="coisa_tag_p">Segunda</p>
                            <input name="segunda" class="espaco_check_box" type="checkbox" />
                        </div>
                        <div class="Check_Box_individual">
                            <p class="coisa_tag_p">Terça</p>
                            <input name="terca" class="espaco_check_box" type="checkbox" />
                        </div>

                        <div class="Check_Box_individual">
                            <p class="coisa_tag_p">Quarta</p>
                            <input name="quarta" class="espaco_check_box" type="checkbox" />
                        </div>

                        <div class="Check_Box_individual">
                            <p class="coisa_tag_p">Quinta</p>
                            <input name="quinta" class="espaco_check_box" type="checkbox" />
                        </div>

                        <div class="Check_Box_individual">
                            <p class="coisa_tag_p">Sexta</p>
                            <input name="sexta" class="espaco_check_box" type="checkbox" />
                        </div>

                        <div class="Check_Box_individual">
                            <p class="coisa_tag_p">Sábado</p>
                            <input name="sabado" class="espaco_check_box" type="checkbox" />
                        </div>

                        
                    </div>


                    <h3 class="alinar_titulo_h3">Turnos De Funcionamento </h3>
                    <div class="area_Dos_check_box">

                        
                        
                        <div class="Check_Box_individual">
                            <p class="coisa_tag_p">Matutino</p>
                            <input name="matutino" class="espaco_check_box" type="checkbox" />
                        </div>

                        <div class="Check_Box_individual">
                            <p class="coisa_tag_p">Vespertino</p>
                            <input name="vespertino" class="espaco_check_box" type="checkbox" />
                        </div>

                        <div class="Check_Box_individual">
                            <p class="coisa_tag_p">Noturno</p>
                            <input name="noturno" class="espaco_check_box" type="checkbox" />
                        </div>

                    </div>
                    
                    <div class="img-area"> 
                        
                        <div class="text-area">
                            <span id=descrição>Descrição</span>
    
                            <textarea  placeholder="Area de texto " name="descricao_sala" id="" cols="70" rows="10" class="text-descricao" maxLength="254"></textarea>
                        </div>
                        <div class="cor-sala">
                            <div class="alinar-img">

                                <div class="coisas_enilda">
                                    <span id="img-text"> Insira a imagem : Resolução 416x150 </span>

                                    <label id="botão-img" for="arquivo" >Selecionar Foto</label>
                                </div>

                                
                                
                                <input type="file" name="img_sala" id="arquivo" >

                                <div class="area-anexo">

                                    
                                    <img id="camera_imagem" class="imagem_aparecer" src="../assets/imgs/others/camera.png" alt="">

                                    <img  id="imagem_agora_vai" class="novo_css_imagem" src="" alt="">

                                </div>
                            </div>    
                            <div class="alinar-botao-cor">
                                <span id="selecao-cor-text">Cor da sala : </span> 
                                <input class="botao-cor" name="cor_sala" type="color">
                            </div>
                        </div>
      
                        
                            
                                                                                                           
                    </div>
                    
                    <div class="alinar-botoes">

                              <!--Botão voltar-->
                        <div class="botao-padrao-voltar">
                            <a href="listar_salas.php" class="botao-voltar-link">VOLTAR</a>
                        </div>
   
                        
                        <div class="botao-padrao-cadastrar">
                            <!-- <a><input name="btn_submit" type="submit" class="botao-cadastrar-submit" id="botao-cadastrar-submit" value="CADASTRAR"></a> -->

                            <button name="btn_submit" type="submit" class="botao-cadastrar-submit" id="botao-cadastrar-submit" value="CADASTRAR"> CADASTRAR </button>

                        </div>
                            <!-- onclick="abrir_modal()" -->


                    </div>  

                    <!-- <div class="container-pop-up-notificacao">
                        <button type="submit" class="btn-pop-up-notificacao" id="submit-btn-notificacao" onclick="openPopupValidar()">Submit</button>
                        <div class="popup-notificacao" id="popup-up-notificacao">
                            <div class="div-img">
                                <img src="img/erro.png" alt="carregando" id="img_check">
                                <p>Recado excluído com sucesso! </p>
                            </div>
                            <div class="botao-padrao-ok">
                                <a href="#"><input type="submit" class="botao-ok-submit" onclick="closePopupValidar()" value="OK"></a>
                            </div>
                        </div>
                    </div> -->

                    <script>

                        let button = document.getElementById("botao-cadastrar-submit") 

                        const showModalnovoBtn = document.querySelector('.botao-cadastrar-submit');
                        const closeModalnovoBtn = document.querySelector('.close-btn');
                        // const openModalBtn = document.querySelector('.open-btn');
                        const overlaynovo = document.querySelector('.overlay-modal');
                        const modalnovo = document.querySelector('.modal-box');
                        function openModal2() {
                            console.log("qual quer coisa ai");
                            overlaynovo.style.opacity = '1';
                            overlaynovo.style.pointerEvents = 'auto';
                            modalnovo.style.opacity = '1';
                            modalnovo.style.pointerEvents = 'auto';
                    }

                        button.addEventListener('click', async (e) => {
                            // alert("dsadsa")
                            e.preventDefault()


                            let nome_sala = document.getElementById('nome_sala')
                            if(nome_sala.value.length > 0){

                                // const Toast = Swal.mixin({
                                // toast: true,
                                // position: "top-end",
                                // showConfirmButton: false,
                                // timer: 3000,
                                // timerProgressBar: true,
                                // didOpen: (toast) => {
                                // toast.onmouseenter = Swal.stopTimer;
                                // toast.onmouseleave = Swal.resumeTimer;
                                // }
                                // });
                                // Toast.fire({
                                //     icon: "success",
                                //     title: "deu bom"
                                // });

                                console.log("Nome sala maior q zero");

                                nome_sala = true ;


                            }else{

                                const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                                }
                                });
                                Toast.fire({
                                    icon: "error",
                                    title: "Nome da sala não pode estar vazio !"
                                });

                            }

                            let codigo_sala = document.getElementById('codigo_sala')
                            if(codigo_sala.value.length > 0){

                                // const Toast = Swal.mixin({
                                // toast: true,
                                // position: "top-end",
                                // showConfirmButton: false,
                                // timer: 3000,
                                // timerProgressBar: true,
                                // didOpen: (toast) => {
                                // toast.onmouseenter = Swal.stopTimer;
                                // toast.onmouseleave = Swal.resumeTimer;
                                // }
                                // });
                                // Toast.fire({
                                //     icon: "success",
                                //     title: "deu bom"
                                // });
                                console.log("codigo sala maior q zero");    
                                
                                codigo_sala = true;

                            }else{

                                const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                                }
                                });
                                Toast.fire({
                                    icon: "error",
                                    title: "Codigo não pode estar vazio !"
                                });

                            }

                            let checklist = document.getElementById('checklist')

                            console.log(checklist.value);

                            if(checklist.value > 0){

                                // const Toast = Swal.mixin({
                                // toast: true,
                                // position: "top-end",
                                // showConfirmButton: false,
                                // timer: 3000,
                                // timerProgressBar: true,
                                // didOpen: (toast) => {
                                // toast.onmouseenter = Swal.stopTimer;
                                // toast.onmouseleave = Swal.resumeTimer;
                                // }
                                // });
                                // Toast.fire({
                                //     icon: "success",
                                //     title: "deu bom"
                                // });
                                
                                console.log("checklist maior q zero");

                                checklist = true ;


                            }else{

                                const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                                }
                                });
                                Toast.fire({
                                    icon: "error",
                                    title: "Selecione Um checklist !"
                                });
                                console.log("checklist vazio");    
                            }

                            console.log(nome_sala,codigo_sala,checklist)
                                
                            if(nome_sala == true && codigo_sala == true && checklist == true){

                                let form = document.getElementById('form_cad')
                                console.log(form)

                                let formData = new FormData(form)
                                // console.log(formData)

                                let dados_php = await fetch("../pages/actions/abrir_modal_cadastrar_sala.php",{method:"POST",
                                    body: formData
                                })
                                
                                // alert("Ta chegando até aqui !")
                                let response = await dados_php.json()
                                
                                // console.log(response);

                            
                                // console.log(response);

                                if(response){
                                    
                                    // let popup = document.getElementById('popup-up-notificacao');
                                    // let btn = document.getElementById("submit-btn-notificacao");
                                    // // btn.style.display = "none";
                                    // popup.classList.add("open-popup");
                                    // let blur = document.getElementById("blur");
                                    // blur.classList.add("active");

                                    
                                    openModal2()
                                

                                }else{
                                    console.log("2")
                                }

                            }else{
                                console.log("deu merda piá");
                            }  
                        }
                        )
                    

                        // function openPopupValidar() {
                        //     let popup = document.getElementById('popup-up-notificacao');
                        //     let btn = document.getElementById("submit-btn-notificacao");

                        //     btn.style.display = "none";
                        //     popup.classList.add("open-popup");
                        // }

                        // function closePopupValidar() {
                        //     let popup = document.getElementById("popup-up-notificacao");
                        //     let btn = document.getElementById("submit-btn-notificacao");

                        //     btn.style.display = "block";

                        //     popup.classList.remove("open-popup");
                        // }



                    </script>
                
                    
                </form>  
            </div>
        </div>
    </section>


<script>




const remover = document.querySelector(".imagem_aparecer");
const novo_css = document.querySelector(".novo_css_imagem");
$(document).ready(function() {
    $('#arquivo').on('change', function(e) {
        var file = e.target.files[0];
        var reader = new FileReader();
        reader.onload = function(e) {
            var fileExtension = file.name.split('.').pop().toLowerCase();
            var aceitados = ['jpg', 'jpeg', 'gif', 'png','jfif'];
            if (aceitados.includes(fileExtension)) {
                $('#imagem_agora_vai').attr('src', e.target.result);
                remover.classList.add("active");
                novo_css.classList.add("active");
            } else {
                // Caso a extensão do arquivo não seja suportada, você pode adicionar um comportamento específico aqui, como exibir uma mensagem de erro.
                console.log('Extensão de arquivo não suportada.');
            }
        }
        reader.readAsDataURL(file);
    });
});





        function abrir_modal(){
            Swal.fire({
                title: 'Cadastrado com sucesso!', //TITULO DO POP_UP DE ACORDO COM SUA TELA 
                icon: 'success', // success, error e warning
                confirmButtonColor: '#609437', // DEFINE A COR DO BOTÃO OK
                confirmButtonText: 'OK'
            });
        }
    
</script>


    
</body>
</html>