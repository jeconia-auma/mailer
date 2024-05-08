<?php
    session_start();
    require_once("includes/db_conn.php");

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $sql = "select * from users where email='$email' and password='$password'";
        $result = mysqli_query($conn, $sql);

        if($result){
            $_SESSION['login'] = 1;
            $_SESSION['timeout'] = time() + 1800;
            header('location: index.php');
        }else {
            echo "stop";
        }
    }
?>