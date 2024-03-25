<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="../assets/css/listar_relatorio.css">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="body-listar-relatorio">

    <main class="main_listar_relatorio">

        <section class="section_titulo">
            <h1>Listar Relatórios</h1>
        </section>

        <section class="titulos d-flex justify-content-start align-items-end">
        <a class="btn btn-dark me-2" href="index.php">Relatórios</a>
        <a class="btn btn-dark" href="login.html">Atualização</a>
    </section>


            <section class="section_table">


                <div class="container d-flex p-5">
                    <table class="table table-white table-striped w-100 h-100">
                        <thead>
                            <tr>
                                <th id="txt-titulo" scope="col">Nome da sala</th>
                                <th id="txt-titulo" scope="col">Status</th>
                                <th id="txt-titulo" scope="col">Datas</th>
                                <th id="txt-titulo" scope="col">Intervenção</th>
                                <th id="txt-titulo" scope="col">Docente</th>
                            </tr>
                        </thead>
                        <!-- Restante do conteúdo da tabela -->
                        <tbody>

                            <td>
                                <?=$sala_lista?>
                            </td>
                            <td>
                                <div class="div-td">
                                    <i class="bi bi-circle-fill"> Em atraso</i>
                                    <p class="p-status">Atualização de Status...</p>
                                </div>
                            </td>
                            <td>
                                <div class="div-td">
                                    <p class="p-data">00/00/0000</p>
                                </div>
                            </td>
                            <td>
                                <div class="div-td">
                                    <div class="progress-bar">
                                        <div class="progress"></div>
                                    </div>
                                    <p class="p-progress">Aguardando Logística</p>
                                </div>
                            </td>
                            <td>
                                <div class="div-td">
                                   <p class="p-docente">nome_docente</p>
                                </div>
                            </td>
                            
                        </tbody>

                        <tbody>
                        <td>
                                <div class="div-td">
                                    <img src="../assets/imgs/others/camera.png" alt="img" class="img-td">
                                    <p>Nome da sala</p>
                                </div>
                            </td>
                            <td>
                                <div class="div-td">
                                    <i class="bi bi-circle-fill-yellow"> Em alerta</i>
                                    <p class="p-status-alerta">Atualização de Status - 10 jun - Cheklist não foi finalizado pelo docente ...</p>
                                </div>
                            </td>
                            <td>
                                <div class="div-td">
                                    <p class="p-data">00/00/0000</p>
                                </div>
                            </td>
                            <td>
                                <div class="div-td">
                                    <div class="progress-bar-alerta">
                                        <div class="progress-alerta"></div>
                                    </div>
                                    <p class="p-progress">Resolvido com intervenção</p>
                                </div>
                            </td>
                            <td>
                                <div class="div-td">
                                   <p class="p-docente">nome_docente</p>
                                </div>
                            </td>
                        </tbody>

                        <tbody>
                        <td>
                                <div class="div-td">
                                    <img src="../assets/imgs/others/camera.png" alt="img" class="img-td">
                                    <p>Nome da sala</p>
                                </div>
                            </td>
                            <td>
                                <div class="div-td">
                                    <i class="bi bi-circle-fill-green"> Em dia</i>
                                    <p class="p-status-dia">Atualização de Status - 10 jun</p>
                                </div>
                            </td>
                            <td>
                                <div class="div-td">
                                    <p class="p-data">00/00/0000</p>
                                </div>
                            </td>
                            <td>
                                <div class="div-td">
                                    <div class="progress-bar-dia">
                                        <div class="progress-dia"></div>
                                    </div>
                                    <p class="p-progress">Sem intervenção</p>
                                </div>
                            </td>
                            <td>
                                <div class="div-td">
                                   <p class="p-docente">nome_docente</p>
                                </div>
                            </td>
                        </tbody>

                    </table>
                </div>


    </div>

    
    
    
    
    
</section>


</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>


