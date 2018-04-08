<?php
    session_start();
    if ($_SESSION['Author'] && $_SESSION['Price:'])
    	echo $_SESSION['Author']."\n".$_SESSION['Price:'];
?>
