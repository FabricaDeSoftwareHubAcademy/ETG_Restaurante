
<?php


if(!isset($_SESSION['num_matricula_logado'])){
 
    header('Location: ../');
}
include_once("../includes/menu.php");

include_once("../includes/menu.php");

require __DIR__."/../vendor/autoload.php";
use App\Entity\Sala;
use App\Entity\CadastroChecklist;
use App\Entity\Imagens;

$objCadastroChecklist = new CadastroChecklist();
$dados = $objCadastroChecklist -> getDados();
$options = '';
foreach ($dados as $row_check ){
    $options .= '<option  class="ops" value="'.$row_check['id_cadastro_checklist'].'"> '.$row_check['nome'].' </option>';
}

if (isset(  $_POST      ['nome_sala'],
            $_POST      ['andar_sala'],
            $_POST      ['checklist'],
            $_POST      ['descricao_sala'],
            $_POST      ['cor_sala'],
            $_POST      ['btn_submit']    
))
{
            //logica do Json das checkbox de periodo
            $dias_funcionamento = array("segunda" => ($_POST['segunda'] == 'on' ? 'sim' : 'nao'),

                                        "terca" => ($_POST['terca'] == 'on' ? 'sim' : 'nao'),

                                        "quarta" => ($_POST['quarta'] == 'on' ? 'sim' : 'nao'),

                                        "quinta" => ($_POST['quinta'] == 'on' ? 'sim' : 'nao'),

                                        "sexta" => ($_POST['sexta'] == 'on' ? 'sim' : 'nao'),

                                        "sabado" => ($_POST['sabado'] == 'on' ? 'sim' : 'nao'),

                                        "turnos" => array(
                                            'matutino'          => ($_POST['matutino'] == 'on' ? 'sim' : 'nao'),
                                            'vespertino'        => ($_POST['vespertino'] == 'on' ? 'sim' : 'nao'),
                                            'noturno'           => ($_POST['noturno'] == 'on' ? 'sim' : 'nao')
                                                        )
                                        );
            $dias_funcionamentoJson = json_encode($dias_funcionamento);

            //var_dump($dias_funcionamentoJson);exit;
            if (!empty($_FILES['imagem_sala']['name']))
            {
                $objImagem = new Imagens;
                $imagem = $objImagem -> storeImg($_FILES['imagem_sala']['name']);
                
            }
            
            $obj_sala = new Sala(
                null,
                $_POST['checklist'],
                $_SESSION['num_matricula_logado'],
                $_POST['andar_sala'],
                $_POST['descricao_sala'],
                $imagem,
                $_POST['cor_sala'],
                null,
                $_POST['nome_sala'],
                null,
                $dias_funcionamentoJson
                
            );
            if($obj_sala -> cadastrar())
            {
                die('cadastrou');
            }
            else
            {
                die('nao cadastrou');
            }
            
        }   
        ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de salas</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/cadastro_edicao_salas.css"> 
    <script src="https://code.jquery.com/jquery-3.7.0.js"integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    
</head>

<body class="tela-cadastro-salas">
        <?php 
            include_once("../includes/menu.php");
            include_once("../modal/modal_verification.php");
        ?> 

    <section class="container">
   
        <div class="container-cadastro-salas">
            <div class="wrap-cadastro-salas">

                <form class="cadastro-sala-form" method="POST" enctype="multipart/form-data" >

                    

                    <div class="titulo_de_cadastro">

                        <h1> Cadastro De Salas </h1>
                        
                    </div>
                    
                    <div class="wrap-input margin-top-35 margin-bottom-35">



                        <div class="input_group field">
                            <input type="input" class="input_field" placeholder="Name" required="" name="nome_sala" maxLength="32">
                            <label for="name" class="input_label">Nome Da Sala </label> <!--Alterar para o nome do input-->
                        </div>



                    </div>


                    <div class="dropdown-ck">

                        <select name="andar_sala" class="option">

                            <option type="input" name="andar_sala">Primeiro Andar</option>
                            <option type="input" name="andar_sala">Segundo Andar</option>
                            <option type="input" name="andar_sala">Terceiro Andar</option>
                            <option type="input" name="andar_sala">Quarto Andar</option>
                            <option type="input" name="andar_sala">Quinto Andar</option>

                            
                        </select> 
                    
                    
                    </div>

                    <div class="barra"></div>

                    
                    <div class="dropdown-ck">

                        <select name="checklist" class="option">
                        <option>Selecione O Checklist </option>

                            <?=$options?>
                            
                        </select> 
                                     
                    </div>

                    <div class="barra"></div>

                    <h3 class="alinar_titulo_h3">Dias De Funcionamento </h3>

                    <div class="area_Dos_check_box">
                        
                        <div class="Check_Box_individual">
                            <p class="coisa_tag_p">Segunda</p>
                            <input name="segunda" class="espaco_check_box" type="checkbox" />
                        </div>

                        <div class="Check_Box_individual">
                            <p class="coisa_tag_p">Terça</p>
                            <input name="terca" class="espaco_check_box" type="checkbox" />
                        </div>

                        <div class="Check_Box_individual">
                            <p class="coisa_tag_p">Quarta</p>
                            <input name="quarta" class="espaco_check_box" type="checkbox" />
                        </div>

                        <div class="Check_Box_individual">
                            <p class="coisa_tag_p">Quinta</p>
                            <input name="quinta" class="espaco_check_box" type="checkbox" />
                        </div>

                        <div class="Check_Box_individual">
                            <p class="coisa_tag_p">Sexta</p>
                            <input name="sexta" class="espaco_check_box" type="checkbox" />
                        </div>

                        <div class="Check_Box_individual">
                            <p class="coisa_tag_p">Sabado</p>
                            <input name="sabado" class="espaco_check_box" type="checkbox" />
                        </div>

                        
                    </div>


                    <h3 class="alinar_titulo_h3">Turnos De Funcionamento </h3>
                    <div class="area_Dos_check_box">

                        
                        
                        <div class="Check_Box_individual">
                            <p class="coisa_tag_p">Matutino</p>
                            <input name="matutino" class="espaco_check_box" type="checkbox" />
                        </div>

                        <div class="Check_Box_individual">
                            <p class="coisa_tag_p">Vespertino</p>
                            <input name="vespertino" class="espaco_check_box" type="checkbox" />
                        </div>

                        <div class="Check_Box_individual">
                            <p class="coisa_tag_p">Noturno</p>
                            <input name="noturno" class="espaco_check_box" type="checkbox" />
                        </div>

                    </div>
                    
                    <div class="img-area"> 
                        
                        <div class="text-area">
                            <span id=descrição>Descrição</span>
    
                            <textarea  placeholder="Area de texto " name="descricao_sala" id="" cols="70" rows="10" class="text-descricao"></textarea>
                        </div>
                        <div class="cor-sala">
                            <div class="alinar-img">

                                <div class="coisas_enilda">
                                    <span id="img-text"> Insira a imagem : </span>

                                    <label id="botão-img" for="arquivo" >Selecionar Foto</label>
                                </div>
                                
                                <input type="file" name="imagem_sala" id="arquivo" >

                                <div class="area-anexo">

                                    
                                    <img id="camera_imagem" class="imagem_aparecer" src="../assets/imgs/others/camera.png" alt="">

                                    <img  id="imagem_agora_vai" class="novo_css_imagem" src="" alt="">

                                </div>
                            </div>    
                            <div class="alinar-botao-cor">
                                <span id="selecao-cor-text">Cor da sala : </span> 
                                <input class="botao-cor" name="cor_sala" type="color">
                            </div>
                        </div>
      
                        
                            
                                                                                                           
                    </div>
                    
                    <div class="alinar-botoes">

                        <div class="botao-padrao-voltar">
                            <a href="#"><input type="submit" class="botao-voltar-submit"  value="VOLTAR"></a>
                        </div>
                        
                        <div class="botao-padrao-cadastrar">
                            <a href="#"><input name="btn_submit" type="submit" class="botao-cadastrar-submit" id="botao-cadastrar-submit" value="CADASTRAR"></a>
                        </div>
                        

                    </div>  
                
                    
                </form>  
            </div>
        </div>
    </section>


<script>




const remover = document.querySelector(".imagem_aparecer");
const novo_css = document.querySelector(".novo_css_imagem");
$(document).ready(function() {
    $('#arquivo').on('change', function(e) {
        var file = e.target.files[0];
        var reader = new FileReader();
        reader.onload = function(e) {
            var fileExtension = file.name.split('.').pop().toLowerCase();
            var aceitados = ['jpg', 'jpeg', 'gif', 'png'];
            if (aceitados.includes(fileExtension)) {
                $('#imagem_agora_vai').attr('src', e.target.result);
                remover.classList.add("active");
                novo_css.classList.add("active");
            } else {
                // Caso a extensão do arquivo não seja suportada, você pode adicionar um comportamento específico aqui, como exibir uma mensagem de erro.
                console.log('Extensão de arquivo não suportada.');
            }
        }
        reader.readAsDataURL(file);
    });
});
</script>


    
</body>
</html>