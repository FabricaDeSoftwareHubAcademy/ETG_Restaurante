<?php
require_once("../includes/menu.php");
require __DIR__."/../vendor/autoload.php";

$obj_sala = new App\Entity\Sala;
$obj_imagem = new App\Entity\Imagens;

use App\Entity\CadastroChecklist; 
$objCadastroChecklist = new CadastroChecklist();


if (isset($_GET['id_sala']))
{
    //var_dump($TESTE);exit;  
    $dados_sala = $obj_sala::getById($_GET['id_sala']);
    //var_dump($dados_sala[0]['ativo_desativo']);exit;
}        

$options = '';
$checklists = array();  
$dados = $objCadastroChecklist -> getDados();

foreach ($dados as $row_check)
{
    $checklists[$row_check['id_cadastro_checklist']] = $row_check['nome']; 
    $options .= '<option  class="ops" value="'.$row_check['id_cadastro_checklist'].'"> '.$row_check['nome'].' </option>';
}
//var_dump($checklists);exit;
//var_dump($_FILES);exit;
if (isset($_POST['btn_submit']))
{
     
    if (!empty($_FILES['imagem_sala']['name']))
    {   
        //var_dump($_FILES);
        $novo_nome_imagem = $obj_imagem -> storeImg($_FILES['imagem_sala']['name']);
        
        
    }
    //var_dump($dados_sala[0]['ativo_desativo']);exit;
    
    if($obj_sala -> setData($_GET['id_sala'],
    [
        'nome'              =>  $_POST['nome_sala'],
        'andar'             =>  $_POST['andar_sala'],
        'checklist'         =>  $_POST['checklist'],
        'dias_de_funcionamento' => '',
        'turnos_de_funcionamento' => '',
        'descricao'         =>  $_POST['descricao_sala'],
        'imagem'            =>  (strlen($_FILES['imagem_sala']['tmp_name']) ? $novo_nome_imagem : $dados_sala[0]['imagem']),
        'cor'               =>  $_POST['cor_sala'],
        'ativo_desativo'    =>  (isset($_POST['ativo_desativo']) ? 1 : 0)
    ]))
    {
        die('funcionou');
    }
    else
    {
        die('algo deu errado -> POP UP');
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar salas</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https/cdnjs.cloudflare.comlibs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/cadastro_edicao_salas.css"> 
    <link rel="stylesheet" href="../includes/pop-ups/pop_ups_verification_sala/pop_ups_verification_sala.css">
    <script src="../includes/pop-ups/pop_ups_verification_sala/pop_ups_verification_sala.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="crossorigin="anonymous"></script>

    
</head>
<html>

<body class="tela-cadastro-salas"> 

    <section class="container">
        
        <div class="container-cadastro-salas">

            
            
            <div class="wrap-cadastro-salas">

                <form class="cadastro-sala-form" method="POST" enctype="multipart/form-data" >
                    <div class="titulo_de_cadastro">

                        <h1> Editar Sala </h1>
                        
                    </div>
                    
                    <div class="wrap-input margin-top-35 margin-bottom-35">



                        <div class="input_group field">
                            <input value="<?=$dados_sala[0]['nome']?>" type="input" class="input_field" placeholder="Name" required="" name="nome_sala">
                            <label for="name" class="input_label">Nome Da Sala</label> <!--Alterar para o nome do input-->
                        </div>



                    </div>
                    <div class="dropdown-ck">

                        <select name="andar_sala" class="option">
                            <?php
                                $andares = ['Primeiro andar', 'Segundo andar', 'Terceiro andar', 'Quarto andar', 'Quinto andar'];
                                foreach ($andares as $andar)
                                {
                                    if ($andar == $dados_sala[0]['andar'])
                                    {
                                        echo "<option value='$andar' selected>$andar</option>";
                                    }
                                    else
                                    {
                                        echo "<option value='$andar'>$andar</option>";
                                    }
                                }
                            ?>
                        </select> 
                    
                    
                    </div>

                    <div class="barra"></div>
                    
                    <div class="dropdown-ck">

                        <select name="checklist" class="option">
                        <?php
                                foreach ($checklists as $id => $nome)
                                {
                                    if ($id == $dados_sala[0]['id_cadastro_checklist'])
                                    {
                                        echo "<option name=\"checklist\" value='$id' selected>$nome</option>";
                                    }
                                    else
                                    {
                                        echo "<option name=\"checklist\" value='$id'>$nome</option>";
                                    }
                                }
                            ?>
                        </select> 

                    </div>

                        <div class="barra"></div>



                    
                        <h3 class="alinar_titulo_h3">Dias De Funcionamento </h3>

                        <div class="area_Dos_check_box">
                            
                            <div class="Check_Box_individual">
                                <p class="coisa_tag_p">Segunda</p>
                                <input name="seg" class="espaco_check_box" type="checkbox" />
                            </div>

                            <div class="Check_Box_individual">
                                <p class="coisa_tag_p">Terça</p>
                                <input name="ter" class="espaco_check_box" type="checkbox" />
                            </div>

                            <div class="Check_Box_individual">
                                <p class="coisa_tag_p">Quarta</p>
                                <input name="qua" class="espaco_check_box" type="checkbox" />
                            </div>

                            <div class="Check_Box_individual">
                                <p class="coisa_tag_p">Quinta</p>
                                <input name="qui" class="espaco_check_box" type="checkbox" />
                            </div>

                            <div class="Check_Box_individual">
                                <p class="coisa_tag_p">Sexta</p>
                                <input name="sex" class="espaco_check_box" type="checkbox" />
                            </div>

                            <div class="Check_Box_individual">
                                <p class="coisa_tag_p">Sabado</p>
                                <input name="sab    " class="espaco_check_box" type="checkbox" />
                            </div>

                            
                        </div>


                        <h3 class="alinar_titulo_h3">Turnos De Funcionamento </h3>
                        <div class="area_Dos_check_box">

                            
                            
                            <div class="Check_Box_individual">
                                <p class="coisa_tag_p">Matutino</p>
                                <input class="espaco_check_box" type="checkbox" />
                            </div>

                            <div class="Check_Box_individual">
                                <p class="coisa_tag_p">Vespertino</p>
                                <input class="espaco_check_box" type="checkbox" />
                            </div>

                            <div class="Check_Box_individual">
                                <p class="coisa_tag_p">Noturno</p>
                                <input class="espaco_check_box" type="checkbox" />
                            </div>

                        </div>
                        
                
                       

                    
                    <div class="img-area"> 
                        



                        <div class="text-area">
                            <span id=descrição>Descrição</span>
                            <script>
                                   
                            </script>
                            <textarea placeholder="Area de texto " name="descricao_sala" id="textareajs" cols="70" rows="10" class="text-descricao"><?=$dados_sala[0]['descricao']?></textarea>
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
                            
                        <div class="botao-on-off">

                            <div class="text-on-off">
                                Ativar/Desativar
                            </div>
                            <label class="switch">
                                <input name="ativo_desativo" type="checkbox">
                                <span class="slider"></span>
                            </label>

                        </div>
                         
                            

                               
        
                                

                    </div>
                    
                    <div class="alinar-botoes">

                        <div class="botao-padrao-voltar">
                            <a href="#"><input type="submit" class="botao-voltar-submit"  value="VOLTAR"></a>
                        </div>
                        
                        <div class="botao-padrao-cadastrar">
                            <a href="#"><input name="btn_submit" type="submit" class="botao-cadastrar-submit"  value="CADASTRAR"></a>
                        </div>
                        
                    </div>





                    
                
                </form>  
            </div>
        </div>
    </section>
    <script>
const remover = document.querySelector(".imagem_aparecer_editar");
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