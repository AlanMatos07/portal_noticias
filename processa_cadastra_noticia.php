<?php 
    session_start();
    $connect = mysqli_connect("localhost", "root", "", "portal_alan");

    $title = $_POST["title"];
    $section = $_POST["section"];
    $resume = $_POST["resume"];
    $news_photo = $_FILES["news-photo"];
    $news = $_POST["news"];
    $cod_user = $_SESSION["code_user"];

    // Define o caminho da imagem
    $photo_name = "imagens/".$news_photo["name"];

    // Move um arquivo enviado para uma nova localização
    move_uploaded_file($news_photo["tmp_name"], $photo_name);

    // Insere os dados na tabela noticias
    $register_sql = "INSERT INTO noticias (manchete_not, resumo_not, texto_not, categoria_not, imagem_not, 
        usuarios_cod_user) VALUES ('$title', '$resume', '$news', '$section', '$photo_name', '$cod_user')";

    // Resultado da tabela com os registros
    $register_result = mysqli_query($connect, $register_sql);

    // Verifica se a notícia foi cadastrado
    if ($register_result) {
        echo
            "<script>
                alert('$title cadastrado com sucesso!')
            </script>";

        echo
            "<script>
                location.href = ('cadastro_noticia.php')
            </script>";
    } else {
        echo
            "<script>
                alert('Ocorreu um erro no servidor, tente novamente!')
            </script>";

        echo
            "<script>
                location.href = ('cadastro_noticia.php')
            </script>";
    }
?>