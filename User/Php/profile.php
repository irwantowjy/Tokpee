<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Profile</title>
    <link rel="stylesheet" href="../../User/Style/user.css">
    <link rel="stylesheet" href="../../assets/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/resource/font.css">
    <link rel="stylesheet" href="../../assets/css/resource/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/resource/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../../assets/css/custom/footer.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
    .custom-file-upload {
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        border-radius: 4px;
        color: #333;
        position: relative;
        overflow: hidden;
    }

    .custom-file-upload input[type="file"] {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }

    .custom-file-upload:hover {
        background-color: #e0e0e0;
    }

    .custom-file-upload-change{
        margin-top:20px;
        display: inline-block;
        padding: 6px 24px;
        cursor: pointer;
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        border-radius: 4px;
        color: #333;
        position: relative;
        overflow: hidden;
    }

    .custom-file-upload-change input[type="file"] {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 18px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }

    .custom-file-upload-change:hover {
        background-color: #e0e0e0;
    }
    </style>
</head>
<body>
<?php
    require('connection.php');
    session_start();
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM tbl_akun_user WHERE email='{$email}'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $username = $row['username'];
    $noTelp = $row['no_hp'];
    $date = $row['date_created'];
    $tglLahir = $row['tanggal_lahir'];
    $alamat = $row['alamat'];
    $JK = $row['jenis_kelamin']; 
?>
    <main>
        <div class="container-fluid mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="sidebar">
                            <ul class="sidebar-nav hidden list-group list-group-flush">
                                <div class="mb-4">

                                    <div class="flex text-break mb-2 ">
                                        <h4 class="lh"><?php echo $email?></h4>
                                    </div>
                                    <div>
                                        <h6 class="small text-muted font-weight-light mt-2">Member sejak <?=$date?> </h6>
                                    </div>
                                </div>                                
                                <li class="sub-nav list-group-item current border-top-0"><a href="user-profile.html">Profil</a>
                                </li>
                                <li class="sub-nav list-group-item border-bottom"><a href="homepage.php">Kembali</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 ml-3">
                        <div class="main">
                            <article>
                                <h3 class="color">Profil</h3>
                                <form method = "post" enctype="multipart/form-data">
                                <?php
                                    $image= $row['user_profile'];
                                    if (!empty($image) && file_exists("../../UploadImage/Profile/{$image}")) {
                                        echo "<img style='width:150px' src='../../UploadImage/Profile/{$image}'>";
                                    }                         
                                    ?>
                                    <div class="form-group">
                                        <?php 
                                        if (!empty($image) && file_exists("../../UploadImage/Profile/{$image}")): ?>
                                            <label for="profile_image" class="custom-file-upload-change">
                                                <i class="fas fa-cloud-upload-alt"></i> Change Image
                                                <input type="file" id="profile_image" accept="image/*" name="change_image">
                                            </label>

                                        <?php else: ?>
                                            <label for="profile_image" class="custom-file-upload">
                                                <i class="fas fa-cloud-upload-alt"></i> Upload Profile Image
                                                <input type="file" id="profile_image" accept="image/*" name="profile_image">
                                            </label>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Lengkap<span style="color: red">
                                                *</span></label>
                                        <input type="text" class="form-control w-75 input" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $username?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email Login<span style="color: red">
                                                *</span></label>
                                        <input type="email" class="form-control w-75 input" style="cursor: not-allowed;" disabled id="exampleInputPassword1" value="<?php echo $email?>">
                                    </div>

                                    <div class="form-group w-75">
                                        <label for="exampleInputPhone1" class="m-0">Nomor Handphone
                                            <span style="color: red">*</span>
                                        </label>
                                        <input type="number" class="form-control input" id="exampleInputPhone1" disabled aria-describedby="emailHelp" value="<?php echo $noTelp?>">
                                    </div>

                                    <div class="bootstrap-iso">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12 p-0">
                                              
                                                    <div class="form-group">
                                                        <label class="control-label" for="date">Tanggal Lahir <span style="color: red;">*</span>
                                                        </label>
                                                        <input class="form-control input w-75" id="date" name="date" value="<?=$tglLahir?>"placeholder="MM/DD/YYY" type="text"/>
                                                        <label class="control-label" for="date" style="margin-top: 10px" ">Alamat <span style="color: red;">*</span>
                                                        </label>
                                                        <input class="form-control input w-75" id="address" name="alamat" value="<?=$alamat?>" type="text"/>
                                                    </div>
                                                    <div class="form-group mt-4">
                                                        <label for="exampleInputPhone1">Jenis Kelamin
                                                            <span style="color: red">*</span>
                                                            <div class=" mt-2">
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadioInline1" name="radio" value="pria" class="custom-control-input" <?php if ($JK === 'pria') echo 'checked'; ?>>
                                                                    <label class="custom-control-label" for="customRadioInline1">Pria</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadioInline2" name="radio" value="wanita" class="custom-control-input" <?php if ($JK === 'wanita') echo 'checked'; ?>>
                                                                    <label class="custom-control-label" for="customRadioInline2">Wanita</label>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>     
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" name="submit_profile" class="btn btn-warning py-2 w-25 button text-white" style="font-weight: 500;">Simpan</button>
                                    </div> 
                                </form>
                                <?php
                                    require_once('imageFunction.php');
                                    if(isset($_POST['submit_profile'])) {
                                        $username = $_POST['username'];
                                        $tglLahir = $_POST['date'];
                                        $alamat = $_POST['alamat'];
                                        $JK = $_POST['radio'];
                                        $profile = isset($_FILES['change_image']) ? $_FILES['change_image'] : $_FILES['profile_image'];
                                        $profileImage = uploadImage('Profile', $profile);

                                        $sql = "UPDATE tbl_akun_user SET username='$username', user_profile='$profileImage' ,tanggal_lahir='$tglLahir', alamat='$alamat',jenis_kelamin='$JK' WHERE email='$email'";
                                        if($result = $conn->query($sql)){
                                            ?>
                                            <script>
                                                Swal.fire(
                                                'Saved!',
                                                'Your Data Has Been Updated!',
                                                'success'
                                                ).then(()=>{
                                                    window.location = "homepage.php";
                                                })
                                            </script>
                                            <?php
                                        }
                                    }    
                                ?> 
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="container-fluid mt-2 help1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title text-center mb-5">
                        <h2>Perlu Bantuan Lain? Hubungi Customer Care Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-three seperator">
                                <div class="box-three_icon">
                                    <i class="fas fa-phone icon"></i>
                                </div>
                                <div class="box-three_text">
                                    <p class="text-left">Kami siap membantu 24 jam selama 365 hari.</p>
                                    <a href="#" class="linking">061-8182834</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-three seperator">
                                <div class="box-three_icon">
                                    <i class="fas fa-envelope icon"></i>
                                </div>
                                <div class="box-three_text">
                                    <p class="text-left">Kami akan membalas email kamu segera mungkin.</p>
                                    <a href="mailto:customer.care@tokpee.com" class="linking">customer.care@tokpee.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-three">
                                <div class="box-three_icon">
                                    <i class="fas fa-comment-dots icon"></i>
                                </div>
                                <div class="box-three_text">
                                    <p class="text-left">Chat langsung dengan Customer Care kami.</p>
                                    <a href="#" class="linking">Mulai chat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        require_once('../Layout/footer.php');
    ?>
        <script src="../../assets/js/resource/jquery.min.js"></script>
    <script src="../../assets/js/resource/pooper.min.js"></script>
    <script src="../../assets/js/resource/bootstrap.min.js"></script>
    <script src="../../assets/js/custom/homepage.js"></script>
    <script src="../../assets/js/custom/skeleton.js"></script>
    <script src="../../assets/js/resource/cdn-TweenMax.min.js"></script>
    <script src="../../assets/js/custom/countdown-animation.js"></script>
    <script>
        $(document).ready(function() {
            let searchValue;
            let searchQuery = "";

            $('.navbar-kategori').popover({
                content: '<ul class="height"><li><a href="#">Wanita</a></li><li><a href="#">Pria</a></li><li><a href="#">Anak-anak</a></li><li><a href="#">Audio</a></li><li><a href="#">Fashion</a></li><li><a href="#">Dapur</a></li><li><a href="#">Perabot</a></li><li><a href="#">Elektronik</a></li><li><a href="#">Handphone & Tablet</a></li><li><a href="#">Olahraga</a></li><li><a href="#">Kamera</a></li><li><a href="#">Video Games</a></li><li><a href="#">Kecantikan</a></li></ul>',
                html: true,
                placement: "bottom",
                trigger: "focus"
            })

            $('.envelope').popover({
                content: '<ul><li><a href="#">Chat</a></li><li><a href="#">Diskusi</a></li><li><a href="#">Ulasan</a></li><li><a href="#">Pesan Bantuan</a></li><li><a href="#">Komplain Pesanan</a></li></ul>',
                html: true,
                placement: "bottom",
                trigger: "focus"
            })

            $('.notif').popover({
                title: '<h6 class="px-3 mb-0">Notifikasi</h6>',
                content: '<div class="height-1"><div class="d-flex justify-content-between mt-2"><p class="mb-0 font-weight-bold">Pembelian</p><a href="#" class="text-warning font-weight-light see-all" >Lihat Semua</a></div><div class="d-flex flex-column"><ul class="pl-0"><li class="pl-0 space"><a href="user-profile.html" class="font">Menunggu Pembayaran</a></li><li class="pl-0 space"><a href="user-profile.html" class="font">Menunggu Konfirmasi</a></li><li class="pl-0 space"><a href="user-profile.html" class="font">Pesanan Diproses</a></li><li class="pl-0 space"><a href="user-profile.html" class="font">Sedang Dikirim</a></li><li class="pl-0 space"><a href="user-profile.html" class="font">Sampai Tujuan</a></li></ul><hr class="w-100 border my-1"> </div><div class="mt-3"><p class="mb-0 font-weight-bold">Penjualan</p><p class="text-left paragraph">Cek pesanan yang masuk dan perkembangan tokomu secara rutin di satu tempat</p></div><div class="d-flex justify-content-center"><a href="#" class="btn btn-outline-warning p-2 mr-3" role="button">Masuk ke TokPee Seller</a></div></div>  <div class="text-center w-100 d-flex p-2 border-top shadow"><div class="w-50"><a href="#" class="text-warning see-all mr-0">Tandai semua</a></div><div class="w-50"><a href="#" class="text-warning see-all mr-0">Lihat Selengkapnya</a></div></div>',
                html: true,
                placement: "bottom",
                trigger: "focus"
            })

            $('.profile').popover({
                content: '<ul><li><a href="profile.php">Profile</a></li><li><a href="logout.php">Log out</a></li></ul>',
                html: true,
                placement: "bottom",
                trigger: "focus"
            });


        })

        $("#chatting").keyup(function(event) {
            if (event.keyCode === 13) {
                $("#send_chat").click();
            }
        })

        $("#send_chat").click(function() {
            const txt = document.getElementById('chatting').value
            $("#para").append(`
                    <div class="container-1 darker ml-auto my-3">
                        <p class="mb-0 float-right d-block text-break" style="font-size: 0.9rem; margin-right: 10px;">${txt}</p>
                        <img style="float: right; border-radius: 50%" width="30" height="30" src="assets/img/my-profile.jpg">
                        <span class="time-left mt-3">Just now</span>   
                    </div>
                `)
            $("#chatting").val("")
            $("#no_chat").html("")
        })

        $("#first_chat").click(function() {
            $("#no_chat").html("")
            $("#no_chat").append(`
                    <div class="container-1 my-3 pt-0">
                        <div class="row d-flex align-items-center">
                            <div class="col-2 pr-1">
                                <img src="assets/img/undraw_male_avatar_323b.svg" width="40" alt="">
                            </div>
                            <div class="col-7 d-flex flex-column justify-content-center pl-1 ml-2 ml-md-0">
                                <p class="font-weight-bold mb-0">Lie</p>
                                <p class="mb-0" style="font-size:0.8rem">Halo, Selamat Pagi</p>
                            </div>
                            <span class="time-right mt-5 ml-auto pr-3">11:05</span>
                        </div>
                    </div>
            `)
        })

        $('#search-input').on('keydown', function(event) {
            if (event.keyCode === 13) {
                
                var searchValue = $(this).val();
                $(this).trigger('search', [searchValue]);
            }
        });

        $('#search-button').on('click', function() {
            var searchValue = $('#search-input').val();
            $('#search-input').trigger('search', [searchValue]);
            // }
        });

        $('#search-input').on('search', function(event, searchValue) {
            // Perform search
            if (searchValue === undefined) {
                window.location.href = `/search-page.html?search=${searchQuery}`
            } else {
                window.location.href = `/search-page.html?search=${searchValue}`
            }
        });
    </script>
</body>
</html>