<?php
namespace App\Entity;

use App\Db\Banco;
use App\Entity\NaoConformidade; 

class ResponderChecklist
{
    // public
    // $id_usuario,
    // $id_sala,
    // $data_fechamento;

    // public function __construct()
    // {
    //     $this -> id_usuario      = null;
    //     $this -> id_sala         = null;
    //     $this -> data_fechamento = null;
    // }

    public static function cadastrar($dados = [], $id_sala = 1)
    {
        $responder_check = [
            'id_usuario' =>  $_SESSION['id_user'],
            'id_sala' => $id_sala
        ];
        $obj_banco = new Banco('responder_check');
        $last_id = $obj_banco -> insertRecoverId($responder_check);
        //INSERINDO NA TABELA NAO CONFORMIDADE
        //     //id_realiza
        //    //id_prof
        //     //id_pergu
        //     //descricao_NC
        //     //img1
        //     //img2
        //     //img3
        // echo(json_encode($dados));exit;
        foreach ($dados as $pergunta)
        {
            $nao_conformidade = [
                'id_realiza' =>  $last_id,
                'id_prof' => $_SESSION['id_user'],
                'id_pergu' => $pergunta['id_pergu'],
                'descricao_NC' => $pergunta['descricao_NC'],
                'img1' => 'd',
                'img2' => 'd',
                'img3' => 'd',
            ];
            NaoConformidade::cadastrar(dados : $nao_conformidade);
        }

    }
}