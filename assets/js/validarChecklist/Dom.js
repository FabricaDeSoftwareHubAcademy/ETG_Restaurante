import { Pergunta } from './Pergunta.js';

export class Dom {     
    constructor(dataNaoConf) {
        this.dataNaoConf = dataNaoConf;
        this.objPergunta = new Pergunta(perguntasJson);
        this.dataPerguta = this.objPergunta.getAll();
    }

    addNaoConfToDataNaoConf(pergunta) {
        this.dataNaoConf.push(pergunta);
    }

    showPerguntas() {
        for (var pergunta of this.dataPerguta) {
            if (pergunta["NaoConformidade"]) {
                this.addNaoConfToDataNaoConf(pergunta);
                this.createOneRedElement(pergunta["pergunta"], pergunta["id_pergunta"], pergunta); //checando se a pergunta tem uma nao conformidade
                // console.log(pergunta);
                continue;
            }
            this.createOneGreenElement(pergunta["pergunta"], pergunta["id_pergunta"], pergunta);
        }
    }

    createOneGreenElement(pergunta, idPergunta, dadosPergunta) {
        this.createLabelElement("label_checklist-right", pergunta, idPergunta, dadosPergunta);
    }

    createOneRedElement(pergunta, idPergunta, dadosPergunta) {
        this.createLabelElement("label_checklist-wrong", pergunta, idPergunta, dadosPergunta);
    }

    createLabelElement(labelClass, pergunta, idPergunta, dadosPergunta) {
        var mainDiv = document.createElement("div");
        mainDiv.className = "input_checklist";
        
        var labelDiv = document.createElement("div");
        labelDiv.id = "label-div";
        labelDiv.className = labelClass;
        
        
        var h1AndButtonDiv = document.createElement("div");
        h1AndButtonDiv.className = "divH1andButton";
        h1AndButtonDiv.setAttribute("id-pergunta", idPergunta)

        
        var h1Title = document.createElement("h1");
        h1Title.textContent = pergunta;
        
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

            var buttonIncorrect = document.createElement("button");
            buttonIncorrect.className = "botao-voltar-link-label";
            buttonIncorrect.textContent = "Incorreto";
            buttonIncorrect.onclick = function() {
                self_2.call(pergunta)
                var buttonConfirmNaoConf = document.querySelector(".botao-confirmar-submit");
                buttonConfirmNaoConf.onclick = function() {
                    vermelho();
                    var textAreaContent = document.querySelector(".descricao_nao_conf").value
                    var varPreview = document.querySelector(".upload-img");
                    var images = varPreview.querySelectorAll("img");
                    self_2.save(textAreaContent, images, dadosPergunta);
                    self_2.close();
                }
            }

            var divSubmit = document.createElement("div");
            divSubmit.className = "botao-padrao-cadastrar-label";

            var buttonSubmit = document.createElement("button");
            buttonSubmit.className = "botao-cadastrar-submit-label";
            buttonSubmit.textContent = "Correto";
            buttonSubmit.type = "button";
            buttonSubmit.onclick = function() {
                if (labelDiv.classList.contains("label_checklist-wrong") && labelDiv.classList.contains("active")) {
                    vermelho();
                }
                else
                {
                    verde();
                }
            }
            divBack.appendChild(buttonIncorrect);
            divSubmit.appendChild(buttonSubmit);
            motherButtons.appendChild(divBack);
            motherButtons.appendChild(divSubmit);
            labelDiv.appendChild(motherButtons);
        }

        function descerNormal()
        {
            // console.log(self_1.dataNaoConf)
            labelDiv.classList.add("active");
            if (labelDiv.classList.contains("label_checklist-wrong")) {
                labelDiv.style.backgroundColor = 'transparent';
                labelDiv.style.border = '3px solid red';
                button.className = "bi bi-chevron-down"
                labelDiv.style.height = (labelDiv.offsetHeight + 250) + "px";
                
                let imagens = document.createElement("div");
                imagens.className = "imagens-container";
                // imagens.style.backgroundColor = "red";
                imagens.style.width = "100%";
                imagens.style.height = "300px";
                // imagens.style.marginBottom = "10px";
                imagens.style.display = "flex";
                // imagens.style.justifyContent = "space-between";
                imagens.style.alignItems = "center";
                // imagens.style.justifyContent = "center";
                
                for (let i = 0; i < 3; i++) {
                    let divImg = document.createElement("div");
                    divImg.style.display = "flex";
                    divImg.style.justifyContent = "center";
                    
                    if (dadosPergunta["imagesToPHP"][i] != "") {
                        let img = document.createElement("img");
                        img.className = "beluga";
                        img.style.width = "100%";


                        let imgNameInServer = dadosPergunta["imagesToPHP"][i];
                        let basepath = "../storage/n_conformidade/";
                        let caminhoAbsoluto = basepath + imgNameInServer;
                        // img.src = basepath + "65de2c242e07b_nc.png"; //teste
                        img.src = caminhoAbsoluto;
                        // console.log(dadosPergunta["imagesToPHP"][i])
                        divImg.appendChild(img);
                        imagens.appendChild(divImg)
                    }
                }
                
                labelDiv.appendChild(imagens)
                // let nextDivToInsert = document.querySelector(".alinar-botoes-label");
                // let dadElement = nextDivToInsert.parentNode;
                
                // dadElement.insertBefore(imagens, nextDivToInsert);
            }
            else if (labelDiv.classList.contains("label_checklist-right")) {
                montarBotoes();
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
            for (var i = 0; i < self_1.dataNaoConf.length; i++) {
                var Nconf = self_1.dataNaoConf[i];
                // console.log(Nconf);
                if (Nconf["id_pergunta"] == idPergunta) {
                    self_1.dataNaoConf.splice(i, 1);
                    // console.log("AAAAAAAAAAAAAAAAAAAAAAAAAA")
                }
            }
            // console.log(self_1.dataNaoConf);

        }

        function subirNormal()
        {
            if (labelDiv.querySelector(".imagens-container") !== null) {
                labelDiv.querySelector(".imagens-container").remove();
                labelDiv.style.height = (labelDiv.offsetHeight - 250) + "px";
                labelDiv.classList.remove("active");
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
            labelDiv.classList.add("correct");
            button.className = "bi bi-arrow-clockwise";
        }

        function vermelho()
        {
            if (labelDiv.classList.contains("label_checklist-wrong")) {
                //vermelho
                labelDiv.style.backgroundColor = 'red';
                labelDiv.classList.add("correct");
                button.className = "bi bi-arrow-clockwise";
            }
            else 
            {
                //vermelho
                labelDiv.style.backgroundColor = 'red';
                labelDiv.classList.add("incorrect");
                button.className = "bi bi-arrow-clockwise";
            }
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
        confirmButton.textContent = "Confirmar";
        // confirmButton.onclick = function() {
        //     labelDiv = document.querySelector("#label-div");
        //     labelDiv.classList.add("incorrect");
            //vermelho
            // labelDiv.style.backgroundColor = 'red';
            // labelDiv.classList.add("incorrect");
            // buttonBIBI.className = "bi bi-arrow-clockwise";

        //     var textAreaContent = document.querySelector(".descricao_nao_conf").value
        //     var varPreview = document.querySelector(".upload-img");
        //     var images = varPreview.querySelectorAll("img");
        //     self.save(textAreaContent, images);
        //     self.close();
        // }

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

    save(textAreaContent, images, dadosPergunta) {
        var data = {};
        var imagesToPHP = [];
    
        // ARMAZENANDO AS IMAGENS
        for (let i = 0; i < images.length; i++) {
            var src = images[i].getAttribute("src");

            imagesToPHP[i] = src;
        }
        
        // console.log(dadosPergunta)
        data["responsavel"] = "logistica";
        data["NaoConformidade"] = true;
        data["nome_check"] = dadosPergunta["nome_check"];
        data["id_sala"] = dadosPergunta ["id_sala"];
        data["id_pergunta"] = dadosPergunta ["id_pergunta"];
        data["nome_sala"] = dadosPergunta ["nome_sala"];
        data["pergunta"] = dadosPergunta ["pergunta"];
        data["textAreaContent"] = textAreaContent;
        data["tipo"] = dadosPergunta ["tipo"];
        data["imagesToPHP"] = imagesToPHP;
        data["id_realizacao"] = dadosPergunta ["id_realizacao"];
        this.dataNaoConf.push(data);
        // console.log(data)

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
    
            const BUTTON_DELETE_IMAGE = document.createElement("button");
    
            BUTTON_DELETE_IMAGE.textContent = "EXCLUIR";
            BUTTON_DELETE_IMAGE.addEventListener("click", function() {
                var varPreview = document.querySelector(".upload-img");
                while(varPreview.firstChild) {
                    varPreview.removeChild(varPreview.firstChild);
                }
            });
    
            container_img.appendChild(IMG);
            container_img.appendChild(BUTTON_DELETE_IMAGE);
    
            var varPreview = document.querySelector(".upload-img");
            varPreview.appendChild(container_img);
        }
    }


}   



