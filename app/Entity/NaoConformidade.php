<?php
namespace App\Entity;
use PDO;
use PDOException;
use App\Db\Banco;
use App\Entity\ResponderChecklist;


class NaoConformidade
{
    public static function cadastrar($dados = [])
    { 
        $obj_banco = new Banco('reg_nc');
        $obj_banco -> insert($dados);
    }

    public static function getNaoConfByIdPerguntaAndIdRealiza($idPergunta, $idRealiza) {
        $objBanco = new Banco('reg_nc');
        $dados = $objBanco -> select("id_pergu = ".$idPergunta . " AND id_realiza = " .$idRealiza);
        // var_dump($dados -> fetchAll(PDO::FETCH_ASSOC));exit;
        if ($dados -> rowCount()) {
            $dados = $dados-> fetchAll(PDO::FETCH_ASSOC)[0];
            // var_dump($dados);exit;

            return array(true, $dados);
        } else {
            return false;
        } 
    }

    public static function saveAndGetLastId(array $dados) {
        $obj_banco = new Banco('reg_nc');
        return $obj_banco -> insertRecoverId($dados);
    }

}