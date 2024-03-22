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
<body class="body">

    <main class="main_listar_relatorio">

        <section class="section_titulo">
            <h1>Listar Relatórios</h1>
        </section>

            <section class="titulos d-flex justify-content-start align-items-end">
            <div class="d-flex flex-column">
                <a class="btn btn-primary mb-2" href="index.php">Relatórios</a>
                <a class="btn btn-primary" href="login.html">Atualização</a>
            </div>
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
                                
                                <?=$status_sala?>
                            </td>

                            <td>
                            <?=$data?>
                            </td>

                            <td>
                                <?=$status_sala?>
                            </td>

                            <td>
                                <?=$docente?>
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


