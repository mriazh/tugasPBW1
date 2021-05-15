<?php
    session_start();
    session_unset();
    session_destroy();
    setcookie("uid","", time()-60);
    header('Location:login.php');
    exit;
?>
