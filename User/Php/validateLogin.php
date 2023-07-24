<?php
    session_start();
    require_once('connection.php');
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM tbl_akun_user WHERE email='{$email}' AND user_password='{$password}'";
        $result = $conn -> query($sql);

        if ($row = $result->fetch_assoc()) {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['loggedIn'] = true;
            $_SESSION['noHP'] = $row['no_hp'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['user_id'] = $row['id'];
            header("Location: homepage.php");
            exit();
        } 
        else {
            header("Location: login.php?messageCode=1");
        }
    }
?>