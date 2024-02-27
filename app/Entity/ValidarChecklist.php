<?php
namespace App\Entity;
use PDO;
use PDOException;
use App\Db\Banco;
use App\Entity\ResponderChecklist;
use App\Entity\Checklist;


class ValidarChecklist
{
    public function getIdSala($idResponderCheck) : string {
        $data = Checklist::getDataById(id: $idResponderCheck);
        return $data[0]['id_sala'];
    }

    public function getPerguntas($idSala) : array {
        return Pergunta::getDados(id_sala: $idSala);
    }

    public function hasNaoConf($idPergunta, $idRealiza) : bool {
        $hasNaoConf = NaoConformidade::getNaoConfByIdPerguntaAndIdRealiza(idPergunta: $idPergunta, idRealiza: $idRealiza);
        if ($hasNaoConf) {
            return true;
        } else {
            return false;
        }
    }
}