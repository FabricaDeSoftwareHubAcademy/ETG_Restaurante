import { Dom } from './Dom.js';


var dadosGetStorage = [
    {
        "id_sala": 7,
        "id_pergunta": 7,
        "pergunta": "\nOs alimentos entregues pela logística estão conformes,\netiquetados e no prazo de validade?\n",
        "tipo": "0",
        "nome_check": "Lucas",
        "nome_sala": "Sala para teste",
        "textAreaContent": "dsadsadsadsadasdas",
        "imagesToPHP": [
            "dog.65de2c72dd41a.png",
            "download.65c3e9d12c014.jpeg",
            "gato_brothers.65de2df8962df.jpg"
        ],
        "id_nao_conformidade": 1,
        "NaoConformidade": true,
        "responsavel": "docente"
    },
    {
        "id_sala": 7,
        "id_pergunta": 21,
        "pergunta": "\nUtensílios e/ou equipamentos emprestados de outros\nambientes foram devolvidos?\n",
        "tipo": "1",
        "nome_check": "Lucas",
        "nome_sala": "Sala para teste",
        "textAreaContent": "ddddddd",
        "imagesToPHP": [
            "dog.65de2c72dd41a.png",
            "",
            ""
        ],
        "id_nao_conformidade": 2,
        "NaoConformidade": true,
        "responsavel": "docente"
    },
    {
        "responsavel": "logistica",
        "NaoConformidade": true,
        "nome_check": "Lucas",
        "id_sala": 7,
        "id_pergunta": 12,
        "nome_sala": "Sala para teste",
        "pergunta": "\nOs descartáveis foram entregues: luvas, máscara,\nacendedor fogão, papel filme PVC, papel alumínio e papel\nmanteiga, etiquetas, wapper ?\n",
        "textAreaContent": "SADASD",
        "tipo": "0",
        "imagesToPHP": {
            "0": "",
            "1": "",
            "2": ""
        }
    }
]


var NaoConformidades = [];
const DOM = new Dom(dadosGetStorage);

DOM.showPerguntas();


