<link rel="stylesheet" href="../assets/css/listar_checklist_concluidas.css">
<body class="body-tela">
    <main class="main_page">
        <div class="container_title">
            <h1>Listar Checklist Concluidas</h1>
        </div>
        <!-- <section class='search'>
            <div class="search_input">
                <input type="text" placeholder="Pesquisar">
            </div>
            <div class="search_btn">
                <button>Pesquisar</button>
            </div>
        </section> -->
        <section class="container">
            <section class="lista">
                <a href="#" class="card">
                    <div class="card_img">
                        <img src="" alt="foto da sala">
                    </div>
                    <div class="card_info">
                        <div class="card_text">
                            <div class="card_header_title">
                                <h3>sala 1</h3>
                            </div>
                            
                            <div class="card_header_subtitle">
                                <p>aberto às 10:10:10</p>
                                <p>fechado às 10:10:10</p>
                            </div>

                        </div>

                    </div>
                </a>
                <?php echo $list; ?>
            </section>

        </section>
    </main>
</body>