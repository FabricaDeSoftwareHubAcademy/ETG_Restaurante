
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
<link rel="stylesheet" href="../assets/css/cadastrar_checklist_preaula.css">
<script src="../assets/js/checklist.js"></script>


<body class="container_checklist">


        <h1 class="titulo_checklist">Checklist Pré-Aula</h1>
        <h2 class="nome_sala">Cozinha Didática 2</h2>

        <main class="main_checklist">
            <form action="checklist_pre_aula.php" method="POST">
                <div class="input_checklist">
                    <label class="label_checklist" for="data">Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?</label>

                        <div class="row">
                            <div class="checkmark" onclick="check(false)">
                                <i id="red" class="bi bi-x"></i>
                            </div>

                            <div class="checkmark" onclick="check(true)">
                                <i id="green" class="bi bi-check"></i>
                            </div>

                        </div>
                </div>
               
                <div class="input_checklist">
                    <label class="label_checklist" for="data">Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?</label>

                        <div class="row">
                            <div class="checkmark" onclick="check(false)">
                                <i id="red" class="bi bi-x"></i>
                            </div>

                            <div class="checkmark" onclick="check(true)">
                                <i id="green" class="bi bi-check"></i>
                            </div>

                        </div>
                </div>
                <div class="input_checklist">
                    <label class="label_checklist" for="data">Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?</label>

                        <div class="row">
                            <div class="checkmark" onclick="check(false)">
                                <i id="red" class="bi bi-x"></i>
                            </div>

                            <div class="checkmark" onclick="check(true)">
                                <i id="green" class="bi bi-check"></i>
                            </div>

                        </div>
                </div>
                <div class="input_checklist">
                    <label class="label_checklist" for="data">Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?</label>

                        <div class="row">
                            <div class="checkmark" onclick="check(false)">
                                <i id="red" class="bi bi-x"></i>
                            </div>

                            <div class="checkmark" onclick="check(true)">
                                <i id="green" class="bi bi-check"></i>
                            </div>

                        </div>
                </div>
              
                </div>
                <div class="input_checklist">
                    <label class="label_checklist" for="data">Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?</label>

                        <div class="row">
                            <div class="checkmark" onclick="check(false)">
                                <i id="red" class="bi bi-x"></i>
                            </div>

                            <div class="checkmark" onclick="check(true)">
                                <i id="green" class="bi bi-check"></i>
                            </div>

                        </div>
                </div>
                <div class="input_checklist">
                    <label class="label_checklist" for="data">Os equipamentos e /ou utensílios estão limpos, organizados e em condições de uso?</label>

                        <div class="row">
                            <div class="checkmark" onclick="check(false)">
                                <i id="red" class="bi bi-x"></i>
                            </div>

                            <div class="checkmark" onclick="check(true)">
                                <i id="green" class="bi bi-check"></i>
                            </div>

                        </div>
                </div>
                

                
                
            </form>
            <div class="botoes">

                    <!--Botão Voltar-->
                    <div class="botao-padrao-voltar">
                        <a href="gerenc_perfis.php"class="botao-voltar-submit">CANCELAR</a>
                    </div>

                    <!--Botão Salvar-->
                    <div class="botao-padrao-voltar">
                        <a href="#"><input name="botao_salvar" type="submit" class="botao-salvar-submit"  value="CONFIRMAR" onclick="abrir_modal()"></a>
                    </div>
        </main>

</body>
