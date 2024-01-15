<!-- <link rel="stylesheet" href="https/cdnjs.cloudflare.comlibs/font-awesome/6.4.0/css/all.min.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
<link rel="stylesheet" href="../assets/css/cadastrar_editar_sala.css"> 
<script src="https://code.jquery.com/jquery-3.7.0.js"integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body class="tela-cadastro-salas"> 

<?php

    include_once("../includes/modais/modal_editar_sala.php");
            
?>


<div class="container-pop-up-notificacao">
        <!-- <button type="submit" class="btn-pop-up-notificacao" id="submit-btn-notificacao" onclick="openPopupValidar()">Submit</button> -->
        <!-- <div class="popup-notificacao" id="popup-up-notificacao">
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
        </div> -->

        
    </div>
    <section class="container">
        
        <div class="container-cadastro-salas">

            
            
            <div class="wrap-cadastro-salas">

                <form class="cadastro-sala-form" method="POST" id="form_cad" enctype="multipart/form-data">
                    <div class="titulo_de_cadastro">

                        <h1> Editar Sala </h1>
                        
                    </div>
                    



                    <div class="cadastro_codigo">


                        <div class="wrap-input margin-top-35 margin-bottom-35">


 
                            <div class="input_group field">
                                <input value="<?=$dados_sala[0]['nome']?>" type="input" class="input_field toguroo" placeholder="Name" required="" name="nome" maxLength="32" id='nome_sala'>
                                <label for="name" class="input_label">Nome Da Sala</label> <!--Alterar para o nome do input-->
                            </div>



                        </div>

                        <div class="wrap-inputx margin-top-35 margin-bottomx-35">



                            <div class="input_group field ">
                                <input type="input" value="<?=$dados_sala[0]['codigo']?>" class="input_field toguro" placeholder="Name" required="" name="codigo" maxLength="8"  id="codigo_sala" >
                                <label for="name" class="input_label toguro" > Código </label> <!--Alterar para o nome do input-->
                            </div>



                        </div>
                    </div>
                    
                    <div class="dropdown-ck">

                        <select name="checklist" class="option" id="checklist">
                        <?php
                                foreach ($checklists as $id => $nome)
                                {
                                    if ($id == $dados_sala[0]['id_check'])
                                    {
                                        echo "<option name=\"checklist\" value='$id' selected>$nome</option>";
                                    }
                                    else
                                    {
                                        echo "<option name=\"checklist\" value='$id'>$nome</option>";
                                    }
                                }
                            ?>
                        </select> 

                    </div>

                        <div class="barra"></div>



                    
                        <h3 class="alinar_titulo_h3">Dias De Funcionamento </h3>

                        <div class="area_Dos_check_box">
                            
                            <div class="Check_Box_individual">
                                <p class="coisa_tag_p">Segunda</p>
                                <input name="segunda" class="espaco_check_box" type="checkbox" <?=($funcionamento['segunda'] == 'sim' ? 'checked' : NULL)?>/>
                            </div>

                            <div class="Check_Box_individual">
                                <p class="coisa_tag_p">Terça</p>
                                <input name="terca" class="espaco_check_box" type="checkbox" <?=($funcionamento['terca'] == 'sim' ? 'checked' : NULL)?>/>
                            </div>

                            <div class="Check_Box_individual">
                                <p class="coisa_tag_p">Quarta</p>
                                <input name="quarta" class="espaco_check_box" type="checkbox" <?=($funcionamento['quarta'] == 'sim' ? 'checked' : NULL)?>/>
                            </div>

                            <div class="Check_Box_individual">
                                <p class="coisa_tag_p">Quinta</p>
                                <input name="quinta" class="espaco_check_box" type="checkbox" <?=($funcionamento['quinta'] == 'sim' ? 'checked' : NULL)?>/>
                            </div>

                            <div class="Check_Box_individual">
                                <p class="coisa_tag_p">Sexta</p>
                                <input name="sexta" class="espaco_check_box" type="checkbox" <?=($funcionamento['sexta'] == 'sim' ? 'checked' : NULL)?>/>
                            </div>

                            <div class="Check_Box_individual">
                                <p class="coisa_tag_p">Sábado</p>
                                <input name="sabado" class="espaco_check_box" type="checkbox" <?=($funcionamento['sabado'] == 'sim' ? 'checked' : NULL)?>/>
                            </div>

                            
                        </div>


                        <h3 class="alinar_titulo_h3">Turnos De Funcionamento </h3>
                        <div class="area_Dos_check_box">

                            
                            
                            <div class="Check_Box_individual">
                                <p class="coisa_tag_p">Matutino</p>
                                <input name="matutino" class="espaco_check_box" type="checkbox" <?=($funcionamento['turnos']['matutino'] == 'sim' ? 'checked' : NULL)?>/>
                            </div>

                            <div class="Check_Box_individual">
                                <p class="coisa_tag_p">Vespertino</p>
                                <input name="vespertino" class="espaco_check_box" type="checkbox" <?=($funcionamento['turnos']['vespertino'] == 'sim' ? 'checked' : NULL)?>/>
                            </div>

                            <div class="Check_Box_individual">
                                <p class="coisa_tag_p">Noturno</p>
                                <input name="noturno" class="espaco_check_box" type="checkbox" <?=($funcionamento['turnos']['noturno'] == 'sim' ? 'checked' : NULL)?>/>
                            </div>

                        </div>
                        
                
                       

                    
                    <div class="img-area"> 
                        



                        <div class="text-area">
                            <span id=descrição>Descrição</span>

                            <textarea placeholder="Area de texto " name="descricao" id="textareajs" cols="70" rows="10" class="text-descricao" maxlength="254"><?=$dados_sala[0]['descricao']?></textarea>
                        </div>
                        <div class="cor-sala">
                            <div class="alinar-img">

                                <div class="coisas_enilda">
                                    <span id="img-text"> Insira a imagem : </span>
                                    <label id="botão-img" for="arquivo" >Selecionar Foto</label>
                                </div>
                                
                                
                                <input type="file" name="img_sala" id="arquivo">
                                <div class="area-anexo">
                                    <img id="camera_imagem" class="imagem_aparecer_editar" src="../storage/salas/<?=$dados_sala[0]['img_sala']?>" alt="">
                                    <img  id="imagem_agora_vai" class="novo_css_imagem" src="" alt="">
                                </div>
                                
                            </div>    
                            <div class="alinar-botao-cor">
                                <span id="selecao-cor-text">Cor da sala : </span> 
                                <input value="<?=$dados_sala[0]['cor_itens']?>" class="botao-cor" name="cor_itens" type="color">
                                
                                <p class="texto_Status">Ativado/Desativado:</p>
                                <label class="switch" for="">
                                <input type="checkbox" name="status" <?php echo $dados_sala[0]['status']== "L" ? "checked" : "";?>>

                                <span class="check"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="alinar-botoes">

                        <div class="botao-padrao-voltar">
                            <a href="listar_salas.php" class="botao-voltar-link">VOLTAR</a>
                        </div>

                        <div class="botao-padrao-cadastrar">        
                            <button name="btn_submit" type="submit" class="botao-cadastrar-submit" id="botao-cadastrar-submit" value="SALVAR"> Salvar </button>
                        </div>
                    </div>
                


                              
                </form>  

                <script>

                        let button = document.getElementById("botao-cadastrar-submit") 

                        button.addEventListener('click', async (e) => {
                            // alert("dsadsa")
                            e.preventDefault()


                            let nome_sala = document.getElementById('nome_sala')
                            
                            if(nome_sala.value.length > 0){

                                // console.log("Nome sala maior q zero");

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
                                // console.log("codigo sala maior q zero");    
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

                            // console.log(checklist.value);

                            if(checklist.value > 0){
                                
                                // console.log("checklist maior q zero");

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
                                // console.log("checklist vazio");    
                            }

                            // console.log(nome_sala,codigo_sala,checklist)
                                
                            if(nome_sala == true && codigo_sala == true && checklist == true){

                                let form = document.getElementById('form_cad')
                                // console.log(form)

                                let formData = new FormData(form)
                                // console.log(formData)

                                let dados_php = await fetch("../pages/actions/abrir_modal_editar_sala.php?id_sala=<?=$_GET['id_sala']?>",{method:"POST",
                                    body: formData
                                })
                                
                                // alert("Ta chegando até aqui !")
                                let response = await dados_php.json()
                                
                                console.log(response);

                                if(response){
                                    
                                    let popup = document.getElementById('popup-up-notificacao');
                                    let btn = document.getElementById("submit-btn-notificacao");

                                    // btn.style.display = "none";
                                    
                                    popup.classList.add("open-popup");

                                    // let blur = document.getElementById("blur");

                                    // blur.classList.add("active");

                                

                                }else{
                                    console.log("2")
                                }

                            }else{
                                console.log("deu merda piá");
                            }  
                        }
                        )
                </script>                  
            </div>
        </div>
    </section>
    <script>
        const remover = document.querySelector(".imagem_aparecer_editar");
        const novo_css = document.querySelector(".novo_css_imagem");
        $(document).ready(function() {
            // Suponha que 'caminho_da_imagem' contenha o caminho da imagem que você deseja definir
            var caminho_da_imagem = $('.imagem_aparecer_editar').prop('src');
            
            // Crie um novo objeto Image
            var imagem = new Image();
            
            // Defina o caminho da imagem
            imagem.src = caminho_da_imagem;
            
            // Certifique-se de que a imagem foi completamente carregada antes de manipulá-la
            imagem.onload = function()
            {
                // console.log(caminho_da_imagem);
                // Adicione a imagem a um elemento HTML com o ID 'imagem_agora_vai'
                // document.getElementById('imagem_agora_vai').src = imagem.src;
                $('#imagem_agora_vai').attr('src', imagem.src);

                // Adicione as classes 'active' aos elementos desejados
                remover.classList.add("active");
                novo_css.classList.add("active");
            };

            $('#arquivo').on('change', function(e) {
                var file = e.target.files[0];
                console.log(file);
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

    </script>
    
</body>


</html>