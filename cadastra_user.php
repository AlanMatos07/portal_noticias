<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastrar Usuário</title>
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
                    <form method="post" action="processa_cadastra_user.php" enctype="multipart/form-data" class="form-news" id="height">
                        <label for="name">Nome</label>
                        <input type="text" id="name" class="fields" name="name" required>

                        <label for="profile">Perfil</label>
                        <select id="profile" class="fields" name="profile">
                            <option value="journalist" selected>Jornalista</option>
                            <option value="technician">Técnico</option>
                        </select>

                        <label for="login">Login</label>
                        <input type="text" id="login" class="fields" name="login" required>

                        <label for="password">Senha</label>
                        <input type="password" id="password" class="fields" name="password" required>

                        <label for="user-photo">Foto</label>
                        <input type="file" accept="image/*" id="user-photo" class="file-upload" name="user-photo" required>

                        <p class="button-send">
                            <input type="submit" id="send" name="button" value="Cadastrar" required>
                        </p>
                    </form>
                </div>
            </main>
        </div>
    </body>
</html>