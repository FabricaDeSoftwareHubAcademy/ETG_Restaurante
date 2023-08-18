<?php
namespace App\Entity;
class Imagens
{
    // return STRING
    static function storeImg($param_nome_arquivo) 
    {
        $nome_arquivo = $param_nome_arquivo;
        $nova_string = uniqid();
        //se o arquivo que o usuario inserir for valido (jpg, jpeg, png, gif)
        if (preg_match('/\.(png|jpe?g|gif)$/i', $nome_arquivo, $matches))
        { 
            // $matches =  array(2) { [0]=> string(4) ".jpg" [1]=> string(3) "jpg" }
            // ela armazena a extensao da imagem 
            $extensao_encontrada = $matches[0]; // jpg, jpeg, png
            $aleatorizador = $nova_string.$extensao_encontrada;
            $novo_nome_arquivo = str_replace($extensao_encontrada,
                                            $aleatorizador,
                                            $nome_arquivo); //nome_da_imagem 
            
            $from = $_FILES['imagem_sala']['tmp_name'];
            $to = '../storage/salas/';
            //echo $from . '<br>' . $to . '<br>' . $novo_nome_arquivo;exit;
            move_uploaded_file($from, $to.$novo_nome_arquivo); //movendo o arquivo para pasta
            return $novo_nome_arquivo;
        }
    }
}