<!DOCTYPE html>
<html>
<head>
    <title>Redirecionamento com Modal</title>
    <!-- Adicione os links para os estilos do Bootstrap (ou outra biblioteca de modal) -->
</head>
<body>
    <!-- Card 1 -->
    <div class="card">
        <h3>Card 1</h3>
        <p>Conteúdo do Card 1</p>
        <!-- Botão Editar com atributos personalizados -->
        <button class="editarButton" data-campo1="valor_campo1_card1" data-campo2="valor_campo2_card1" data-id-user="1">Editar</button>
    </div>

    <!-- Card 2 -->
    <div class="card">
        <h3>Card 2</h3>
        <p>Conteúdo do Card 2</p>
        <!-- Botão Editar com atributos personalizados -->
        <button class="editarButton" data-campo1="valor_campo1_card2" data-campo2="valor_campo2_card2" data-id-user="2">Editar</button>
    </div>

    <!-- E assim por diante... -->

    <!-- Modal -->
    <div id="myModal" style="display: none;">
        <!-- Conteúdo do seu modal aqui -->
        <!-- Formulário para cadastrar no banco de dados -->
        <form id="formCadastro" method="post" action="">
            <!-- Campos do formulário -->
            <input type="text" name="campo1" id="campo1">
            <input type="text" name="campo2" id="campo2">
            <!-- Input hidden para armazenar o id_user -->
            <input type="hidden" name="id_user" id="id_user">
            <!-- Botão para confirmar e redirecionar -->
            <button id="confirmarButton">Confirmar</button>
        </form>
    </div>

    <!-- Adicione os scripts do Bootstrap (ou outra biblioteca de modal) -->

    <script>
        // Capturar todos os botões "Editar"
        const editarButtons = document.querySelectorAll(".editarButton");

        // Capturar o modal e os campos de input
        const modal = document.getElementById("myModal");
        const campo1Input = document.getElementById("campo1");
        const campo2Input = document.getElementById("campo2");
        const idUserInput = document.getElementById("id_user");

        // Capturar o botão de confirmar dentro do modal
        const confirmarButton = document.getElementById("confirmarButton");

        // Função para abrir o modal e preencher com os dados do card
        function abrirModal(campo1, campo2, idUser) {
            campo1Input.value = campo1;
            campo2Input.value = campo2;
            idUserInput.value = idUser;
            modal.style.display = "block";
        }

        // Função para fechar o modal
        function fecharModal() {
            modal.style.display = "none";
        }

        // Adicionar um evento de clique para cada botão "Editar"
        editarButtons.forEach((button, index) => {
            button.addEventListener("click", function() {
                // Obter os atributos personalizados do botão clicado (do card específico)
                const campo1Value = this.getAttribute("data-campo1");
                const campo2Value = this.getAttribute("data-campo2");
                const idUserValue = this.getAttribute("data-id-user");

                // Abrir o modal e preencher com os dados do card específico
                abrirModal(campo1Value, campo2Value, idUserValue);
            });
        });

        // Adicionar um evento de clique para o botão de confirmar dentro do modal
        confirmarButton.addEventListener("click", function() {
            // Obter o id_user do campo oculto no modal
            const idUser = idUserInput.value;

            // Redirecionar para a página específica com base no id_user
            switch (idUser) {
                case "1":
                    window.location.href = "pagina_user_1.php";
                    break;
                case "2":
                    window.location.href = "pagina_user_2.php";
                    break;
                // Adicione mais casos para cada id_user e sua respectiva página
                // Exemplo:
                // case "3":
                //     window.location.href = "pagina_user_3.php";
                //     break;
                // ...

                default:
                    // Página padrão para lidar com casos não tratados
                    window.location.href = "pagina_padrao.php";
            }
        });

        // Quando o formulário for enviado, redirecionar para cadastrar_action.php
        document.getElementById("formCadastro").addEventListener("submit", function() {
            // Pode adicionar validações dos campos aqui antes de enviar o formulário

            // O formulário será enviado para cadastrar_action.php para processar os dados no banco de dados
        });
    </script>
</body>
</html>
