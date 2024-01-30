<?php
namespace App\Entity; 
use \App\Db\Banco;
use Exception;
use PDO;

class Pergunta
{
    
    private $descricao;
    
    public function __construct($descricao = null)
    {
        $this -> descricao = $descricao;
    }

    //CREATE
    public function cadastrar($tipo)
    {   
        try{


            $obj_banco = new Banco('cadastro_pergunta');
            $dados = [
                        'descricao' => $this -> descricao,
                        'tipo' => $tipo
                     ];
    
    
            // atualmente retonando true or false  
            if($obj_banco -> insert($dados))
            {
                return true;
            }
            else
            {
                return false;
            }

        }catch(Exception $e){

            echo(json_encode($e->getMessage()));

        }
        
    }

   
     

    public static function returnNotDuplicatedIds($dataFromTable) {
        $existingIds = Pergunta::sumIds(dataFromTable: $dataFromTable);
        $idsSepareted = array_unique($existingIds);
        return $idsSepareted;




        // $arrayCorrected = array();
        // foreach ($dataFromTable as $row) {
        //     if (count($existingIds) < 1) {
        //         $existingIds[] = $row["id_pergunta"];
        //         continue;
        //     } else {
        //         $idFromTable = $row["id_pergunta"];
        //         if(array_search($idFromTable, $existingIds)) {
        //             continue;
        //         }
        //         $arrayCorrected[] = $row;
        //     }
        //     return $arrayCorrected;     
        // }
    }
    
    public static function sumIds($dataFromTable) {
        $existingIds = array();
        foreach ($dataFromTable as $row) {
            $existingIds[] = $row["id_pergunta"];
        }
        return $existingIds;
    }

    public static function CheckIfIdsAreEqual($ids) {
        $return = array_unique($ids);
        return $return;
    }



    //READ
    //de GetPerguntasById para GetDadosById
    public static function getDadosById($id)
    {
        $obj_banco = new Banco('cadastro_pergunta');

        $dados = $obj_banco->select('id_cadastro_pergunta = '.$id);

        if($dados -> rowCount() > 0)
        {
            return $dados;
        }
        else
        {
            return false;
        } 
    }

    public static function getPerguntas()
    {
        $obj_banco = new Banco('cadastro_pergunta');
        $dados = $obj_banco->select(order:"id DESC");
        if($dados)
        {
            return $dados->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            return false;
        } 
    }

    public static function filter($nome)
    {
        $obj_banco = new Banco('cadastro_pergunta');
        $dados = $obj_banco -> select('descricao LIKE "%' . $nome . '%"');
        return $dados -> fetchAll(PDO::FETCH_ASSOC);
        # SELECT * FROM pergunta WHERE descricao LIKE '%os equipamentos%';
    }

    public static function excluirPergunta($id){

        try{
            
            $obBanco = new Banco('relacao_pergunta_checklist');
 
 
            $perguntas = $obBanco->select('id_pergunta = "'.$id.'"'); 
            if($perguntas->rowCount() == 0){

                $obj_banco = new Banco('cadastro_pergunta');
                $obj_banco->delete($id,'id')->fetchAll(PDO::FETCH_ASSOC);
                return true;

            }else{
                return false;
            }

            

        }catch(Exception $e){

            echo($e->getMessage());
            return ($e->getMessage());
        }


    }
    public static function updatePergunta($id,$tipo,$descricao){


        try{

            $dados_update = [
                'descricao' => $descricao,
                'tipo'=> $tipo
                
            ];
            
            $obj_banco = new Banco('cadastro_pergunta');

            $obj_banco->update('id = "'.$id.'"',$dados_update );

            return true;

        }catch(Exception $e){

            echo($e->getMessage());
            return ($e->getMessage());
        }

    }
}