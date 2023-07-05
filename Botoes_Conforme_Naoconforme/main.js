let awser = "";
const red = document.getElementById('red')
const green = document.getElementById('green')


const clear = () => {
    awser = ""
    red.classList = 'bi-x'
    green.classList = 'bi bi-check'
}

const check = (bool) => {
    if(bool) {
        const VERDE_SELECIONADO = awser === 'true'
        
        if(VERDE_SELECIONADO){
            clear();
        }else{
            awser = "true"
            
            red.classList = 'bi-x'
            green.classList = 'bi bi-check-circle'
        }
    }else{
        const VERMELHO_SELECIONADO = awser === 'false'
        
        if(VERMELHO_SELECIONADO){
            clear();
        }else{            
            awser = "false"

            green.classList = 'bi bi-check'
            red.classList = 'bi bi-x-circle'
        }
   
    }
}


