<?php
namespace App\Entity;
use PDO;
use PDOException;
use App\Db\Banco;


class Sala
{
    private $id_cadastro_sala,
            $id_cadastro_checklist,
            $id_cadastro_usuario,
            $andar,
            $descricao,
            $imagem,
            $cor,
            $status_sala,
            $nome,
            $ativo_desativo,
            $funcionamento
            ;
    public function __construct($id_cadastro_sala = null,
                                $id_cadastro_checklist = null,
                                $id_cadastro_usuario = null,
                                $andar = null,
                                $descricao = null,
                                $imagem = null,
                                $cor = null,
                                $status_sala = null,
                                $nome = null,
                                $ativo_desativo = null,
                                $funcionamento = null
                                )
    {
        $this -> id_cadastro_sala       = $id_cadastro_sala;
        $this -> id_cadastro_checklist  = $id_cadastro_checklist;
        $this -> id_cadastro_usuario    = $id_cadastro_usuario;
        $this -> andar                  = $andar;
        $this -> descricao              = $descricao;
        $this -> imagem                 = $imagem;
        $this -> cor                    = $cor;
        $this -> status_sala            = $status_sala;
        $this -> nome                   = $nome;
        $this -> ativo_desativo         = $ativo_desativo;
        $this -> funcionamento          = $funcionamento;
    }


    //CREATE
    public function cadastrar() : bool
    {
        $objBanco = new Banco('Cadastro_sala');
        $objBanco -> insert(['id_cadastro_checklist' => $this -> id_cadastro_checklist,
                            'id_cadastro_usuario'    => $this -> id_cadastro_usuario,
                            'andar'                  => ucfirst(strtolower($this -> andar)),
                            'descricao'              => ucfirst(strtolower($this -> descricao)),
                            'imagem'                 => $this -> imagem,
                            'cor'                    => $this -> cor,
                            'status_sala'            => $this -> status_sala,
                            'nome'                   => ucfirst(strtolower($this -> nome)),
                            'ativo_desativo'         => $this -> ativo_desativo,
                            'funcionamento'          => $this -> funcionamento
                            ]);
        return true;
    }


    //READ
    public static function getDados()
    {
        $obj_banco = new Banco('Cadastro_sala');

        $salas = $obj_banco -> select() -> fetchAll(PDO::FETCH_ASSOC);

        return $salas;
    }


    //READ
    public static function getDadosById($id_sala)
    {
        $objBanco = new Banco('Cadastro_sala');
        $dados = $objBanco -> select("id_cadastro_sala = ".$id_sala) -> fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }


    //UPDATE
    public function setDados($id = null, $dados = []) : bool
    {
        //var_dump($dados);exit;
        $obj_banco = new Banco('Cadastro_sala');

        $obj_banco -> update('id_cadastro_sala = "'.$id.'"', ['nome'                      => $dados['nome'],
                                                            'andar'                       => $dados['andar'],
                                                            'id_cadastro_checklist'       => $dados['checklist'],
                                                            'descricao'                   => $dados['descricao'],
                                                            'imagem'                      => $dados['imagem'],
                                                            'cor'                         => $dados['cor'],
                                                            'ativo_desativo'              => $dados['ativo_desativo'],
                                                            'funcionamento'               => $dados['funcionamento']
                                                            ]);
        return true;
    }
}
