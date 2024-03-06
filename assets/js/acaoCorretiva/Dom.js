

export class Dom {     
    constructor(dataNaoConf, dataAcaoCorretiva, preenchidas) {
        this.preenchidas = preenchidas
        this.dataNaoConf = dataNaoConf;
        this.dataAcaoCorretiva = dataAcaoCorretiva
    }

    showPerguntas() {
        for (var pergunta of this.dataNaoConf) {
            // console.log(pergunta)
             
            
            this.createOneRedElement(pergunta["textAreaContent"], pergunta["id_pergunta"]); //checando se a pergunta tem uma nao conformidade 
         }
    }

    createOneGreenElement(pergunta, idPergunta) {
        this.createLabelElement("label_checklist-right", pergunta, idPergunta);
    }

    createOneRedElement(pergunta, idPergunta) {
        this.createLabelElement("label_checklist-wrong", pergunta, idPergunta);
    }

    createLabelElement(labelClass, pergunta, idPergunta) {
         
        var mainDiv = document.createElement("div");
        mainDiv.className = "input_checklist";
        
        var labelDiv = document.createElement("div");
        labelDiv.id = "label-div";
        labelDiv.className = labelClass;
        
        
        var h1AndButtonDiv = document.createElement("div");
        h1AndButtonDiv.className = "divH1andButton";
        h1AndButtonDiv.setAttribute("id-pergunta", idPergunta)

        
        var h1Title = document.createElement("h1");
        h1Title.textContent = pergunta


        
        var button = document.createElement("i");
        button.className = "bi bi-chevron-down";
        button.id = "right-button-label";
        
        // this.slideEffect(labelDiv, button);
        //SLIDE EFFECT
        var self_1 = this;
        function montarBotoes()
        {
            var self_2 = self_1
            motherButtons = document.createElement("div");
            motherButtons.className = "alinar-botoes-label";

            var divBack = document.createElement("div");
            divBack.className = "botao-padrao-voltar-label";

            // var buttonIncorrect = document.createElement("button");
            // buttonIncorrect.className = "botao-voltar-link-label";
            // buttonIncorrect.textContent = "Incorreto";
            // buttonIncorrect.onclick = function() {
            //     self_2.call(pergunta)
            //     var buttonConfirmNaoConf = document.querySelector(".botao-confirmar-submit");
            //     buttonConfirmNaoConf.onclick = function() {
            //         vermelho();
            //         var textAreaContent = document.querySelector(".descricao_nao_conf").value
            //         var varPreview = document.querySelector(".upload-img");
            //         var images = varPreview.querySelectorAll("img");
            //         self_2.save(textAreaContent, images, idPergunta);
            //         self_2.close();
            //     }
            // }

            var divSubmit = document.createElement("div");
            divSubmit.className = "botao-padrao-cadastrar-label";

            var buttonSubmit = document.createElement("button");
            buttonSubmit.className = "botao-cadastrar-submit-label";
            buttonSubmit.textContent = "Resolver";
            buttonSubmit.type = "button";
            buttonSubmit.onclick = function() {
                // verde();
                self_2.call(pergunta)
                var buttonConfirmNaoConf = document.querySelector(".botao-confirmar-submit");
                buttonConfirmNaoConf.onclick = function() {
                    var textAreaContent = document.querySelector(".descricao_nao_conf").value
                    var varPreview = document.querySelector(".upload-img");
                    var images = varPreview.querySelectorAll("img");
                    let tamanho = images.length

                    if (textAreaContent == "" || tamanho == 0 || tamanho > 3) {
                        // alert("Preencha os dados corretamente")
                        modalStatus("Preencha os dados corretamente", "error")
                        return false;
                    }

                    for (let i = 0; i < self_2.preenchidas.length; i++) {
                        if (self_2.preenchidas[i]["id_pergunta"] == idPergunta) {
                            self_2.preenchidas[i]["preenchido"] = true
                        }
                    }

                    verde();

                    // console.log(self_2.self_2.dataNaoConf)
                    for (let i = 0; i < self_2.dataNaoConf.length; i++) {
                        let id_nao_conf = self_2.dataNaoConf[i]["id_pergunta"]
                        if (id_nao_conf == idPergunta) {
                            self_2.save(textAreaContent, images, self_2.dataNaoConf[i]);
                            break;
                        }
                    }

                    self_2.close();
                }
            }
            // divBack.appendChild(buttonIncorrect);
            divSubmit.appendChild(buttonSubmit);
            motherButtons.appendChild(divBack);
            motherButtons.appendChild(divSubmit);
            labelDiv.appendChild(motherButtons);
        }

        function encontrarObjetoPorId(array, id) {
            return array.find(objeto => objeto.id_pergunta === id);
        }

        function descerNormal()
        {
            for (let i = 0; i < self_1.preenchidas.length; i++) {
                if (self_1.preenchidas[i]["id_pergunta"] == idPergunta) {
                    self_1.preenchidas[i]["preenchido"] = false
                }
            }

            montarBotoes();
            labelDiv.classList.add("active");
            // console.log(self_1.dataAcaoCorretiva);

            if (labelDiv.classList.contains("label_checklist-wrong")) {
                labelDiv.style.backgroundColor = 'transparent';
                labelDiv.style.border = '3px solid red';
                button.className = "bi bi-chevron-down"
                labelDiv.style.height = (labelDiv.offsetHeight + 400) + "px";

                let imagens = document.createElement("div");
                imagens.className = "imagens-container-acao-corretiva areaImgPergunta"+idPergunta;
                imagens.style.width = "100%";
                imagens.style.height = "300px";
                imagens.style.display = "flex";
                imagens.style.alignItems = "center";

                // let divImg = document.createElement("div");
                // let img = document.createElement("img");

                // console.log(encontrarObjetoPorId(self_1.dataNaoConf,idPergunta))
                let dataPergunta = encontrarObjetoPorId(self_1.dataNaoConf,idPergunta)
                let imgsPergunta = dataPergunta['imagesToPHP']
                // console.log(eBase64)
                //SIMOES QQ VC TEM NA CABECA MENOR, ESSE FOR É PRA IMAGEM QUE NAO É BASE 64 ENT PQ DIABOS SE TA USANDO UMA ARROW CHAMADA BASE64 EM EM EM 

                imgsPergunta.forEach(img_base64 => {

                    if(img_base64.length > 0){

                        let img_element = document.createElement('img')
                        if(img_base64.startsWith('data:image')){
                            img_element.src = img_base64
                            
                        }else{
                            img_element.src = '../storage/n_conformidade/'+img_base64
                        }
                        img_element.style.width = '30%'
                        img_element.classList.add('beluga')
                        imagens.appendChild(img_element)

                    }

                }); 




 
                let nextDivToInsert = document.querySelector(".alinar-botoes-label");
                let dadElement = labelDiv;

                dadElement.insertBefore(imagens, labelDiv.querySelector('.alinar-botoes-label'));
            }

            else if (labelDiv.classList.contains("label_checklist-right")) {
                labelDiv.style.backgroundColor = 'transparent';
                labelDiv.style.border = '3px solid green';
                button.className = "bi bi-chevron-down"
                labelDiv.style.height = (labelDiv.offsetHeight + 125) + "px";
            }

            if (labelDiv.classList.contains("correct")) {
                labelDiv.classList.remove("correct");
            }
            if (labelDiv.classList.contains("incorrect")) {
                labelDiv.classList.remove("incorrect");
            }
             for (var i = 0; i < self_1.dataAcaoCorretiva.length; i++) {
                var Acorretiva = self_1.dataAcaoCorretiva[i];
                
                // console.log(Acorretiva);
                if (Acorretiva["id_pergunta"] == idPergunta) {
                    self_1.dataAcaoCorretiva.splice(i, 1);
                    // console.log("AAAAAAAAAAAAAAAAAAAAAAAAAA")
                }

            }
        }

        function subirNormal()
        {
            if (labelDiv.querySelector(".imagens-container-acao-corretiva") !== null) {
                labelDiv.querySelector(".imagens-container-acao-corretiva").remove();
                labelDiv.style.height = (labelDiv.offsetHeight - 400) + "px";
                labelDiv.classList.remove("active");
                labelDiv.removeChild(motherButtons);
            } else {
                labelDiv.style.height = (labelDiv.offsetHeight - 125) + "px";
                labelDiv.classList.remove("active");
                labelDiv.removeChild(motherButtons);
            }



            if (labelDiv.classList.contains("correct")) {
                labelDiv.classList.remove("correct");
            }
            if (labelDiv.classList.contains("incorrect")) {
                labelDiv.classList.remove("incorrect");
            }
        }

        function verde()
        {
            //verde
            labelDiv.style.backgroundColor = 'green';
            labelDiv.style.border = '3px solid green';
            labelDiv.classList.add("correct");
            button.className = "bi bi-arrow-clockwise";
        }

        function vermelho()
        {
            //vermelho
            labelDiv.style.backgroundColor = 'red';
            labelDiv.classList.add("incorrect");
            button.className = "bi bi-arrow-clockwise";
        }

        var motherButtons;
        labelDiv.onclick = function() {
            if (labelDiv.classList.contains("active") && labelDiv.classList.contains("correct")) 
            {
                subirNormal();
            }
            else if (labelDiv.classList.contains("active") && !labelDiv.classList.contains("correct") && !labelDiv.classList.contains("incorrect"))
            {
                subirNormal();
                // console.log("subiu normal transparente");
            }
            else
            {
                descerNormal();
                // console.log("desceu normal transparente");
            }
        }

        var divPreAula = document.querySelector(".list-pre-aula");

        h1AndButtonDiv.appendChild(h1Title);
        h1AndButtonDiv.appendChild(button);
        labelDiv.appendChild(h1AndButtonDiv);
        mainDiv.appendChild(labelDiv);
        divPreAula.appendChild(mainDiv);
    }

    buildButtons() {
        self = this;
        var divBotoes = document.querySelector(".botoes");

        var cancelButton = document.createElement("button");
        cancelButton.className = "botao-cancelar-submit";
        cancelButton.textContent = "Cancelar";
        
        cancelButton.onclick = function() {
            self.close();
        }

        var confirmButton = document.createElement("button");
        confirmButton.className = "botao-confirmar-submit";
        confirmButton.textContent = "Resolver";
         

        divBotoes.appendChild(cancelButton);
        divBotoes.appendChild(confirmButton);

    }

    call(pergunta) {
        var perguntaMae = document.querySelector(".pergunta_nao_conf");
        var descricaoPergunta = document.createElement("h6");
        descricaoPergunta.innerText = pergunta;
        perguntaMae.appendChild(descricaoPergunta);
        this.onclickToUploadArea();
        this.buildButtons();
        var modal = document.querySelector(".mom");
        modal.style.display = "block";
    }

    close() {
        var varPreview = document.querySelector(".upload-img");
        varPreview.innerHTML = "";
        var textAreaContent = document.querySelector(".descricao_nao_conf");
        textAreaContent.value = "";
        var divBotoes = document.querySelector(".botoes");
        divBotoes.innerHTML = "";
        var modal = document.querySelector(".mom");
        modal.style.display = "none";
        var childs = document.querySelector(".pergunta_nao_conf").childNodes; 
        for (var i = childs.length - 1; i >= 0; i--) {
            document.querySelector(".pergunta_nao_conf").removeChild(childs[i]);
        }
        }

    save(textArea_AcaoCorretiva, images_AcaoCorretiva, dataNaoConformidade) {
        // console.log(dataNaoConformidade);
        var dataAcaoCorretiva = {};
        var imagesToPHP = [];
    
        // ARMAZENANDO AS IMAGENS
        for (let i = 0; i < images_AcaoCorretiva.length; i++) {
            var src = images_AcaoCorretiva[i].getAttribute("src");
            imagesToPHP[i] = src;
        }
        
        if (dataNaoConformidade["id_nao_conformidade"] == undefined) {
            dataAcaoCorretiva["data_nao_conformidade"] = dataNaoConformidade
        }

        dataAcaoCorretiva["acaoCorretiva"] = true;
        dataAcaoCorretiva["id_pergunta"] = dataNaoConformidade["id_pergunta"];
        dataAcaoCorretiva["textAreaContent"] = textArea_AcaoCorretiva;
        dataAcaoCorretiva["imagesToPHP"] = imagesToPHP;

        // console.log(dadosPergunta)
        dataAcaoCorretiva["id_nao_conformidade"] = dataNaoConformidade["id_nao_conformidade"];
        dataAcaoCorretiva["id_sala"] = dataNaoConformidade["id_sala"];
        
        dataAcaoCorretiva["nome_check"] = dataNaoConformidade["nome_check"];
        dataAcaoCorretiva["nome_sala"] = dataNaoConformidade["nome_sala"];
        dataAcaoCorretiva["pergunta"] = dataNaoConformidade["pergunta"];
        dataAcaoCorretiva["responsavel"] = "logistica";
        dataAcaoCorretiva["tipo"] = dataNaoConformidade["tipo"];

        this.dataAcaoCorretiva.push(dataAcaoCorretiva);
        // console.log(this.dataAcaoCorretiva)

    }

    onclickToUploadArea() {
        var uploadImage = document.querySelector(".upload-img")

        var inputFile = document.createElement("input");

        inputFile.setAttribute("type", "file");

        inputFile.setAttribute("id", "input-file");

        inputFile.setAttribute("accept", "image/*");

        inputFile.setAttribute("multiple", "");

        inputFile.style.display = "none";

        uploadImage.appendChild(inputFile);

        var uploadArea = document.querySelector(".upload-area")
        var inputUploadImage = document.querySelector("#input-file")
        uploadArea.onclick = function() {
            inputUploadImage.click();
        }
        inputUploadImage.addEventListener("change", this.loadImagesToPreview);
    }

    loadImagesToPreview(event) {
        const MULTIPLE_FILES = event.target.files;

        const MAX_IMAGES = 3;
        const IMAGES_TO_PROCESS = Math.min(MAX_IMAGES, MULTIPLE_FILES.length);

        
    
        for (let i = 0; i < IMAGES_TO_PROCESS; i++) {
            const FILE = MULTIPLE_FILES[i];
    
            if (!FILE.type.startsWith("image/")) {
                continue;
            }
    
            const IMG = document.createElement("img");
            IMG.className = "beluga";
            
            
            let reader = new FileReader();

            reader.onload = (e) => {
    
                IMG.src = e.target.result
             }

            reader.readAsDataURL(FILE)  
            
            var container_img = document.createElement("div");
    
            // const BUTTON_DELETE_IMAGE = document.createElement("button");
            // BUTTON_DELETE_IMAGE.textContent = "EXCLUIR";
            // BUTTON_DELETE_IMAGE.addEventListener("click", function() {
            //     var varPreview = document.querySelector(".upload-img");
            //     while(varPreview.firstChild) {
            //         varPreview.removeChild(varPreview.firstChild);
            //     }
            // });
    
            container_img.appendChild(IMG);
            // container_img.appendChild(BUTTON_DELETE_IMAGE);
            container_img.className = 'img_nc_lista' 

            var varPreview = document.querySelector(".upload-img");
            varPreview.appendChild(container_img);
        }


        const BUTTON_DELETE_IMAGE = document.querySelector('#btn_reset_imgs')

        
        BUTTON_DELETE_IMAGE.addEventListener("click", function() {
            var varPreview = document.querySelector(".upload-img");
            while(varPreview.firstChild) {
                varPreview.removeChild(varPreview.firstChild);
            }
        });
     }


}   



