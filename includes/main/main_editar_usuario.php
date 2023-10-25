<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
<link rel="stylesheet" href="../assets/css/editar_usuario/botao_editar_usuario.css">
<link rel="stylesheet" href="../assets/css/editar_usuario/editar_usuario.css">
<link rel="stylesheet" href="../assets/css/editar_senha/input_button_editar_senha.css">
<link rel="stylesheet" href="../assets/css/editar_senha/editar_senha.css">

<body class="pai-de-todos1">


    <main class="pai-de-todos">
        <div  class="form-minha-conta">
            <section class="titulo">
                <h1 class="titulo-perfil">Minha Conta</h1>
            </section>

            <section class="quadrado-perfil">
                <div class="foto-perfil">
                    <i class="bi bi-person-circle"></i>
                </div>
            </section>
            
            <div class="icon-edit">
                <i class="bi bi-pencil-square"></i>
            </div>
            
            <section class="name">
                <h2 class="name-name">Nome</h2>
            </section>

            <form method="POST" class="alinhar-input">
                
                <div class="input_group field">
                    <input type="input" class="input_field" id="input_name_cad" placeholder="Name" required="" name="nome" value="<?=$dados["nome"]?>" maxLength="105">
                    <label for="name" class="input_label"></label><!--Alterar para o nome do input-->
                    <i class="bi bi-pencil-square" onclick="habilitar()" id="icon-input"></i>
                </div>

                <div class="area_btn_alterar_nome" id="area_btn_alterar_nome">

                    <input type="submit" name="btn_alterar_nome" value="Alterar Nome">

                </div>
                
            </form>

            <section class="editar_senha">
                    <section class='titulo_alterar_senha'>
                    <h1>Alterar Senha</h1>
                </section>

                <form method="POST" class="centralizar-back"> 
                    <section class="centralizar_input_alterar_senha">

                        
                       
                        <div class="input_senha_group field">
                            <input name="senhaantiga" type="password" class="input_senha_field" placeholder="Name" required="">
                            <label for="name" class="input_senha_label">Senha antiga</label> <!--Alterar para o nome do input-->
                        </div>

                        <div class="input_senha_group field2">
                            <input name="novasenha" type="password" class="input_senha_field" placeholder="Name" required="">
                            <label for="name" class="input_senha_label">Criar nova senha</label> <!--Alterar para o nome do input-->
                        </div>

                        <div class="input_senha_group field3">
                            <input name="confirmarnovasenha" type="password" class="input_senha_field" placeholder="Name" required="">
                            <label for="name" class="input_senha_label">Confirmar nova senha</label> <!--Alterar para o nome do input-->
                        </div>
                    </section>

                

                    <section class="centralizar_botoes_alterar_senha">

                            <!--Botão Voltar-->
                        <div class="botao-padrao-voltar">
                            <input type="reset" class="botao-voltar-submit"  value="VOLTAR">
                        </div>

                            <!--Botão Confirmar-->
                        <div class="botao-padrao-confirmar">
                            <input name="btn_submit" type="submit" id="btn_submit" class="botao-confirmar-submit"  value="CONFIRMAR">
                        </div>

                    </section>
                </form>   
            </section>

        </div>

    </main>
    <script>


    var nome = document.querySelector("#input_name_cad");
    var area_btn_cad_user = document.getElementById("area_btn_alterar_nome")

    nome.disabled = true


    area_btn_cad_user.addEventListener('click',teste)

    async function teste(){
        area_btn_cad_user.preventDefault(); 
        setTimeout(function(){
            alert(241321    )
            window.reload();
 
        },3000)
    }

    function habilitar(){
        console.log(nome)
        nome.disabled = false;
        nome.classList.add("active")
        area_btn_cad_user.classList.add("active")

    }


    // btn_submit =document.getElementById("btn_submit")

    // btn_submit.addEventListener("click", async (e) =>{
        
    //     const dados = new FormData(f1);
    //     e.preventDefault(); 
    //     // etapa 1: validando cpf
    //     const dados_php = await fetch("./actions/validar_cpf.php", {
    
    //         method: 'POST',
    //         body: dados
    //     } )
    
    //     const resposta = await dados_php.json();

    </script>
    
</body>
