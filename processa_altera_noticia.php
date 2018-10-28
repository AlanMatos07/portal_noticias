<?php 
    // Conecta ao banco de dados
    $connect = mysqli_connect("localhost", "root", "", "portal_alan");

    // Recebe os dados do formulário da notícia alterada
    $title = $_POST["title"];
    $section = $_POST["section"];
    $resume = $_POST["resume"];
    $photo = $_FILES["news-photo"];
    $news = $_POST["news"];
    $code = $_POST["code"];

    // Pesquisa os campos de titulo e imagem no banco de dados
    $sql_select = "SELECT manchete_not, imagem_not FROM noticias WHERE manchete_not = '$title' AND cod_not <> '$code'";

    // Resultado da pesquisa acima
    $query_result = mysqli_query($connect, $sql_select);

    // Retorna a quantidade de linhas que teve no resultado de $query_result
    $rows = mysqli_num_rows($query_result);

    // Verifica se já tem uma notícia com o mesmo nome cadastrada
    if ($rows == 1) {
        echo
            "<script>
                alert('$title já cadastrado. Tente novamente!')
            </script>";
         
        echo
            "<script>
                location.href = ('altera_noticia.php?code=$code')
            </script>";
    } else {
        // Pesquisa o campo da imagem no BD
        $sql_query_photo = "SELECT imagem_not FROM noticias WHERE cod_not = '$code'";

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
        $sql_alter = "UPDATE noticias SET manchete_not = '$title', categoria_not = '$section', resumo_not = '$resume',
            imagem_not = '$photo_name', texto_not = '$news' WHERE cod_not = '$code'";

        // Resultado dos novos registros
        $sql_alter_result = mysqli_query($connect, $sql_alter);

        // Verifica se os registros foram alterados
        if ($sql_alter_result) {
            echo 
                "<script>
                    alert('$title alterado com sucesso!')
                </script>";

            echo 
                "<script>
                    location.href = ('altera_noticia.php?code=$code')
                </script>";
        } else {
            echo
                "<script>
                    alert('Ocorreu um erro no servidor. Tente novamente!')
                </script>";
         
            echo
                "<script>
                    location.href = ('altera_noticia.php?code=$code')
                </script>";
        }
    }
?>