<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

<title>Visualizar Usuários</title>
<link rel="stylesheet" href="../assets/css/visualizar_usuarios.css">

<body>
    
    <main class="meio">
        
        <!-- TÍTULO DA PÁGINA -->
        <h1 id="titulo"> Usuários </h1>

        <div class="dad">

            <!-- PARTE DA PESQUISA  -->

                <div class="pesquisa">
                    <div class="input_group field">
                        <input type="input" id ="input" class="input_field" placeholder="." required="" name="nome-checklist" autocomplete="off">
                        <label for="name" class="input_label">Pesquisar usuário</label> 
                        <i class="bi bi-search" id="lupa"></i>
                    </div>
                </div>
                
                <!-- PARTE DOS CARDS DOS USUÁRIOS -->
                <div class="user1">
                    <p name="user_text" id="user_text">'.$item['descricao'].'</p>
                    <div class="icons-user1">
                        <button class="editar"><i class="bi bi-pencil-square"></i></button>
                        <button class="excluir"><i class="bi bi-trash"></i></button>
                    </div>
                    </div>
        </div>

    </main>
</body>