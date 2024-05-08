<?php
    session_start();
    if($_SESSION['login'] != 1){
        header('location: mailer_login.php');
    }else if (time() > $_SESSION['timeout']){
        unset($_SESSION['login']);
        header('location: mailer_login.php');
    }
?>