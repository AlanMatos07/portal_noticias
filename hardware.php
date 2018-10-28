<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Hardware</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/normalize.css" />
        <link href="https://fonts.googleapis.com/css?family=Oxygen|Ubuntu" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    </head>
    <body>
        <div class="container">
            <nav class="navigation-bar" id="tech-news">
                <div class="toggle" onclick="openNav()">
                    <i class="fas fa-bars menu" aria-hidden="true"></i>
                </div>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="index.php">Principal</a>
                    <a href="hardware.php">Hardware</a>
                    <a href="software.php">Software</a>
                </div>
                <h1 class="logo"> 
                    Tech<span id="logo-span">N</span>ews 
                </h1>
                <div class="search">
                    <i class="fas fa-search" aria-hidden="true"></i>
                </div>
            </nav>

            <main class="main-content" id="main">
                <section class="main-news">
                    <?php 
                        $connect = mysqli_connect("localhost", "root", "", "portal_alan");

                        // Pesquisa campos da noticia
                        $sql_query_not = "SELECT manchete_not, resumo_not, categoria_not,
                            imagem_not FROM noticias WHERE categoria_not = 'hardware'
                            ORDER BY cod_not DESC";
                        
                        // Tabela de resultado dos registros
                        $sql_query_not_result = mysqli_query($connect, $sql_query_not);

                        // Verifica se há alguma notícia
                        if ($sql_query_not_result) {
                    ?>
                    <!-- Notícia 1 -->
                    <article class="news">
                        <?php 
                            // Enquanto tiver mais de uma notícia
                            while ($news_query = mysqli_fetch_row($sql_query_not_result)) {
                        ?>

                        <figure>
                            <img class="news-img" src="<?php echo "$news_query[3]"; ?>">
                        </figure>
                        <header class="news-title">
                            <h3><?php echo "$news_query[0]"; ?></h3>
                        </header>
                        <div class="date-section">
                            <div class="date">25/09/2018</div>
                            <div class="section"><?php echo "$news_query[2]"; ?></div>
                        </div>
                        <div class="journalist">
                            <img src="imagens/geforce.jpg" class="photo-journalist">
                            <p class="name-journalist">Nome do jornalista</p>
                        </div>
                        <div class="post">
                            <p>
                                <?php echo "$news_query[1]"; ?> <br>
                                <a class="more" href="#">Continuar lendo...</a>
                            </p>
                        </div>

                        <?php 
                            }
                        }
                        ?>
                    </article>

                    <!-- Notícia 2 -->
                    <article class="news">
                        <figure>
                            <img class="news-img" src="imagens/geforce.jpg">
                        </figure>
                        <header class="news-title">
                            <h3>Nvidia lança nova placa de vídeo: GeForce RTX 2080 Ti</h3>
                        </header>
                        <div class="date-section">
                            <div class="date">25/09/2018</div>
                            <div class="section">Hardware</div>
                        </div>
                        <div class="journalist">
                            <img src="imagens/geforce.jpg" class="photo-journalist">
                            <p class="name-journalist">Nome do jornalista</p>
                        </div>
                        <div class="post">
                            <p>
                                A NVIDIA GeForce RTX 2080 Ti é uma das placas estreantes da série 20 de GPUs da NVIDIA, sendo o novo modelo topo de linha voltado para gamers que buscam alta performance, <br>
                                <a class="more" href="#">Continuar lendo...</a>
                            </p>
                        </div>
                    </article>

                    <!-- Notícia 3 -->
                    <article class="news">
                        <figure>
                            <img class="news-img" src="imagens/geforce.jpg">
                        </figure>
                        <header class="news-title">
                            <h3>Nvidia lança nova placa de vídeo: GeForce RTX 2080 Ti</h3>
                        </header>
                        <div class="date-section">
                            <div class="date">25/09/2018</div>
                            <div class="section">Hardware</div>
                        </div>
                        <div class="journalist">
                            <img src="imagens/geforce.jpg" class="photo-journalist">
                            <p class="name-journalist">Nome do jornalista</p>
                        </div>
                        <div class="post">
                            <p>
                                A NVIDIA GeForce RTX 2080 Ti é uma das placas estreantes da série 20 de GPUs da NVIDIA, sendo o novo modelo topo de linha voltado para gamers que buscam alta performance, <br>
                                <a class="more" href="#">Continuar lendo...</a>
                            </p>
                        </div>
                    </article>
                </section>

                <aside class="aside">
                    <!-- Últimas notícias -->
                    <div class="article-group">
                        <h4>Últimas notícias</h4>
                    
                        <ul class="news-list">
                            <li class="news-items">
                                <p>
                                    <a href="#">
                                        <time class="time">18:40</time>
                                        As vítimas podem desenvolver doenças psíquicas como a depressão, chegando até a pensamentos suicidas
                                    </a>
                                </p>
                            </li>
                            <li class="news-items">
                                <p>
                                    <a href="#">
                                        <time class="time">15:40</time>
                                        As vítimas podem desenvolver doenças psíquicas como a depressão, chegando até a pensamentos suicidas
                                    </a>
                                </p>
                            </li>
                            <li class="news-items">
                                <p>
                                    <a href="#">
                                        <time class="time">15:40</time>
                                        As vítimas podem desenvolver doenças psíquicas como a depressão, chegando até a pensamentos suicidas
                                    </a>
                                </p>
                            </li>
                            <li class="news-items">
                                <p>
                                    <a href="#">
                                        <time class="time">15:40</time>
                                        As vítimas podem desenvolver doenças psíquicas como a depressão, chegando até a pensamentos suicidas
                                    </a>
                                </p>
                            </li>
                            <li class="news-items">
                                <p>
                                    <a href="#">
                                        <time class="time">15:40</time>
                                        As vítimas podem desenvolver doenças psíquicas como a depressão, chegando até a pensamentos suicidas
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </aside>
            </main>

            <footer class="footer">
                <h1> 
                    <a href="index.php" class="logo-footer">Tech<span id="logo-span">N</span>ews</a>
                </h1>
                <div class="items">
                    <ul class="list">
                        <li class="list-items">
                            <a href="index.php">Principais notícias</a>
                        </li>
                        <li class="list-items">
                            <a href="hardware.php">Hardware</a>
                        </li>
                        <li class="list-items">
                            <a href="software.php">Software</a>
                        </li>
                    </ul>
                </div>
                <div class="items copy">
                    <p>COPYRIGHT &copy; 2018 Alguns direitos reservados</p>
                </div>
            </footer>
        </div>

        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "100%";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>
    </body>
</html>