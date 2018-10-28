<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Alterar Notícia</title>
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
                    <!-- Exibindo os dados da notícia -->
                    <?php 
                        // Conectando ao banco de dados
                        $connect = mysqli_connect("localhost", "root", "", "portal_alan");

                        // Recebe o código enviado via link
                        $code = $_GET["code"];

                        // Pesquisa titulo, categoria, resumo, imagem e texto em função do código
                        $sql_select = "SELECT manchete_not, categoria_not, resumo_not, imagem_not, texto_not
                            FROM noticias WHERE cod_not = '$code'";

                        // Resultado da pesquisa acima
                        $query_result = mysqli_query($connect, $sql_select);

                        // Extrai os dados da pesquisa acima
                        $query = mysqli_fetch_row($query_result);
                    ?>

                    <!-- Formulário com os dados preenchidos -->
                    <form method="post" action="processa_altera_noticia.php" class="form-news" enctype="multipart/form-data">
                        <input type="hidden" name="code" value='<?php echo "$code";?>'>
                        <!-- <label for="journalist-name">Nome do jornalista</label>
                        <input type="text" id="journalist-name" class="fields" name="journalist-name"> -->
                        
                        <label for="title">Título</label>
                        <input type="text" id="title" class="fields" name="title" value="<?php echo "$query[0]";?>">
                        
                        <label for="section">Seção</label>
                        <select id="section" class="fields" name="section">
                            <option value="hardware" <?php 
                                if ($query[1] == "hardware") {
                                    echo "selected";
                                }?>>Hardware</option>

                            <option value="software" <?php 
                                if ($query[1] == "software") {
                                    echo "selected";
                                }?>>Software</option>
                        </select>

                        <label for="resume">Resumo</label>
                        <input type="text" id="resume" class="fields" name="resume" value="<?php echo "$query[2]";?>">

                        <label for="news-photo">Foto da notícia</label>
                        <input type="file" accept="image/*" id="news-photo" class="file-upload" name="news-photo" value="<?php echo "$query[3]";?>" required>

                        <label for="news">Notícia</label>
                        <textarea id="news" rows="50" name="news"><?php echo "$query[4]";?></textarea>

                        <p class="button-send">
                            <input type="submit" id="send" name="button" value="Publicar">
                        </p>
                    </form>
                </div>
            </main>
        </div>
    </body>
</html>