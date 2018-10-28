<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Alterar usuário</title>
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
                    <!-- Exibindo os dados do usuário -->
                    <?php 
                        $connect = mysqli_connect("localhost", "root", "", "portal_alan");

                        // Recebe o código enviado via link
                        $code = $_GET["code"];

                        // Pesquisa nome, login, status, perfil e foto em função do código
                        $sql_select = "SELECT nome_user, login_user, senha_user, status_user, perfil_user,
                            imagem_user FROM usuarios WHERE cod_user = '$code'";

                        // Resultado da pesquisa acima
                        $query_result = mysqli_query($connect, $sql_select);

                        // Extrai os dados da pesquisa acima
                        $query = mysqli_fetch_row($query_result);
                    ?>

                    <form method="post" action="processa_altera_user.php" class="form-news"  id="height" enctype="multipart/form-data">
                        <input type="hidden" name="code" value='<?php echo "$code";?>'>

                        <label for="name">Nome</label>
                        <input type="text" id="name" class="fields" name="name" value="<?php echo "$query[0]";?>" required>

                        <label for="profile">Perfil</label>
                        <select id="profile" class="fields" name="profile">
                            <option value="journalist" <?php 
                                if ($query[4] == "journalist") {
                                    echo "selected";
                                }?>>Jornalista
                            </option>

                            <option value="technician" <?php 
                                if ($query[4] == "technician") {
                                    echo "selected";
                                }?>>Técnico
                            </option>
                        </select>

                        <label for="login">Login</label>
                        <input type="text" id="login" class="fields" name="login" value="<?php echo "$query[1]";?>" required>

                        <label for="password">Senha</label>
                        <input type="text" id="password" class="fields" name="password" value="<?php echo "$query[2]";?>" required>

                        <!-- input de status -->
                        <label for="status">Status</label>
                        <select name="status-user" class="fields" id="status">
                            <option value="<?php echo "$query[3]";?>">A</option>
                            <option value="<?php echo "$query[3]";?>">I</option>
                        </select>

                        <label for="user-photo">Foto</label>
                        <input type="file" accept="image/*" id="user-photo" class="file-upload" name="user-photo" value="<?php echo "$query[5]";?>" required>

                        <p class="button-send">
                            <input type="submit" id="send" name="button" value="Publicar">
                        </p>
                    </form>
                </div>
            </main>
        </div>
    </body>
</html>
