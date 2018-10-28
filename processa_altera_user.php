<?php 
    // Conecta-se ao banco de dados
    $connect = mysqli_connect("localhost", "root", "", "portal_alan");

    // Recebe os dados do formulário de altera_user.php
    $name = $_POST["name"];
    $profile = $_POST["profile"];
    $login = $_POST["login"];
    $password = $_POST["password"];
    $status = $_POST["status-user"];
    $photo = $_FILES["user-photo"];
    $code = $_POST["code"];

    // Pesquisa os campos de login e imagem no BD
    $sql_select = "SELECT login_user, imagem_user FROM usuarios WHERE login_user = '$login' AND
        cod_user <> '$code'";

    // Resultado da pesquisa acima
    $query_result = mysqli_query($connect, $sql_select); 

    // Retorna a quantidade de linhas que teve no resultado de $query_result
    $rows = mysqli_num_rows($query_result);

    if ($rows == 1) { // Verifica se o login já está sendo usado
        echo 
            "<script>
                alert('O login $login já está sendo usado. Tente novamente!')
            </script>";
        
        echo 
            "<script>
                location.href = ('altera_user.php?code=$code')
            </script>";
    } else {
        // Pesquisa o campo da imagem no BD
        $sql_query_photo = "SELECT imagem_user FROM usuarios WHERE cod_user = '$code'";

        // Resultado da pesquisa acima
        $query_result_photo = mysqli_query($connect, $sql_query_photo);

        // Retorna a quantidade de linhas que teve no resultado de $query_result_photo
        $rows = mysqli_num_rows($query_result_photo);

        // Verifica se o campo da foto não está vazio
        if ($photo["name"] <> "") {
            $photo_name = "imagens/".$photo["name"];
            move_uploaded_file($photo["tmp_name"], $photo_name);
        } else {
            // Transforma a pesquisa do campo imagem feita no BD e adiciona os registros em um array
            $query = mysqli_fetch_row($sql_query_photo);

            // Atribui à variável a nova foto
            $photo_name = $query[0];
        }

        // Atribui novos valores aos registros
        $sql_alter = "UPDATE usuarios SET nome_user = '$name', perfil_user = '$profile', login_user = '$login', senha_user = '$password', 
            status_user = '$status', imagem_user = '$photo_name' WHERE cod_user = '$code'";

        // Resultado dos novos registros
        $sql_alter_result = mysqli_query($connect, $sql_alter);

        // Verifica se os registros foram alterados
        if ($sql_alter_result) {
            echo 
                "<script>
                    alert('$name alterado com sucesso!')
                </script>";
            
            echo 
                "<script>
                    location.href = ('altera_inativa_user.php?code=$code')
                </script>";
        } else { // Caso haja algum erro com o servidor
            echo 
                "<script>
                    alert('Ocorreu um erro no servidor. Tente novamente!')
                </script>";

            echo 
                "<script>
                    location.href = ('altera_user.php?code=$code')
                </script>";
        }
    }
?>