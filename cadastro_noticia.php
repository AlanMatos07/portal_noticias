<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tech News</title>
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
                    <form method="post" action="processa_cadastra_noticia.php" class="form-news" enctype="multipart/form-data">
                        <label for="title">Título</label>
                        <input type="text" id="title" class="fields" name="title" required>

                        <label for="section">Seção</label>
                        <select id="section" class="fields" name="section">
                            <option value="hardware" selected>Hardware</option>
                            <option value="software">Software</option>
                        </select>

                        <label for="resume">Resumo</label>
                        <input type="text" id="resume" class="fields" name="resume" required>

                        <label for="date">Data</label>
                        <input value="<?php echo date('Y-m-d'); ?>" type="date" id="date" class="fields" name="date" required>

                        <!-- A data acima irá para o BD com formato de Y-m-d. Para ir como d-m-Y usar:
                        $data_errada = "2018-04-12"; $data_correta = date("d/m/Y", strtotime($data_errada)); -->

                        <label for="news-photo">Foto da notícia</label>
                        <input type="file" accept="image/*" id="news-photo" class="file-upload" name="news-photo" required>

                        <label for="news">Notícia</label>
                        <textarea id="news" rows="50" name="news" required></textarea>

                        <p class="button-send">
                            <a href="logout.php"><input type="submit" id="send" name="button" value="Publicar"></a>
                        </p>
                    </form>
                </div>
            </main>
        </div>
    </body>
</html>