<!DOCTYPE html>
<html lang="en">
<title>Homepage TokPee</title>
<head>
    <?php
        require_once('../Layout/head.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
</head>

<body>
    <?php
        require_once('../Layout/nav.php');
    ?>
    <main>
        <div class="container" style="margin-top: 120px">
        <p class="container px-4" id="search-value">Menampilkan hasil pencaharian: <span style="color: blue; font-weight: bold;"><?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?></span></p>
    
                <?php
                    require_once("connection.php");
                    $sql = "SELECT * FROM tbl_admin_foryou";
                    $result = $conn->query($sql);
                    $rows = [];
                    while ($row = $result->fetch_assoc()) {
                        $rows[] = $row;
                    }

                    shuffle($rows);
                ?>

                
                <div class="container">
                    <div class="card-deck">
                        <div class="row">
                            <?php $counter = 0; ?>
                            <?php foreach ($rows as $row) {       
                                $id = $row['data_id'];
                            ?>                        
                                <div class="col-lg col-md-4 col-6 pr-0">
                                    <a class="font-a text-decoration-none" href="detailBarang.php?id=<?=$id?>">
                                        <div class="card mb-3 mx-auto shadow-sm" style="width: 92%; height: 97%">
                                            <img class="card-img-top" src="../../UploadImage/DataImage/<?=$row['data_image']?>">
                                            <div class="card-body p-2">
                                                <p class="card-title text-left text-dark"><?=$row['data_name']?></p>
                                                <h5 class="card-text mb-2" style="font-weight: bold; color: #FA591D;">Rp.<?=$row['data_price']?></h5>
                                                <div class="d-flex align-items-center mb-2">
                                                    <p class="card-text m-0 merchant"><small><i class="fas fa-crown"></i></small></p>
                                                    <a class="card-text ml-2 nama-toko text-muted"><small class="text-muted"><?=$row['data_location']?></small></a>
                                                </div>
                                                <p class="card-text" style="color: orange;">
                                                    <small>
                                                        <?php for ($i = 0; $i < $row['data_rate']; $i++) { ?>
                                                            <i class="fas fa-star"></i>
                                                        <?php } ?>
                                                    </small>
                                                    <span class="text-muted">(<?=$row['data_rate']?>)</span>
                                                </p>
                                                <div class="item-info">
                                                    <p class="m-0">Grosir</p>
                                                </div>
                                                <i class="fas fa-bullhorn horn" style="color: #cecece;"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php $counter++; ?>
                                <?php if ($counter % 5 === 0) { ?>
                                    </div>
                                    <div class="row">
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                 
            </div>




    </main>
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
                content: '<div class="height-1"><div class="d-flex justify-content-between mt-2"><p class="mb-0 font-weight-bold">Pembelian</p><a href="#" class="text-warning font-weight-light see-all" >Lihat Semua</a></div><div class="d-flex flex-column"><ul class="pl-0"><li class="pl-0 space"><a href="profile.php" class="font">Menunggu Pembayaran</a></li><li class="pl-0 space"><a href="profile.php" class="font">Menunggu Konfirmasi</a></li><li class="pl-0 space"><a href="profile.php" class="font">Pesanan Diproses</a></li><li class="pl-0 space"><a href="profile.php" class="font">Sedang Dikirim</a></li><li class="pl-0 space"><a href="profile.php" class="font">Sampai Tujuan</a></li></ul><hr class="w-100 border my-1"> </div><div class="mt-3"><p class="mb-0 font-weight-bold">Penjualan</p><p class="text-left paragraph">Cek pesanan yang masuk dan perkembangan tokomu secara rutin di satu tempat</p></div><div class="d-flex justify-content-center"><a href="#" class="btn btn-outline-warning p-2 mr-3" role="button">Masuk ke TokPee Seller</a></div></div>  <div class="text-center w-100 d-flex p-2 border-top shadow"><div class="w-50"><a href="#" class="text-warning see-all mr-0">Tandai semua</a></div><div class="w-50"><a href="#" class="text-warning see-all mr-0">Lihat Selengkapnya</a></div></div>',
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
                searchQuery = searchValue
                // }
            }
        });

        // Attach event listener to search button
        $('#search-button').on('click', function() {
            // Trigger search event
            // $('#search-input').trigger('search');
            // if (searchValue !== "" && searchValue !== undefined) {
            var searchValue = $('#search-input').val();
            $('#search-input').trigger('search', [searchValue]);
            // }
        });

        // Attach event listener to search event
        $('#search-input').on('search', function(event, searchValue) {
            // Perform search
            if (searchValue === undefined) {
                window.location.href = `searchPage.php?search=${searchQuery}`
            } else {
                window.location.href = `searchPage.php?search=${searchValue}`
            }
        });
    </script>
</body>

</html>