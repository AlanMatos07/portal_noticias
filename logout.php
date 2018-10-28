<?php 
    session_start();
    $_SESSION = array();
    session_unset(); // Libera todas as variáveis atualmente registradas na sessão
    session_destroy(); // Destrói todos os dados associados com a sessão atual

    echo 
        "<script>
            location.href = ('acesso_restrito.php')
        </script>";
?>