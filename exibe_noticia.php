<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exibir Notícia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="all" href="css/cadastro_altera_exclui.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/normalize.css" />
        <link href="https://fonts.googleapis.com/css?family=Oxygen|Ubuntu" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <main class="main">
                <aside class="aside">
                    <ul>
                        <li class="welcome-message">Olá, <?php include "valida_login.php";?></li>
                    </ul>
                    
                    <?php include "menu.php"; ?>

                    <p class="button-align">
                        <a href="logout.php"><input type="submit" id="btn" name="button" value="Sair"></a>
                    </p>
                </aside>

                <div class="form-area">
                    <!-- Exibindo a notícia cadastrada -->
                    <?php 
                        // Conecta-se ao banco de dados
                        $connect = mysqli_connect("localhost", "root", "", "portal_alan");

                        // Recebe o código enviado via link
                        $code = $_GET["code"];

                        // Pesquisa os campos de imagem, titulo, categoria, resumo e texto no banco de dados em função do código da notícia
                        $sql_select = "SELECT imagem_not, manchete_not, categoria_not, texto_not FROM noticias WHERE cod_not = '$code'";

                        // Resultado da pesquisa acima
                        $query_result = mysqli_query($connect, $sql_select);

                        // Extrai os dados da pesquisa acima e adiciona a um array
                        $query = mysqli_fetch_row($query_result);
                    ?>

                    <!-- Exibe a notícia alterada -->
                    <section class="main-news">
                        <article class="news">
                            <figure class="zoom">
                                <img class="news-img" src="<?php echo "$query[0]"; ?>">
                            </figure>
                            <div class="data-area">
                                <header class="news-title">
                                    <h3><?php echo "$query[1]"; ?></h3>
                                </header>
                                <div class="date-section">
                                    <div class="date"><?php echo date('Y-m-d'); ?></div>
                                    <div class="section"><?php echo "$query[2]"; ?></div>
                                </div>
                                <div class="journalist">
                                    <img src="imagens/geforce.jpg" class="photo-journalist">
                                    <p class="name-journalist">Nome do jornalista</p>
                                </div>
                                <div class="post">
                                    <p class="post-news">
                                        <?php echo "$query[3]"; ?>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </section>
                </div>
            </main>
        </div>
    </body>
</html>