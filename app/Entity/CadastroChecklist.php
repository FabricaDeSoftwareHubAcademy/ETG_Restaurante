<?php

namespace App\Entity;
use PDO;
use PDOException;
use App\Db\Banco;

class CadastroChecklist{
    public 
    $id_cadastro_checklist,
    $nome;

    public function __construct($id_cadastro_checklist = null,
                                $nome = null
                                ){
        $this -> id_cadastro_checklist = $id_cadastro_checklist;
        $this -> nome = $nome;
    }


    public function cadastrar(){
        $objDatabase = new Banco('checklist_test');

        $ultimoId = $objDatabase -> insertRecoverId(['descricao' => $this -> nome]);

        return $ultimoId;
    }


    public function getDados() : array{
        $objDatabase = new Banco('cadastro_checklist');
        $query = $objDatabase -> select();
        $dados = $query -> fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }


    public static function cadastroPerunta($dados,$idCheck){
        if (isset($_POST['pergunta'])) {
            $pergunta = $_POST['pergunta'];
        
            foreach ($pergunta as $interesse) {
                // Inserir cada interesse no banco de dados
                $sql = "INSERT INTO relacao_pergunta_checklist () VALUES ('$interesse')";
        
                if ($conn->query($sql) === false) {
                    echo "Erro ao inserir interesse: " . $conn->error;
                }
            }
        
            echo "Interesses inseridos com sucesso!";
        }
        

    }
}

