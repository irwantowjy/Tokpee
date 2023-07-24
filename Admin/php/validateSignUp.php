<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])) {
        ?>
            <script>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
            }).then(()=>{
                window.location = "sign-up.php";
            })
            </script>
            <?php
        }
        else{
        $profile = $_FILES['profile_image'];
        $profileImage = uploadImage('Profile', $profile);
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $image = mysqli_real_escape_string($conn, $profileImage);

        $sql = "SELECT * FROM tbl_akun_admin WHERE admin_email='{$email}'";
        $result = $conn -> query($sql);

        if ($row = $result->fetch_assoc()) {
            $_SESSION['admin_email'] = $email;
            $_SESSION['admin_password'] = $password;
            $_SESSION['admin_username'] = $row['username'];
            $_SESSION['admin_id'] = $row['id'];
            $_SESSION['loggedIn'] = true;
            ?>
            <script>
            Swal.fire(
                'Error!',
                'Email already been registered!',
                'warning'
            ).then(()=>{
                window.location = "sign-in.php";
            })
            </script>
            <?php
        }
        else{
            $sql = "INSERT INTO tbl_akun_admin(admin_username, admin_email, admin_password, admin_profile) VALUES ('$username', '$email', '$password', '$image')"; 
            if ($conn->query($sql)) {
            ?>
            <script>
                Swal.fire(
                'Saved!',
                'Your Account Has Been Created!',
                'success'
                ).then(()=>{
                window.location = "sign-in.php";
                })
            </script>
            <?php
            }
        }
        }
    }
?>