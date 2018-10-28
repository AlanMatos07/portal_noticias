<?php
    // Inicializa a variavel de sessão
    session_start();

    // Conecta ao banco de dados
    $connect = mysqli_connect("localhost", "root", "", "portal_alan");

    // Recebe os names de acesso_restrito.php e os armazena em variáveis
    $login = $_POST["login"];
    $password = $_POST["password"];

    // Faz a consulta do login e senha no banco de dados
    $query_sql = "SELECT cod_user, login_user, senha_user FROM usuarios 
        WHERE login_user = '$login' AND senha_user = '$password'";

    // Método que pega a tabela do resultado de login e senha no banco de dados
    $query_result = mysqli_query($connect, $query_sql);

    // Conta quantas linhas tem na tabela
    $rows = mysqli_num_rows($query_result);

    // Verifica se o login e a senha estão certas
    if ($rows == 1) {

        // Pega os dados da tabela e coloca em um array
        $registro = mysqli_fetch_row($query_result);

        // Recebe o código do usuário
        $_SESSION["code_user"] = $registro[0];
        
        // Variavel de sessão
        $_SESSION["login"] = $login;

        echo
            "<script>
                location.href = ('administracao.php')
            </script>";
    } else {
        echo
            "<script>
                alert('Login ou senha incorreta! Digite novamente')
            </script>";

        echo    
            "<script>
                location.href = ('acesso_restrito.php')
            </script>";
    }
?>