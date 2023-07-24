<?php 
    require_once('validateLogin.php');
    session_start();
?>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark py-4 fixed-top">
    <div class="row w-100 ml-0">
        <div class="row col-12 col-md-8">
            <div class="col-1 col-md-4 d-flex ml-0">
                <a class="navbar-brand ml-2 col-6" href="homepage.php">Tok<span style="color: orange">Pee</span></a>
                <ul class="navbar-nav">
                    <li class="nav-item active align-self-center">
                        <a class="nav-link navbar-kategori" href="#" style="font-size: 10pt;">Kategori</a>
                    </li>
                </ul>
            </div>
            <form class="search-bar d-flex form-inline my-2 my-lg-0 pl-0 col-12 col-md-8">
                <input class="form-control" type="search" id="search-input" placeholder='Search...' aria-label="Search">
                <button class="btn px-2 btn-outline-warning" id="search-button" type="button"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="row col-8 col-md-4 px-0 ml-0">
            <div class="col-5 d-flex align-items-center justify-content-around border-right px-0">
                <ul class="nav nav-pills">
                    <li class="nav-item dropdown">
                        <a class="nav-link text-light p-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-shopping-cart navbar-icon p-2 rounded" style="color: #6C727C;"></i>
                        </a>
                        <ul class="dropdown-menu boxes">
                            <li class="head text-light bg-dark">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-12">
                                        <span id="valueKeranjang">Keranjang</span>
                                        <button class="float-right text-light dismiss-button erase" style="border: none; background-color: #343A40" onclick="removeAll()">Hapus semua</button>
                                    </div>
                            </li>
                            <li class="notification-box boxes">
                                <?php
                                    require_once("../Php/connection.php");
                                    $sql1 = "SELECT * FROM tbl_admin_diskon";
                                    $sql2 = "SELECT * FROM tbl_admin_foryou";

                                    $result1 = $conn->query($sql1);
                                    $result2 = $conn->query($sql2);

                                    while ($row1 = $result1->fetch_assoc()) {
                                        $item_name = $row1['item_title'];
                                        $item_value = $row1['item_value'];
                                        $item_image = $row1['item_image'];
                            
                                        if ($item_value != null) {
                                            $selectedItems[] = array(
                                                'item_name' => $item_name,
                                                'item_value' => $item_value,
                                                'item_image' => $item_image
                                            );
                                        }
                                    }
                            
                                    while ($row2 = $result2->fetch_assoc()) {
                                        $data_name = $row2['data_name'];
                                        $data_barang = $row2['data_barang'];
                                        $data_image = $row2['data_image'];
                            
                                        if ($data_barang != null) {
                                            $selectedItems[] = array(
                                                'item_name' => $data_name,
                                                'item_value' => $data_barang,
                                                'item_image' => $data_image
                                            );
                                        }
                                    }
                            
                                    if (!empty($selectedItems)) {
                                        foreach ($selectedItems as $item) {
                                            ?>
                                            <div class="row mt-2">
                                                <div class="col-lg-3 col-sm-3 col-3 text-center">
                                                    <img src="../../UploadImage/DataImage/<?=$item['item_image']?>" class="w-75 rounded-style">
                                                </div>
                                                <div class="col-lg-7 col-sm-7 col-7 p-0">
                                                    <strong><?=$item['item_name']?></strong>
                                                    <br>
                                                    <small>Total barang = <?=$item['item_value']?></small>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                ?>
                            </li>
                            <li class="footer bg-dark text-center">
                                <a href="checkOut.php">
                                    <button class="text-light text-center m-0 dismiss-button" id="view" style="border: none; background-color: transparent">Check Out</button>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav nav-pills">
                    <li class="nav-item dropdown">
                        <a class="nav-link text-light p-0 notif" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell navbar-icon p-2 rounded" style="color: #6C727C;"></i>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-pills">
                    <li class="nav-item dropdown">
                        <a class="nav-link text-light p-0 envelope" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope navbar-icon p-2 rounded" style="color: #6C727C; font-size: 15pt !important;"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <?php
                require_once("../Php/connection.php");

                $username = $_SESSION['username'];
                $query = "SELECT username FROM tbl_akun_user";
                $result = $conn->query($query);

                $profileName = ""; // Initialize with a default value

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $profileName = $row['username'];
                }
            ?>

            <div class="row col-7 px-0 ml-2 w-100">
                <button class="navbar-user col-6 px-0" style="border: none; background-color: transparent;">
                    <a href="#" class="d-block w-100 py-2 my-sm-0 text-decoration-none profile">
                        <?php echo $profileName; ?>
                    </a>
                </button>
            </div>
        </div>
</nav>