<?php
    session_start();
    unset($_SESSION['logou']);
    $_SESSION['msg'] = "Deslogado com sucesso! &#x2714;";
    header("Location: index.php")
?>