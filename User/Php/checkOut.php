<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
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

        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            text-align: center;
        }

        .selected-item {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .selected-item img {
            width: 75px;
            height: 75px;
            object-fit: cover;
            border-radius: 5px;
        }

        .selected-item .item-details {
            margin-left: 10px;
        }

        .selected-item .item-details h4 {
            margin: 0;
            font-size: 18px;
        }

        .selected-item .item-details small {
            color: #777;
        }

        .proceed-button {
            display: block;
            width: 100%;
            max-width: 200px;
            margin: 0 auto;
            padding: 10px;
            font-size: 16px;
            text-align: center;
            color: #fff;
            background-color: orange; 
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .proceed-button:hover {
            background-color: darkorange; 
        }
    </style>

</head>
<body>
    <h1>Checkout</h1>

    <div class="container">
        <h2>Selected Items</h2>

        <?php
        require_once("../Php/connection.php");

        $selectedItems = array();

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
                        <strong>Total barang = <?=$item['item_value']?></strong>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p>No items selected.</p>";
        }
        ?>

        <!-- Add any additional checkout information or form elements you need -->
        <form action="homepage.php" method="post">
            <!-- Include any payment-related fields and submit button -->
            <button class="proceed-button" type="submit">Proceed to Payment</button>
        </form>
    </div>
</body>
</html>
