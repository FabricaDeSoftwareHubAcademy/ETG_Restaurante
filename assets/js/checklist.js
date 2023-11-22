// let awser = "";
// const red = document.getElementById('red')

 
function atualizarValor(id,bool){
    
    if(bool){

        let  green = document.getElementById('green'+id)
        let  red = document.getElementById('red'+id)
        green.classList = 'bi bi-check-circle'
        red.classList = 'bi bi-x'

    }else{

        let  green = document.getElementById('green'+id)
        let  red = document.getElementById('red'+id)
        green.classList = 'bi bi-check'
        red.classList = 'bi bi-x-circle'
        acao(id)
    }


}