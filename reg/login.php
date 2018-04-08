<?php
    include './ft_auth.php';
    session_start();
    $_SESSION['count'] = 0;
    $_SESSION['loggued_on_user'] = '';
    $_SESSION['root'] = '';
    if (!$_GET['login'] || !$_GET['passwd'] || !auth($_GET['login'], $_GET['passwd'])){
        $_SESSION['loggued_on_user'] = '';
        header("Location: errors/invalid.php");
    }
    else {
        $_SESSION['loggued_on_user'] = $_GET['login'];
        if ($_GET['login'] == 'mmotov' || $_GET['login'] == 'yyatsenk')
            $_SESSION['root'] = 'adm';
        else
            $_SESSION['root'] = 'usr';
        header("Location: ../index.php");
    }
?>