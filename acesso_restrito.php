<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="all" href="css/acesso_restrito.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/normalize.css" />
        <link href="https://fonts.googleapis.com/css?family=Oxygen|Ubuntu" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="login">
                <form method="post" action="processa_login.php" class="form-login">
                    <h1 class="title">Acesso Restrito</h1>
                
                    <p class="fields-labels">
                        <label for="field-login">Login</label> <br>
                        <input type="text" id="field-login" class="fields" name="login" required>
                    </p>

                    <p class="fields-labels">
                        <label for="field-password">Senha</label> <br>
                        <input type="password" id="field-password" class="fields" name="password" required>
                    </p>

                    <p class="fields-labels">
                        <input type="submit" id="btn" name="button" value="Entrar">
                    </p>
                </form>
            </div>
        </div>
    </body>
</html>