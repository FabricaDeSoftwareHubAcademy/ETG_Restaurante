<link rel="stylesheet" href="../assets/css/listar_checklist_concluidas.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
<body class="body-tela">
    <main class="main_page">
        <div class="container_title">
            <h1>Listar Checklist Encerrada</h1>
        </div>
        <section class="container">
                <!-- <section class='search'>
                    <div class="search_input">
                        <input type="text" placeholder="Pesquisar">
                    </div>
                    <div class="search_btn">
                        <button>Pesquisar</button>
                    </div>
                </section> -->
                <section class="lista">
                <?php 
                    echo $_GET['pagina']>$length? '<h1>nenhum registro encontrado</h1>' : $list;
                ?>
                </section>
            <div class="pagination">
                <?php
                    if($_GET['pagina'] > 1){
                        echo '<a href="listar_checklist_concluidas.php?pagina=1"><i class="bi bi-chevron-double-left"></i></a>';
                        echo '<a href="listar_checklist_concluidas.php?pagina='.($_GET['pagina']-1).'"><i class="bi bi-chevron-left"></i></i></a>';
                    }

                    echo "<input type='number' value='".$_GET['pagina'],"' class='input_pagination'><div>/$length</div>";

                    echo '<button type="button" class="btn_pagination">ir</button>';
                    
                    if($_GET['pagina'] < $length){
                        echo '<a href="listar_checklist_concluidas.php?pagina='.($_GET['pagina']+1).'"><i class="bi bi-chevron-right"></i></a>';
                        echo '<a href="listar_checklist_concluidas.php?pagina='.($length).'"><i class="bi bi-chevron-double-right"></i></a>';
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
            location.href = 'listar_checklist_concluidas.php?pagina='+pagina;
        }
    </script>
</body>