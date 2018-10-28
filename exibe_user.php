<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exibir usuário</title>
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
                    <form method="post" action="processa_cadastra_user.php" class="form-news">
                        <!-- Exibindo os dados do usuário -->
                        <?php 
                            $connect = mysqli_connect("localhost", "root", "", "portal_alan");

                            // Recebe o código enviado via link
                            $code = $_GET["code"];

                            // Pesquisa nome, login, status, perfil e foto em função do código
                            $sql_select = "SELECT nome_user, login_user, status_user, perfil_user,
                                imagem_user FROM usuarios WHERE cod_user = '$code'";

                            // Resultado da pesquisa acima
                            $query_result = mysqli_query($connect, $sql_select);

                            // Extrai os dados da pesquisa acima
                            $query = mysqli_fetch_row($query_result);
                        ?>

                        <!-- Exibir os dados extraídos -->
                        <div class="container-user">
                            <figure class="photo-area">
                                <img class="photo-area" src="<?php echo "$query[4]";?>">
                            </figure>

                            <div class="container-data">
                                <ul class="users-data">
                                    <li>Nome</li>
                                    <li><?php echo "$query[0]";?></li>
                                </ul>

                                <ul class="users-data">
                                    <li>Login</li>
                                    <li><?php echo "$query[1]";?></li>
                                </ul>

                                <ul class="users-data">
                                    <li>Status</li>
                                    <li><?php echo "$query[2]";?></li>
                                </ul>

                                <ul class="users-data">
                                    <li>Perfil</li>
                                    <li><?php echo "$query[3]";?></li>
                                </ul>

                            </div>
                         
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </body>
</html>