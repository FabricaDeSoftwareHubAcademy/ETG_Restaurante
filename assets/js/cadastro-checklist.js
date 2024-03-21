const btn_cadastrar = document.getElementById("btn_cadastrar");

btn_cadastrar.addEventListener("click",async function(e){
    e.preventDefault();
     
    let form = document.getElementById('meuFormulario');
    let nome = document.getElementById("nome_checklist").value;
    let perguntas = document.querySelectorAll("#checkbox")
    let arrayPerguntas = [];
    
    perguntas.forEach(element => {
        if (element.checked){
            arrayPerguntas.push(element.value);
        }
    });
    //console.log(arrayPerguntas);
    
    let formData = new FormData(form);
    formData.append("nome_pergunta", nome);
    formData.append("perguntas", arrayPerguntas);

    let data = await fetch('./actions/action_cad_checklist.php', {
        method: 'POST',
        body: formData
    });
    let response = await data.json();

    console.log(response);

    if (response) {
        modalStatus('Checklist cadastrado com sucesso!', 'success', () => {

            location.href = 'gerenciar_checklist.php'
        })
    }else{
        modalStatus('Erro ao cadastrar a pergunta!', 'error')
    }
})