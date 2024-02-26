
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/relatorio.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="../assets/js/relatorio.js" defer></script>
    <script src="../assets/js/relatorio.js"></script>

<body class="paidetodos">
<main class="report_principal">
        <h1 class="titulo_filtros">Filtros</h1>

        <section class="teste">
            <div class="testePrimeiraSecao">

            <ul id="accordion_salas" class="accordion">
                    <li>
                    <div class="link"><i class="bi bi-door-open"></i>Salas<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">
                        <li><a href="#">Cozinha Didatica0</a></li>
                    </ul>
                    </li>
                </ul>

                <ul id="user_relatorio" class="user-filter">
                    <li>
                    <div class="user-report"><i class="bi bi-person-square"></i>Usuários<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu_users">
                        <li><a href="#">Docente</a></li>
                        <li><a href="#">Administrador</a></li>
                        <li><a href="#">Logistica</a></li>
                    </ul>
                    </li>
                </ul>


                <ul id="periodo" class="periodo">
                    <li>
                        <div class="periodo_report"><i class="bi bi-clock"></i>Periodo<i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu_report">
                            <li><a href="#">Matutino</a></li>
                            <li><a href="#">Vespertino</a></li>
                            <li><a href="#">Noturno</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="testeSegundaSecao">
                <div class="form-group">
                    <div class="input-container">
                        <label for="init_date">Data inicial</label>
                        <input type="date" class="data_inicial" id="init_date" required>
                    </div>
                </div>
            
                <div class="form-group">
                    <div class="input-container">
                        <label for="close_date">Data final</label>
                        <input type="date" class="data_final" id="close_date" required>
                    </div>
                    <div class="filter-relatorio">
                        <div class="btn-filter">
                            <button type="submit" class="limpar-filtros">Limpar filtros</button>
                            <button type="submit" class="filtros">Filtrar</button>
                        </div>

                    </div>
                </div>
            </div>

        </section>


       
            <div class="card_grafic">
                    <div class="grafico_conf">
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="grafico_qtd">
                        <canvas id="Chart"></canvas>
                    </div>
   
                <section class="area-botao">
                    <div class="div-relatorio">
                        <button class="btn-relatorio" type="submit">Gerar relatório</button>  

                </section>
             
            </div>
   
    </main>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="../assets/js/relatorio.js" defer></script>
</body>

</html>
