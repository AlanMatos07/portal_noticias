<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tech News</title>
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
                    
                    <!-- Notícia 1 -->
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
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius magna lorem, et elementum augue eleifend ut. Nullam eleifend ultrices facilisis. Aliquam non ex id mi auctor gravida. In hac habitasse platea dictumst. Curabitur convallis volutpat arcu a elementum. Donec cursus risus a justo imperdiet cursus. In risus augue, congue id tempor eget, commodo non felis. Fusce quis risus sit amet massa finibus bibendum nec sit amet felis. Donec aliquam, felis suscipit dignissim suscipit, odio lacus euismod metus, id tincidunt sem velit vel magna.

Ut nunc augue, viverra eu pharetra ut, feugiat eget dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed lacinia, odio eu congue interdum, massa purus cursus velit, quis ornare elit tortor at turpis. Nam quis tempor nulla. Sed porta elit dolor, ac porta ex tincidunt id. Fusce gravida lacus non venenatis laoreet. Donec vitae tellus commodo, efficitur nibh non, blandit diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean sit amet condimentum nibh. Vivamus vehicula finibus lacus, eleifend ullamcorper magna. Suspendisse eget venenatis metus, ut pulvinar orci. Sed finibus tincidunt elementum. Cras lorem justo, luctus sed molestie vel, ultricies ut quam.
                                
                            </p>
                        </div>
                    </article>
                </section>

                <!-- Últimas notícias -->
                <aside class="aside">
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