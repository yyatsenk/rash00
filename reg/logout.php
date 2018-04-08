<?php
    session_start(); 
    unset($_SESSION['loggued_on_user']);
    unset($_SESSION['root']);
    session_destroy();
    header("Location: ../index.php");
?>