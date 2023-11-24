$(document).ready(function() {
    $('form').submit(function(e) {
        e.preventDefault(); // Impede o envio padrão do formulário

        // Obtém o valor de id_pergunta e o valor correspondente
        var idPergunta = $(this).find('input[name="id_pergunta"]').val();
        var valor = $(this).find('input[name="valor"]').val();

        // Chama a função atualizarValor com os valores obtidos
        atualizarValor(idPergunta, valor);
    });
});

function atualizarValor(idPergunta, valor) {
    // Faz a solicitação AJAX para enviar os valores para o PHP
    $.ajax({
        url: 'seu_arquivo_php.php',
        type: 'POST',
        data: {
            id_pergunta: idPergunta,
            valor: valor
        },
        success: function(response) {
            // Lida com a resposta do servidor
            console.log(response);
            // Faça o que desejar com a resposta do servidor
        },
        error: function(xhr, status, error) {
            // Lida com erros de requisição
            console.log(error);
        }
    });
}