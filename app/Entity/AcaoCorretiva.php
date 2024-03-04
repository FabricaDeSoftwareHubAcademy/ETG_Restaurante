<?php
namespace App\Entity;
use PDO;
use PDOException;
use App\Db\Banco;
use App\Entity\Funcoes;
use Exception;

class AcaoCorretiva 
{
    
    private string $id;
    private string $id_nao_conformidade;
    private string $descricao;
    private string $img_1;
    private string $img_2;
    private string $img_3;
    private Banco $conn;


    public function __construct(
        string $id_nao_conformidade,
        string $descricao,
        string $img_1,
        string $img_2 = "",
        string $img_3 = ""
    ) {
        $this->$id_nao_conformidade = $id_nao_conformidade;
        $this->$descricao = $descricao;
        $this->$img_1 = $img_1;
        $this->$img_2 = $img_2;
        $this->$img_3 = $img_3;

        $this->conn = new Banco("reg_correcao");
    }
    
    public function save() {
        try {
            $dados = [
                "reg_NC_id" => $this->id_nao_conformidade,
                "descricao" => $this->descricao,
                "img_1" => $this->img_1,
                "img_2" => $this->img_2,
                "img_3" => $this->img_3
            ];
            $this->conn->insert($dados);
            return true;
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        } 
        catch (Exception $e) {
            throw $e->getMessage();
        }
    }

    public function setDescricao($descricao) {
        $this->$descricao = $descricao;
    }

    public function setImg_1($img_1) {
        $this->$img_1 = $img_1;
    }

    public function setImg_2($img_2) {
        $this->$img_2 = $img_2;
    }

    public function setImg_3($img_3) {
        $this->$img_3 = $img_3;
    }



}