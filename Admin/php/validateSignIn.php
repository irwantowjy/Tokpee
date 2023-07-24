<?php
    session_start();
    require_once('../php/connection.php');
    if(isset($_POST['sign-in'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM tbl_akun_admin WHERE admin_email='{$email}' AND admin_password='{$password}'";
    $result = $conn -> query($sql);

    if ($row = $result->fetch_assoc()) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['loggedIn'] = true;
        $_SESSION['admin_username'] = $row['admin_username'];
        $_SESSION['admin_id'] = $row['admin_id'];
        header("Location: ../pages/dashboard.php");
        exit();
    } 
    else {
        ?>
        <script>
        Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'Username or Password is not found!',
        }).then(()=>{
            window.location = "../pages/sign-in.php";
        })
        </script>
        <?php
    }
    }
?>