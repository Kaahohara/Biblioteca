<?php
    session_start();   
    unset(
        $_SESSION['ID_usuario'],
        $_SESSION['login'],
        $_SESSION['carrinho']
    );   
    $_SESSION['logindeslogado'] = "Deslogado com sucesso";
    //redirecionar o usuario para a página de login
    header("Location: cadastros.php");
?>


