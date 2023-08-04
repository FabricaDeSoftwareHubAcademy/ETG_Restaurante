<?php

require ("../vendor/autoload.php");
use App\Entity\Perfil;
use App\Entity\Usuario;

//pegando dados perfil
$objPerfil = new Perfil;
$dados_perfil = $objPerfil -> getDados();



$imprimir = '';
//var_dump($usuario_perfil);exit;
foreach ($dados_perfil as $row_perfil)
{
    $imprimir .= '
                    <li>
                        <div class="titulo_gp">
                            <div class="card_perfil">
                                <img src="../assets/imgs/icons/profile.png" alt="icone_perfil" id="icone_perfil">
                                <div class="card_nome">
                                    <h2 class="tipo_perfil">'.$row_perfil['nome_cargo'].'</h2>
                                    <h3 class="funcao"></h3>
                                </div>
                                <a href="../pages/edicao_perfil.php?id='.$row_perfil['id_cadastro_perfil'].'"><img src="../assets/imgs/icons/icon_editar.png" alt="icone_editar" class="icone_editar"></a> 
                                <i class="bi bi-trash"></i> 
                            </div>
                        </div>
                    </li>
                ';
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gerencimento_perfis</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../assets/css/estilo_gerenc_perfis.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    
    </head>
    <body class="tela_gerenciam_perfis">
        <main class="pai-de-todos">
                <?php
                //toma essa gambiarra ass luiz
                include_once("../includes/menu.php"); 
                ?>
            <form action="" method="GET">
                <div class="container_gp">
                    <h1 class="Perfis">Perfis</h1>
                        <ul>
                            <?=$imprimir?>
                        </ul>
                </div>
            </form>
            <div class="botoes">
                        <!--Botão Voltar-->
                        <div class="botao-padrao-voltar">
                            <a href="../pages/editar_salas.php"><input type="submit" class="botao-voltar-submit"  value="VOLTAR"></a>
                        </div>
                        <!--Botão Cadastrar Novo Perfil-->
                        <div class="botao-padrao-novo-perfil">
                            <a href="../pages/cadastro_perfil.php"><input type="submit" class="botao-novo-perfil-submit"  value="CADASTRAR PERFIL"></a>
                        </div>
            </div>
        </main>
    </body>
</html>