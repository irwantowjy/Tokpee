<?php 
    require('connection.php');
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $noTelp =$_POST['noHP'];
        $password = $_POST['password'];
        date_default_timezone_set('Asia/Jakarta');
        $time = date("Y-m-d");
        $sql = "SELECT * FROM tbl_akun_user WHERE email='{$email}'";
        $result = $conn -> query($sql);
        if ($row = $result->fetch_assoc()) {
            header("Location: signUp.php?messageCode=1");
        } 
        else {
            $sql = "INSERT INTO tbl_akun_user (username, email, no_hp, user_password, date_created) VALUES ('$username','$email','$noTelp','$password', '$time')";
            if (mysqli_query($conn, $sql)) {
                header("Location: login.php");
            }
        }
    }
?>