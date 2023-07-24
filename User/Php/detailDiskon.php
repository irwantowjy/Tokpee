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
                    <div class="col-12 tile h-75 border mb-3 cursor-img">
                        <div class="photo"></div>
                    </div>

                </div>

                <?php
                    require_once("connection.php");
                    $sql = "SELECT * FROM tbl_admin_diskon";
                    $result = $conn->query($sql);
        
                    while ($row = $result->fetch_assoc()) { 
                        $id = $_GET['id'];
                        
                        $db_id = $row['item_id'];
                        if($id == $db_id){
                            $image = $row['item_image'];
                            $name = $row['item_title'];
                            $price = $row['price_after'];
                            $rate = 5;
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
                            $sql = "UPDATE tbl_admin_diskon SET item_value = '$data_barang' WHERE item_id = $item_id";
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
    <br>
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
        // set pertama kali, krn undefined
        <?php
            require_once("connection.php");
            $sql = "SELECT * FROM tbl_admin_diskon";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) { 
                $id = $_GET['id'];
                
                $db_id = $row['item_id'];
                if($id == $db_id){
                    $image = $row['item_image'];  
                } 
            }
            ?>
            setImage("../../UploadImage/DataImage/<?=$image?>")
            
        function setTab(evt) {
            [...document.getElementsByClassName("btn-style")].forEach(btn => {
                btn.classList.remove('active')
            });
            evt.currentTarget.classList.add("active")
        }

        function myFunction() {
            var dots = document.getElementById("dots")
            var moreText = document.getElementById("more")
            var btnText = document.getElementById("myBtn")

            if (dots.style.display === "none") {
                dots.style.display = "inline"
                btnText.innerHTML = "Selengkapnya..."
                moreText.style.display = "none"
            } else {
                dots.style.display = "none"
                btnText.innerHTML = "Singkatnya..."
                moreText.style.display = "inline"
            }
        }

        const openMore = () => {
            const dotss = document.getElementById("dots1")
            const moreTexts = document.getElementById("more1")
            const btnTexts = document.getElementById("view")
            const setTrue = document.querySelector("#navbarDropdown")

            if (dotss.style.display === "none") {
                dotss.style.display = "inline"
                btnTexts.innerHTML = "View All"
                moreTexts.style.display = "none"
            } else {
                dotss.style.display = "none"
                btnTexts.innerHTML = "View Less"
                moreTexts.style.display = "inline"
            }
            setTrue.dispatchEvent(new Event('click'))

            $('.dropdown-menu li').each(function() {
                $('li.notification-box.boxes').show()
            });

        }

        $('.dismiss-button').on("click", function(event) {
            $(this).parents("li.notification-box").remove()
            $('ul.dropdown-menu.boxes').css("display", "block")
            $('.dropdown-menu.boxes').show()
            const test = $('li.notification-box').length
            $('span#valueKeranjang').text(`Keranjang (${test})`)
            if ($('li.notification-box').length == 0) removeAll()
            else if ($('li.notification-box').length == 3) openMore()
        });

        const removeAll = () => {
            $('ul.dropdown-menu.boxes').css("display", "block")
            $('.dropdown-menu.boxes').show()
            $(".dropdown-menu.boxes").css("height", "350px")
            $(".dropdown-menu.boxes").html(`
    <div class="d-flex flex-column justify-content-center align-items-center mt-3">
      <img src="https://ecs7.tokopedia.net/assets-tokopedia-lite/v2/zeus/production/103cf4bc.jpg" width="200" height="150">
      <p class="mt-2" style="font-family:'open-sans'; font-weight: bold; font-size: 14pt;">Wah, keranjang belanjamu kosong</p>
      <p class="text-center" style="font-size: 11pt;">Daripada dianggurin, mending isi dengan barang-barang impianmu. Yuk, cek sekarang!</p>
      <a type="button" id="belanja" class="btn" href="#ppp-1" style="background-color: orange; color: white; ">Mulai Belanja</a>
    </div>
  `)
            $('a#belanja').click(() => {
                $('.dropdown-menu.boxes').css("display", "none")
            })
        }
        const $dropdown = $(".dropdown")
        const $dropdownToggle = $(".dropdown-toggle")
        const $dropdownMenu = $(".dropdown-menu")
        const showClass = "show"

        $(window).on("load resize", function() {
            if (this.matchMedia("(min-width: 768px)").matches) {
                $dropdown.hover(
                    function() {
                        const $this = $(this);
                        $this.addClass(showClass)
                        $this.find($dropdownToggle).attr("aria-expanded", "true")
                        $this.find($dropdownMenu).addClass(showClass)
                    },
                    function() {
                        const $this = $(this);
                        $this.removeClass(showClass)
                        $this.find($dropdownToggle).attr("aria-expanded", "false")
                        $this.find($dropdownMenu).removeClass(showClass)
                    }
                )
            } else {
                $dropdown.off("mouseenter mouseleave")
            }
        })

        $('#copyLinkBtn').click(() => {
            navigator.clipboard.writeText(window.location.href)
            .then(() => {
                alert('URL copied to clipboard');
            })
            .catch((err) => {
                console.error('Failed to copy URL: ', err);
            });
        })
    </script>
</body>
</html>
