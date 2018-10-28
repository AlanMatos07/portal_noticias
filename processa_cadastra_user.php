<?php 
    // Inicia o BD
    $connect = mysqli_connect("localhost", "root", "", "portal_alan");

    $name = $_POST["name"];
    $profile = $_POST["profile"];
    $login = $_POST["login"];
    $password = $_POST["password"];
    $photo = $_FILES["user-photo"];

    $query_sql = "SELECT login_user FROM usuarios WHERE login_user = '$login'";

    $query_result = mysqli_query($connect, $query_sql);

    $rows = mysqli_num_rows($query_result);

    // Verifica se o usuário já é cadastrado
    if ($rows == 1) {
        echo 
            "<script>
                alert('Login já cadastrado, tente outro!')
            </script>";

        echo 
            "<script>
                location.href = ('cadastra_user.php')
            </script>";
    } else { // Caso o usuário não esteja cadastrado

        // Pega o caminho e nome do arquivo
        $photo_name = "imagens/".$photo["name"];

        // Move um arquivo enviado para uma nova localização
        move_uploaded_file($photo["tmp_name"], $photo_name);

        // Cadastrar o usuário
        $register_sql = "INSERT INTO usuarios 
            (nome_user, perfil_user, login_user, senha_user, imagem_user)
            VALUES ('$name', '$profile', '$login', '$password', '$photo_name')";
                
        // Resultado do cadastro
        $register_result = mysqli_query($connect, $register_sql);

        if ($register_result) {
            echo 
                "<script>
                    alert('$name cadastrado com sucesso!')
                </script>";
            
            echo 
                "<script>
                    location.href = ('cadastra_user.php')
                </script>";
        } else {
            echo 
                "<script>
                    alert('Ocorreu um erro no servidor, tente novamente!')
                </script>";

            echo 
                "<script>
                    location.href = ('cadastra_user.php')
                </script>";
        }
    }
?>