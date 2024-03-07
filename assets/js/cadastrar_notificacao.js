$(".form_enviar_notificacao").on("submit",async function(e){
    e.preventDefault();
    
let form = $(this)[0];
let formdata = new FormData(form);
let data = await fetch("./actions/action_cadastrar_notificacao.php",{
    method: "POST",
    body: formdata

})
let response = await data.json();
if(response.status){
    modalStatus("Notificação cadastrada com sucesso!","success",() => {
        location.href="listar_notificacoes.php"
    })
}})