<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang</title>
    
    <link rel="stylesheet" href="../../assets/css/custom/privacy-policy.css">
    <link rel="stylesheet" href="../../assets/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/resource/font.css">
    <link rel="stylesheet" href="../../assets/css/resource/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/resource/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/css/resource/owl.theme.min.css">
    <link rel="stylesheet" href="../../assets/css/custom/detail-barang.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .tile {
            position: relative;
            overflow: hidden;
        }

        .tile .photo {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            transition: transform 0.3s ease;
        }

        .tile:hover .photo {
            transform: scale(1.6);
        }
       
        .quantity-input {
            display: flex;
            align-items: center;
            margin-top: 5px;
        }

        .btn-quantity {
            background-color: #f1f1f1;
            border: none;
            color: #333;
            cursor: pointer;
            font-weight: bold;
            padding: 8px 12px;
            transition: background-color 0.3s ease;
        }

        .btn-quantity:hover {
            background-color: #ddd;
        }

        .text {
            width: 40px;
            margin: 0 5px;
            text-align: center;
            border: none;
            background-color: transparent;
        }
    </style>
</head>

<body>
    <?php
        require_once('../Layout/nav.php');
    ?>
    <main>
        <div class="container" style="margin-top: 120px">
            <div class="row mt-5">

                <div class="row tiles col-12 col-lg-5" style="height: 600px">
                    <div class="col-12 tile h-75 border cursor-img">
                        <div class="photo"></div>
                    </div>
                </div>

                <?php
                    require_once("connection.php");
                    $sql = "SELECT * FROM tbl_admin_foryou";
                    $result = $conn->query($sql);
        
                    while ($row = $result->fetch_assoc()) { 
                        $id = $_GET['id'];
                        
                        $db_id = $row['data_id'];
                        if($id == $db_id){
                            $image = $row['data_image'];
                            $name = $row['data_name'];
                            $price = $row['data_price'];
                            $location = $row['data_location'];
                            $rate = $row['data_rate'];
                        } 
                    }
                ?>
                
                <div class="col-12 col-lg-7 pl-lg-5">
                    <p class="merchant-title">Power Merchant</p>
                    <p class="nunitosans mt-2" style="color: rgba(49, 53, 59, 0.96); font-size: 17.5px"><?=$name?></p>
                    <p class="opensans mt-2" style="font-size: 14px; letter-spacing: 1px;"><?=$rate?> 
                    <?php for ($i = 0; $i < $rate; $i++) { ?>
                        <i class="fas fa-star">&nbsp</i>
                    <?php } ?>

                        <b class="dots">Terjual 4971 Produk</b>(100%)
                        <b class="dots">17382x</b> Dilihat

                    </p>
                    <div class="div d-flex text-1">
                        <p class="prize opensans lightgrey m-0">
                            HARGA
                        </p>
                        <custom><?=$price?></custom>
                    </div>

                    <div class="div d-flex">
                        <p class="prize opensans lightgrey m-0">JUMLAH</p>
                        <div class="d-flex align-items-center" style="margin-left: 5rem;">
                            <form method="post">
                                <p class="opensans" style="margin: 0; font-size: 14px;">Stok Tersedia</p>
                                <div class="quantity-input">
                                <button type="button" class="btn-quantity" onclick="decrementQuantity()">-</button>
                                <input class="text" type="text" name="totalBarang" value="1" min="1" />
                                <button type="button" class="btn-quantity" onclick="incrementQuantity()">+</button>
                                </div>
                                <input style="margin-top: 50px; margin-left: 50px; background-color: orange; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-size: 16px; font-weight: bold; cursor: pointer;" type="submit" value="Masukkan ke Keranjang" name="submitBarang">
                                <input type="hidden" name="item_id" value="<?= $_GET['id'] ?>" />
                            </form>
                        </div>
                    </div>
                    <?php
                        if(isset($_POST['submitBarang'])){
                            require_once("connection.php");
                            $item_id = $_POST['item_id'];
                            $data_barang = $_POST['totalBarang'];
                            $sql = "UPDATE tbl_admin_foryou SET data_barang = '$data_barang' WHERE data_id = $item_id";
                            if($result = $conn->query($sql)){
                                ?>
                                <script>
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Berhasil',
                                        text: 'Barang Berhasil disimpan didalam keranjang !',
                                    }).then(()=>{
                                        window.location = "homepage.php";
                                    })
                                </script>
                            <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>

    <hr style="
        border: none;
        height: 1px;
        color: #c6c3c3;
        background-color: #c6c3c3;"
    />

    <?php
        require_once('../Layout/footer.php');
    ?>

    
    

    <script src="../../assets/js/resource/jquery.min.js"></script>
    <script src="../../assets/js/resource/pooper.min.js"></script>
    <script src="../../assets/js/resource/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
       
        function incrementQuantity() {
            var quantityInput = document.querySelector('input[name="totalBarang"]');
            var currentValue = parseInt(quantityInput.value);
            quantityInput.value = currentValue + 1;
        }

        function decrementQuantity() {
            var quantityInput = document.querySelector('input[name="totalBarang"]');
            var currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
            }
        }

        function setImage(url) {
            const bigImage = document.querySelector(".tile");
            bigImage.setAttribute("data-image", url)

            $('.tile')
                // tile mouse actions
                .on('mouseover', function() {
                    $(this).children('.photo').css({
                        'transform': 'scale(' + $(this).attr('data-scale') + ')'
                    });
                })
                .on('mouseout', function() {
                    $(this).children('.photo').css({
                        'transform': 'scale(1)'
                    });
                })
                .on('mousemove', function(e) {
                    $(this).children('.photo').css({
                        'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 + '%'
                    });
                })
                // tiles set up
                .each(function() {
                    console.log(this)   
                    $(this)
                        // add a photo container
                        .append('<div class="photo"></div>')
                        // set up a background image for each tile based on data-image attribute
                        .children('.photo').css({
                            'background-image': 'url(' + $(this).attr('data-image') + ')',
                        });
                })
        }
        <?php
            require_once("connection.php");
            $sql = "SELECT * FROM tbl_admin_foryou";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) { 
                $id = $_GET['id'];
                
                $db_id = $row['data_id'];
                if($id == $db_id){
                    $image = $row['data_image'];
                    
                } 
            }
            ?>
            setImage("../../UploadImage/DataImage/<?=$image?>")


    </script>
</body>
</html>
