<link rel="stylesheet" href="../assets/css/listar_checklist_concluidas.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
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
                <!-- <a href="#" class="card">
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
                </a> -->
                <?php 
                if(!isset($_GET['pagina'])){
                    $_GET['pagina'] = 0;
                }
                $length = count($arr);
                echo ($_GET['pagina']<=$length) ? $arr[$_GET['pagina']] : '<h1>nenhum registro encontrado</h1>' ; 
                ?>
            </section>
            <div class="pagination">
                <?php
                if($_GET['pagina'] > 0){
                    echo '<a href="listar_checklist_concluidas.php?pagina=0"><i class="bi bi-chevron-double-left"></i></a>';
                    echo '<a href="listar_checklist_concluidas.php?pagina='.($_GET['pagina']-1).'"><i class="bi bi-chevron-left"></i></i></a>';
                }

                // echo '<input type="number" vlaue="'.$_GET['pagina']+1.'">'.$length;

                // echo $_GET['pagina']+1,'/', $length;

                echo "<input type='number' value='".$_GET['pagina']+1,"' class='input_pagination'><div>/$length</div>";

                echo '<button type="button" class="btn_pagination">ir</button>';
                if($_GET['pagina'] < $length-1){
                    echo '<a href="listar_checklist_concluidas.php?pagina='.($_GET['pagina']+1).'"><i class="bi bi-chevron-right"></i></a>';
                    echo '<a href="listar_checklist_concluidas.php?pagina='.($length-1).'"><i class="bi bi-chevron-double-right"></i></a>';
                }
                ?>
            </div>
        </section>
    </main>
    <script>
        var btn = document.querySelector('.btn_pagination');
        btn.addEventListener('click',pagination)
        function pagination(){
            var input = document.querySelector('.input_pagination');
            var pagina = input.value;
            location.href = 'listar_checklist_concluidas.php?pagina='+(pagina-1);
        }
    </script>
</body>