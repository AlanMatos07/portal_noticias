<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Alterar/Exibir Notícia</title>
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
                    <form method="post" class="form-news" id="" enctype="multipart/form-data">
                        <?php 
                            $connect = mysqli_connect("localhost", "root", "", "portal_alan");

                            $sql_select = "SELECT manchete_not, categoria_not, resumo_not, cod_not FROM noticias";

                            $query_result = mysqli_query($connect, $sql_select);
                        ?>

                        <div class="area-users">
                            <div class="area-title">Nome</div>
                            <div class="area-title">Categoria</div>
                            <div class="area-title">Resumo</div>
                            <div class="area-title">Opções</div>
                        </div>

                        <?php
                            while ($query = mysqli_fetch_row($query_result)) {
                        ?>
                        
                        <div class="registered">
                            <div class="area-users">
                                <ul class="list">
                                    <li><a href="exibe_noticia.php?code=<?php echo "$query[3]"; ?>" class="links"><?php echo "$query[0]";?></a></li>
                                </ul>
                            </div>
                            <div class="area-users">
                                <ul class="list">
                                    <li><?php echo "$query[1]";?></li>
                                </ul>
                            </div>
                            <div class="area-users">
                                <ul class="list">
                                    <li><?php echo "$query[2]";?></li>
                                </ul>
                            </div>
                            <div class="area-users">
                                <ul class="list">
                                    <li><a href="altera_noticia.php?code=<?php echo "$query[3]";?>" class="links">Alterar</a></li>
                                </ul>
                            </div>
                        </div>

                        <?php
                            }
                        ?>
                    </form>
                </div>
            </main>
        </div>
    </body>
</html>