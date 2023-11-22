$("#input").autocomplete({
    source: function(request, response) {
        // Fetch data
        $.ajax({
            url: "../app/Ajax/cadastrar_pergunta.php",
            type: 'GET',
            dataType: "json",
            success: function(data) {
                var term = request.term.toLowerCase();
                var filteredData = $.grep(data, function(value) {
                    return value.nome.toLowerCase().indexOf(term) !== -1 ||
                           value.email.toLowerCase().indexOf(term) !== -1;
                });

                var aData = $.map(filteredData, function(value, index) {
                    return {
                        id: value.id,
                        label: value.descricao + ' (' + value.descricao + ')', // Nome e email no mesmo seletor
                        value: value.descricao, // Utilize 'value' para o valor a ser enviado
                    };
                });
                console.log(aData)
                response(aData); // Adicionado para retornar os dados para o autocompletar
            },
            error: function(xhr, status, error) {
                console.error("Erro na requisição AJAX: ", status, error);
            }
        });
    },
    minLength: 2, // Defina um comprimento mínimo para acionar a pesquisa
    select: function(event, ui) {
        // Preencher o input com o valor do item selecionado
        $("#input").val(ui.item.value);

        // Adiciona a div formatada ao DOM
        var questionDiv = '<div class="question1">' +
            '<p name="question_text" id="question_text">' + ui.item.pergunta + '</p>' +
            '<div class="icons-question1">' +
                '<i class="bi bi-pencil-square"></i>' +
                '<i class="bi bi-trash"></i>' +
            '</div>' +
        '</div>';

        // Substitui o conteúdo existente pelo novo
        $("#output-container").html(questionDiv);
    }
});
