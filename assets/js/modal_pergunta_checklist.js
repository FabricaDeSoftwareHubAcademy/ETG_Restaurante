const form = document.getElementById('form_cad_pergunta')
form.addEventListener('submit', event => {
    event.preventDefault();
    const formData = new FormData(form)
    console.log(formData)
})
