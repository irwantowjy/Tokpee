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
            <div id="carouselExampleIndicators" class="carousel slide mt-3" data-ride="carousel">
                <ol class="carousel-indicators carousel-style">
                    <?php
                    require_once("connection.php");
                    $sql = "SELECT * FROM tbl_admin_carousel";
                    $result = $conn->query($sql);
                    $indicators = [];
                    $itemCount = 0;
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $indicatorClass = $itemCount === 0 ? 'active' : '';
                            echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $itemCount . '" class="' . $indicatorClass . '"></li>';
                            $indicators[] = $row['carousel_image'];
                            $itemCount++;
                        }
                    }
                    ?>
                </ol>
                <div class="carousel-inner">
                    <?php
                    foreach ($indicators as $key => $image) {
                        $itemClass = $key === 0 ? 'active' : '';
                        echo '<div class="carousel-item ' . $itemClass . '">';
                        echo '<img class="d-block w-100 mx-auto mb-5 rounded-style" src="../../UploadImage/Carousel/' . $image . '">';
                        echo '</div>';
                    }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" style="margin-right: 8rem;" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" style="margin-left: 8rem;" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!-- end of carousel -->

        <div class="container">
            <div class="row py-3">
                <div class="col-12 col-lg-12">
                    <h2 class="mb-3 mt-3 text-center">Kategori Pilihan</h2>
                    <div class="row">
                        <?php
                        require_once("connection.php");
                        $sql = "SELECT * FROM tbl_admin_kategori";
                        $result = $conn->query($sql);

                        while ($row = $result->fetch_assoc()) {
                            $kategoriImage = $row['kategori_image'];
                        ?>
                            <div class="col-md-4 col-6 mx-md-auto">
                                <div class="border rounded-style p-3 text-center hover-kotak">
                                    <img src="../../UploadImage/Kategori/<?= $kategoriImage ?>" width="120" height="120">
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- end of kategori -->

        <div id="here" class="container">
            <div class="w-100 align-items-center d-inline-flex justify-content-between mb-1 mt-5">
                <h2>Paling Banyak Dicari</h2>
                <button id="muat-ulang" class="muat-lainnya my-0" style="border: none; background-color: white;"><i class="fas fa-redo"></i> Muat lainnya</button>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="card mb-3 rounded-style">
                        <div class="row no-gutters hover-kotak">
                            <div class="col-md-4 m-auto pl-3" style="margin-top: 18px !important;">
                                <figure class="card-image loading" style="width: 64px; height: 64px;" class="card-img" alt="..."></figure>
                            </div>
                            <div class="card-detail col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title loading"></h5>
                                    <p class="card-text card-description loading m-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-6">
                    <div class="card mb-3 rounded-style">
                        <div class="row no-gutters hover-kotak">
                            <div class="col-md-4 m-auto pl-3" style="margin-top: 18px !important;">
                                <figure class="card-image loading" style="width: 64px; height: 64px;" class="card-img" alt="..."></figure>
                            </div>
                            <div class="card-detail col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title loading"></h5>
                                    <p class="card-text card-description loading m-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="card mb-3 rounded-style">
                        <div class="row no-gutters hover-kotak">
                            <div class="col-md-4 m-auto pl-3" style="margin-top: 18px !important;">
                                <figure class="card-image loading" style="width: 64px; height: 64px;" class="card-img" alt="..."></figure>
                            </div>
                            <div class="card-detail col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title loading"></h5>
                                    <p class="card-text card-description loading m-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="card mb-3 rounded-style">
                        <div class="row no-gutters hover-kotak">
                            <div class="col-md-4 m-auto pl-3" style="margin-top: 18px !important;">
                                <figure class="card-image loading" style="width: 64px; height: 64px;" class="card-img" alt="..."></figure>
                            </div>
                            <div class="card-detail col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title loading"></h5>
                                    <p class="card-text card-description loading m-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end of paling banyak dicari  -->

        <div class="container">
            <div class="d-flex align-items-baseline">
                <h2 class="mt-5 mb-3">Kejar Diskon</h2>
                <p class="d-none d-lg-block ml-3" style="font-size: 15pt;">Berakhir dalam
                    <div id="timer-countdown" style="color: white; font-weight: bold;">
                        <div class="container">
                            <div class="row">
                                <div class="countdown">
                                    <div class="bloc-time hours ml-2" data-init-value="24">
                                        <div class="figure hours hours-1">
                                            <span class="top">2</span>
                                            <span class="top-back">
                                                <span>2</span>
                                            </span>
                                            <span class="bottom">2</span>
                                            <span class="bottom-back">
                                                <span>2</span>
                                            </span>
                                        </div>

                                        <div class="figure hours hours-2">
                                            <span class="top">4</span>
                                            <span class="top-back">
                                                <span>4</span>
                                            </span>
                                            <span class="bottom">4</span>
                                            <span class="bottom-back">
                                                <span>4</span>
                                            </span>
                                        </div>
                                        <p class="m-0 ml-1" style="display: inline-block; color: #ef144a"> : </p>
                                    </div>
                                    <div class="bloc-time min" data-init-value="0">
                                        <div class="figure min min-1">
                                            <span class="top">0</span>
                                            <span class="top-back">
                                                <span>0</span>
                                            </span>
                                            <span class="bottom">0</span>
                                            <span class="bottom-back">
                                                <span>0</span>
                                            </span>
                                        </div>

                                        <div class="figure min min-2">
                                            <span class="top">0</span>
                                            <span class="top-back">
                                                <span>0</span>
                                            </span>
                                            <span class="bottom">0</span>
                                            <span class="bottom-back">
                                                <span>0</span>
                                            </span>
                                        </div>
                                        <p class="m-0 ml-1" style="display: inline-block; color: #ef144a"> : </p>
                                    </div>

                                    <div class="bloc-time sec" data-init-value="0">
                                        <div class="figure sec sec-1">
                                            <span class="top">0</span>
                                            <span class="top-back">
                                                <span>0</span>
                                            </span>
                                            <span class="bottom">0</span>
                                            <span class="bottom-back">
                                                <span>0</span>
                                            </span>
                                        </div>

                                        <div class="figure sec sec-2">
                                            <span class="top">0</span>
                                            <span class="top-back">
                                                <span>0</span>
                                            </span>
                                            <span class="bottom">0</span>
                                            <span class="bottom-back">
                                                <span>0</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </p>
            </div>
            <div class="card-deck">
                <div class="row">
                    <div class="col-12">
                        <div class="row">

                            <?php
                                require_once("connection.php");
                                $sql = "SELECT * FROM tbl_admin_diskon";
                                $result = $conn->query($sql);
        
                                while ($row = $result->fetch_assoc()) {
                                    $title = $row['item_title'];                       
                                    $dsc = $row['discount_value'];
                                    $before = $row['price_before'];
                                    $after = $row['price_after'];
                                    $avail = $row['availbility'];
                                    $image = $row['item_image'];
                                    $id = $row['item_id']
                                ?>
                              
                                    <div class="col-lg col-md-4 col-6 px-lg-0 pl-md-0 pr-0">
                                        <a href="detailDiskon.php?id=<?=$id?>" class="text-decoration-none">
                                            <div class="card mb-3 mx-auto shadow-sm" style="width: 92%; height: 97%">
                                                <img class="card-img-top" src="../../UploadImage/DataImage/<?= $image ?>" alt="Card image cap">
                                                <div class="card-body p-2 d-flex flex-column justify-content-between">
                                                    <p class="card-title text-left text-dark"><?=$title?></p>
                                                    <div class="d-flex align-items-center mb-2">
                                                        <p class="card-text m-0 diskon rounded"><small><?=$dsc?>%</small></p>
                                                        <p class="card-text ml-2"><small class="text-muted"><s>Rp.<?=$before?></s></small></p>
                                                    </div>
                                                    <h5 class="card-text mb-2" style="font-weight: bold;">Rp.<?=$after?></h5>
                                                    <div>
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$dsc?>%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <p class="card-text"><small class="text-muted"><?=$avail?></small></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                               
                                <?php
                                }

                            ?>

                            

                        </div>
                    </div>
                </div>
            </div>
        </div>  
        
        <!-- end of diskon -->

        <div class="container mt-4 mb-4">
            <div class="row">
                <div class="col-12 col-lg-6 py-6 mb-5">
                    <div class="w-100 align-items-center d-inline-flex justify-content-between">
                        <h2 class="mb-3 mt-3">Official Store</h2>
                        <a href="#" class="muat-lainnya my-0">Lihat Semua</a>
                    </div>
                    <div class="row no-gutters" id="item-1">
                        <img class="col-4" src="../../assets/img/1.jpg" alt="1">
                        <img class="col-4" src="../../assets/img/2.jpg" alt="2">
                        <img class="col-4" src="../../assets/img/3.jpg" alt="3">
                    </div>
                </div>
                <div class="col-12 col-lg-6 py-6 mb-5">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-block w-100">
                                    <h2 class="mb-3 mt-3">Lengkapi Persediaanmu</h2>
                                    <div class="row no-gutters">
                                        <img class="col-4" src="../../assets/img/1-1.jpg" alt="1-1">
                                        <img class="col-4" src="../../assets/img/1-2.jpg" alt="1-2">
                                        <img class="col-4" src="../../assets/img/1-3.jpg" alt="1-3">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-block w-100">
                                    <h2 class="mb-3 mt-3">Top Trending</h2>
                                    <div class="row no-gutters">
                                        <img class="col-4" src="../../assets/img/2-1.jpg" alt="2-1">
                                        <img class="col-4" src="../../assets/img/2-2.jpg" alt="2-2">
                                        <img class="col-4" src="../../assets/img/2-3.jpg" alt="2-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev mt-5" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next mt-5" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- end of official -->

        <div class="container p-0 mt-3 text-center">
            <div class="container px-4 py-2 w-100" style="position: sticky; top: 0; z-index: 1; background-color: white;">
                <button id="ppp-1" class="tablink btn border rounded-style color-button active" onclick="colorChanges(event, 'for-you')">
                    <a href="#item-1" class="navlink d-block w-100" style="color: white; text-decoration: none">For You</a>
                </button>
                <button id="ppp-2" class="tablink btn ml-md-2 border rounded-style color-button" onclick="colorChanges(event, 'special-disc')">
                    <a href="#item-1" class="navlink d-block w-100" style="color: white; text-decoration: none">Special Discount</a>
                </button>
                <button id="ppp-3" class="tablink btn ml-md-2 border rounded-style color-button" onclick="colorChanges(event, 'wanita')">
                    <a href="#item-1" class="navlink d-block w-100" style="color: white; text-decoration: none">Wanita</a>
                </button>
                <button id="ppp-4" class="tablink btn ml-lg-2 border rounded-style color-button" onclick="colorChanges(event, 'aksesoris-motor')">
                    <a href="#item-1" class="navlink d-block w-100" style="color: white; text-decoration: none">Aksesoris Motor</a>
                </button>
                <button id="ppp-5" class="tablink btn ml-xl-2 border rounded-style color-button" onclick="colorChanges(event, 'audio')">
                    <a href="#item-1" class="navlink d-block w-100" style="color: white; text-decoration: none">Audio</a>
                </button>
            </div>

            <div class="container">
                
                <?php
                    require_once("connection.php");
                    $sql = "SELECT * FROM tbl_admin_foryou";
                    $result = $conn->query($sql);
                ?>

                <div id="for-you" class="tabcontents" style="display: block;">
                    <div class="container">
                        <div class="card-deck">
                            <div class="row">
                                <?php $counter = 0; ?>
                                <?php while ($row = $result->fetch_assoc()) {       
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

                <div id="special-disc" class="tabcontents">
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

                <div id="wanita" class="tabcontents">
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

                <div id="aksesoris-motor" class="tabcontents">
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

                <div id="audio" class="tabcontents">
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
                content: '<div class="d-flex justify-content-between align-items-center smt-2 text-center"><p class="ml-4 mt-4">Masih Belum Terdapat Notifikasi!</p></div>',
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