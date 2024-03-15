import { Pergunta } from './Pergunta.js'

export class Dom {     
    constructor(dataNaoConf, preenchidas) {
        this.preenchidas = preenchidas
        this.dataNaoConf = dataNaoConf
        this.objPergunta = new Pergunta(perguntasJson)
        this.dataPerguta = this.objPergunta.getAll()
    }

    addNaoConfToDataNaoConf(pergunta) {
        this.dataNaoConf.push(pergunta)
    }

    showPerguntas() {
        for (var pergunta of this.dataPerguta) {
            if (pergunta["NaoConformidade"]) {
                this.addNaoConfToDataNaoConf(pergunta)
                this.createOneRedElement(pergunta["pergunta"], pergunta["id_pergunta"], pergunta) //checando se a pergunta tem uma nao conformidade
                continue
            }
            this.createOneGreenElement(pergunta["pergunta"], pergunta["id_pergunta"], pergunta)
        }
        var campo_observacoes = document.createElement("div")
        campo_observacoes.style.width = "100%"
        campo_observacoes.style.minHeight = "100px"
        campo_observacoes.style.display = "flex"
        campo_observacoes.style.justifyContent = "flex-start"
        var texto_observacoes = document.createElement("div")
        texto_observacoes.style.border = "solid black 1px"
        // texto_observacoes.style.backgroundColor = "red"
        texto_observacoes.style.borderRadius = "15px"
        texto_observacoes.style.width = "80%"
        texto_observacoes.style.height = "100%"
        texto_observacoes.style.textAlign = "justify"
        texto_observacoes.style.padding = "15px"

        var texto_que_realmente_e_texto_observacoes = document.createElement("p")
        texto_que_realmente_e_texto_observacoes.style.width = "100%"
        texto_que_realmente_e_texto_observacoes.style.height = "100%"
        texto_que_realmente_e_texto_observacoes.style.wordWrap = "break-word"

        
        texto_que_realmente_e_texto_observacoes.textContent = "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA"
        texto_observacoes.appendChild(texto_que_realmente_e_texto_observacoes)
        campo_observacoes.appendChild(texto_observacoes)
        document.querySelector(".list-pre-aula").appendChild(campo_observacoes)
    }

    createOneGreenElement(pergunta, idPergunta, dadosPergunta) {
        this.createLabelElement("label_checklist-right", pergunta, idPergunta, dadosPergunta)
    }

    createOneRedElement(pergunta, idPergunta, dadosPergunta) {
        this.createLabelElement("label_checklist-wrong", pergunta, idPergunta, dadosPergunta)
    }

    createLabelElement(labelClass, pergunta, idPergunta, dadosPergunta) {
        var mainDiv = document.createElement("div")
        mainDiv.className = "input_checklist"
        
        var labelDiv = document.createElement("div")
        labelDiv.id = "label-div"
        labelDiv.className = labelClass

        var descricao_pergunta = document.createElement("p")
        descricao_pergunta.textContent = pergunta
        descricao_pergunta.style.textAlign = "justify"
        descricao_pergunta.style.padding = "15px"          
              
              
    

        var botoes_direita = document.createElement("div")
        botoes_direita.className = "botoes_direita"
        botoes_direita.style.width = "20%";
        botoes_direita.style.height = "100%";
        // botoes_direita.style.background = "red";
        botoes_direita.style.fontSize = "40px";
        botoes_direita.style.display = "flex";
        botoes_direita.style.justifyContent = "center";

        var botao_correto = document.createElement("i")
        botao_correto.className = "bi bi-x"

        var botao_incorreto = document.createElement("i")
        botao_incorreto.className = "bi bi-check"


        
        //SLIDE EFFECT
        // var self_1 = this;
        // function montarBotoes()
        // {
        //     var self_2 = self_1
        //     motherButtons = document.createElement("div");
        //     motherButtons.className = "alinar-botoes-label";

        //     var divBack = document.createElement("div");
        //     divBack.className = "botao-padrao-voltar-label";

        //     var buttonIncorrect = document.createElement("button");
        //     buttonIncorrect.className = "botao-voltar-link-label";
        //     buttonIncorrect.textContent = "Incorreto";
        //     buttonIncorrect.onclick = function() {
        //         self_2.call(pergunta)
        //         var buttonConfirmNaoConf = document.querySelector(".botao-confirmar-submit");
        //         buttonConfirmNaoConf.onclick = function() {
        //             var textAreaContent = document.querySelector(".descricao_nao_conf").value
        //             var varPreview = document.querySelector(".upload-img");
        //             var images = varPreview.querySelectorAll("img");
        //             let tamanho = images.length
        //             // console.log(tamanho)
        //             if (textAreaContent == "" || tamanho == 0 || tamanho > 3) {
        //                 // alert("Preencha os dados corretamente")
        //                 modalStatus("Preencha os dados corretamente", "error")
        //                 return false;
        //             }
        //             // console.log(images);
        //             for (let i = 0; i < self_2.preenchidas.length; i++) {
        //                 // console.log(i);
        //                 if (self_2.preenchidas[i]["id_pergunta"] == idPergunta) {
        //                     self_2.preenchidas[i]["preenchido"] = true 
        //                 }
        //             }
        //             vermelho();
        //             self_2.save(textAreaContent, images, dadosPergunta);
        //             self_2.close();
        //         }
        //     }

        //     var divSubmit = document.createElement("div");
        //     divSubmit.className = "botao-padrao-cadastrar-label";

        //     var buttonSubmit = document.createElement("button");
        //     buttonSubmit.className = "botao-cadastrar-submit-label";
        //     buttonSubmit.textContent = "Correto";
        //     buttonSubmit.type = "button";
        //     self_2 = self_1
        //     buttonSubmit.onclick = function() {
        //         // console.log(self_2.preenchidas.length)
        //         for (let i = 0; i < self_2.preenchidas.length; i++) {
        //             // console.log(i);
        //             if (self_2.preenchidas[i]["id_pergunta"] == idPergunta) {
        //                 self_2.preenchidas[i]["preenchido"] = true 
        //             }
        //         }
        

        //         if (labelDiv.classList.contains("label_checklist-wrong") && labelDiv.classList.contains("active")) {
        //             vermelho();
        //         }
        //         else
        //         {
        //             verde();
        //         }
        //     }
        //     divBack.appendChild(buttonIncorrect);
        //     divSubmit.appendChild(buttonSubmit);
        //     motherButtons.appendChild(divBack);
        //     motherButtons.appendChild(divSubmit);
        //     labelDiv.appendChild(motherButtons);
        // }

        // function descerNormal()
        // {
        //     for (let i = 0; i < self_1.preenchidas.length; i++) {
        //         // console.log(self_1.preenchidas[i]);
        //         if (self_1.preenchidas[i]["id_pergunta"] == idPergunta) {
        //             self_1.preenchidas[i]["preenchido"] = false 
        //         }
        //     }
        //     // console.log(self_1.dataNaoConf)
        //     labelDiv.classList.add("active");

        //     if (labelDiv.classList.contains("label_checklist-wrong")) {
        //         labelDiv.style.backgroundColor = 'transparent';
        //         labelDiv.style.border = '3px solid red';
        //         button.className = "bi bi-chevron-down"
        //         // labelDiv.style.height = (labelDiv.offsetHeight + 250) + "px";

        //         let imagens = document.createElement("div");
        //         imagens.className = "imagens-container";
        //         imagens.style.width = "100%";
        //         imagens.style.height = "300px";
        //         imagens.style.display = "flex";
        //         imagens.style.alignItems = "center";
                
        //         for (let i = 0; i < 3; i++) {
        //             let divImg = document.createElement("div");
        //             divImg.style.display = "flex";
        //             divImg.style.justifyContent = "center";
                    
        //             if (dadosPergunta["imagesToPHP"][i] != "") {
        //                 let img = document.createElement("img");
        //                 img.className = "beluga";
        //                 img.style.width = "100%";


        //                 let imgNameInServer = dadosPergunta["imagesToPHP"][i];
        //                 let basepath = "../storage/n_conformidade/";
        //                 let caminhoAbsoluto = basepath + imgNameInServer;
        //                 img.src = caminhoAbsoluto;
        //                 divImg.appendChild(img);
        //                 imagens.appendChild(divImg)
        //             }
        //         }
                
        //         labelDiv.appendChild(imagens)
                
        //     }
        //     else if (labelDiv.classList.contains("label_checklist-right")) {
        //         montarBotoes();
        //         labelDiv.style.backgroundColor = 'transparent';
        //         labelDiv.style.border = '3px solid green';
        //         button.className = "bi bi-chevron-down"
        //         // labelDiv.style.height = (labelDiv.offsetHeight + 125) + "px";
                
        //     }

        //     if (labelDiv.classList.contains("correct")) {
        //         labelDiv.classList.remove("correct");
        //     }
        //     if (labelDiv.classList.contains("incorrect")) {
        //         labelDiv.classList.remove("incorrect");
        //     }
        //     for (var i = 0; i < self_1.dataNaoConf.length; i++) {
        //         var Nconf = self_1.dataNaoConf[i];
        //         if (Nconf["id_pergunta"] == idPergunta) {
        //             self_1.dataNaoConf.splice(i, 1);
        //         }
        //     }

        // }

        // function subirNormal()
        // {
              
        //     if (labelDiv.querySelector(".imagens-container") !== null) {
        //         labelDiv.querySelector(".imagens-container").remove();
        //         // labelDiv.style.height = (labelDiv.offsetHeight - 250) + "px";
        //         labelDiv.classList.remove("active");
        //     } else {
        //         // labelDiv.style.height = (labelDiv.offsetHeight - 125) + "px";
        //         labelDiv.classList.remove("active");
        //         labelDiv.removeChild(motherButtons);
        //     }

        //     if (labelDiv.classList.contains("correct")) {
        //         labelDiv.classList.remove("correct");
        //     }
        //     if (labelDiv.classList.contains("incorrect")) {
        //         labelDiv.classList.remove("incorrect");
        //     }


       
        // }


        // function verde()
        // {
        //     //verde
        //     labelDiv.style.backgroundColor = 'green';
        //     labelDiv.classList.add("correct");
        //     button.className = "bi bi-arrow-clockwise";
        // }

        // function vermelho()
        // {
        //     if (labelDiv.classList.contains("label_checklist-wrong")) {
        //         //vermelho
        //         labelDiv.style.backgroundColor = 'red';
        //         labelDiv.classList.add("correct");
        //         button.className = "bi bi-arrow-clockwise";
        //     }
        //     else 
        //     {
        //         //vermelho
        //         labelDiv.style.backgroundColor = 'red';
        //         labelDiv.style.border = '3px solid red';
        //         labelDiv.classList.add("incorrect");
        //         button.className = "bi bi-arrow-clockwise";
        //     }
        // }

        // var motherButtons;
        // labelDiv.onclick = function() {
        //     if (labelDiv.classList.contains("active") && labelDiv.classList.contains("correct")) 
        //     {
        //         subirNormal();
        //     }
        //     else if (labelDiv.classList.contains("active") && !labelDiv.classList.contains("correct") && !labelDiv.classList.contains("incorrect"))
        //     {
        //         subirNormal();
        //         // console.log("subiu normal transparente");
        //     }
        //     else
        //     {
        //         descerNormal();
        //         // console.log("desceu normal transparente");
        //     }
        // }

        
        // h1AndButtonDiv.appendChild(h1Title);
        // h1AndButtonDiv.appendChild(button);
        labelDiv.appendChild(descricao_pergunta);
        botoes_direita.appendChild(botao_correto)
        botoes_direita.appendChild(botao_incorreto)
        mainDiv.appendChild(labelDiv)
        mainDiv.appendChild(botoes_direita)
        document.querySelector(".list-pre-aula").appendChild(mainDiv)
    }

    buildButtons() {
        self = this
        var divBotoes = document.querySelector(".botoes")

        var cancelButton = document.createElement("button")
        cancelButton.className = "botao-cancelar-submit"
        cancelButton.textContent = "Cancelar"
        
        cancelButton.onclick = function() {
            self.close()
        }

        var confirmButton = document.createElement("button")
        confirmButton.className = "botao-confirmar-submit"
        confirmButton.textContent = "Confirmar"
 
        divBotoes.appendChild(cancelButton)
        divBotoes.appendChild(confirmButton)

    }

    call(pergunta) {
        var perguntaMae = document.querySelector(".pergunta_nao_conf")
        var descricaoPergunta = document.createElement("h6")
        descricaoPergunta.innerText = pergunta
        perguntaMae.appendChild(descricaoPergunta)
        this.onclickToUploadArea()
        this.buildButtons()
        var modal = document.querySelector(".mom")
        modal.style.display = "block"
    }

    close() {
        var varPreview = document.querySelector(".upload-img")
        varPreview.innerHTML = ""
        var textAreaContent = document.querySelector(".descricao_nao_conf")
        textAreaContent.value = ""
        var divBotoes = document.querySelector(".botoes")
        divBotoes.innerHTML = ""
        var modal = document.querySelector(".mom")
        modal.style.display = "none"
        var childs = document.querySelector(".pergunta_nao_conf").childNodes 
        for (var i = childs.length - 1; i >= 0; i--) {
            document.querySelector(".pergunta_nao_conf").removeChild(childs[i])
        }
    }

    save(textAreaContent, images, dadosPergunta) {
        var data = {}
        var imagesToPHP = []
    
        // ARMAZENANDO AS IMAGENS
        for (let i = 0; i < images.length; i++) {
            var src = images[i].getAttribute("src")

            imagesToPHP[i] = src
        }
        
        data["responsavel"] = "logistica"
        data["NaoConformidade"] = true
        data["nome_check"] = dadosPergunta["nome_check"]
        data["id_sala"] = dadosPergunta ["id_sala"]
        data["id_pergunta"] = dadosPergunta ["id_pergunta"]
        data["nome_sala"] = dadosPergunta ["nome_sala"]
        data["pergunta"] = dadosPergunta ["pergunta"]
        data["textAreaContent"] = textAreaContent
        data["tipo"] = dadosPergunta ["tipo"]
        data["imagesToPHP"] = imagesToPHP
        data["id_realizacao"] = dadosPergunta ["id_realizacao"]
        this.dataNaoConf.push(data)

    }

    onclickToUploadArea() {
        var uploadImage = document.querySelector(".upload-img")

        var inputFile = document.createElement("input")

        inputFile.setAttribute("type", "file")

        inputFile.setAttribute("id", "input-file")

        inputFile.setAttribute("accept", "image/*")

        inputFile.setAttribute("multiple", "")

        inputFile.style.display = "none"

        uploadImage.appendChild(inputFile)

        var uploadArea = document.querySelector(".upload-area")
        var inputUploadImage = document.querySelector("#input-file")
        uploadArea.onclick = function() {
            inputUploadImage.click()
        }
        inputUploadImage.addEventListener("change", this.loadImagesToPreview)
    }

    loadImagesToPreview(event) {
        const MULTIPLE_FILES = event.target.files

        if(MULTIPLE_FILES.length > 3){


            modalStatus('teste','success')
        }else{



            const MAX_IMAGES = 3
            const IMAGES_TO_PROCESS = Math.min(MAX_IMAGES, MULTIPLE_FILES.length)
            
        
            for (let i = 0; i < IMAGES_TO_PROCESS; i++) {
                const FILE = MULTIPLE_FILES[i]
    
                
                if (!FILE.type.startsWith("image/")) {
                    continue
                }
        
                const IMG = document.createElement("img")
                IMG.className = "beluga" 
    
                let reader = new FileReader()
    
                reader.onload = (e) => {
        
                    IMG.src = e.target.result
                 }
    
                reader.readAsDataURL(FILE)  
                
                var container_img = document.createElement("div")
        
                
        
                container_img.appendChild(IMG)
        
                var varPreview = document.querySelector(".upload-img")
                varPreview.appendChild(container_img)
            }
    
            const BUTTON_DELETE_IMAGE = document.querySelector('#btn_reset_imgs')
    
            
            BUTTON_DELETE_IMAGE.addEventListener("click", function() {
                var varPreview = document.querySelector(".upload-img")
                while(varPreview.firstChild) {
                    varPreview.removeChild(varPreview.firstChild)
                }
            })

        }

    } 

}   
 


