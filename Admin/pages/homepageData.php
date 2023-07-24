<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    require_once('../Layout/head.php');
    require_once('../php/connection.php');
    session_start();
  ?>
  <title>
    Tokpee Admin Page
  </title>
</head>

<body class="g-sidenav-show  bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
      <div class="sidenav-header">
          <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
          <a class="navbar-brand m-0" href="dashboard.php">
          <span class="ont-weight-bold">Tokpee</span>
          </a>
      </div>
      <hr class="horizontal dark mt-0">
      <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link " href="dashboard.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>shop </title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(0.000000, 148.000000)">
                            <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                            <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account Setting</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="user.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <svg width="15px" height="15px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                            <g transform="translate(1.000000, 0.000000)">
                            <path class="color-background opacity-6" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                            <path class="color-background" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                            <path class="color-background" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                            </g>
                        </g>
                        </g>
                    </g>
                    </svg>
                </div>
                <span class="nav-link-text ms-1">User Account</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Web pages</h6>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="HomepageCarousel.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
                </div>
                <span class="nav-link-text ms-1">Homepage - Carousel</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link  " href="HomepagePilihan.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
                </div>
                <span class="nav-link-text ms-1">Homepage - Pilihan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="HomepageKejarDiskon.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
                </div>
                <span class="nav-link-text ms-1">Homepage - Diskon</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="HomepageData.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
                </div>
                <span class="nav-link-text ms-1">Homepage - Data</span>
                </a>
            </li>
          
          </ul>
      </div>
    </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Homepage - Diskon</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Homepage - Diskon</h6>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
              <a href="sign-in.php" class="nav-link text-body font-weight-bold px-0">
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none">
                  <?php
                    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
                      echo $_SESSION['admin_username'];
                    }
                    else{
                      echo "Sign In";
                    }
                  ?>
              </span>
              </a>
          </li>
          </ul>
      </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-scroller">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="card" style="padding:10px 24px;">
                    <div class="card-body">
                      <h4 class="card-title" style="padding:12px 24px;">Items Data</h4>    
                        <div class="table-responsive table-wrapper"  >
                          <table class="table display" id="table">
                            <thead>
                                <tr>
                                <th>Data Image</th>
                                <th>Data Name</th>
                                <th>Price</th>
                                <th>Location</th>
                                <th>Rating</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                                $result = $conn->query("SELECT * FROM tbl_admin_foryou");
                                  while($row = $result->fetch_assoc()) {
                                      $id = $row['data_id'];
                                      $name = $row['data_name'];                       
                                      $price = $row['data_price'];
                                      $loc = $row['data_location'];
                                      $rate = $row['data_rate'];
                                      $image = $row['data_image'];

                                      echo '<tr>';
                                      echo "<td style='padding:12px 24px;'><img style='width:100px' src='../../UploadImage/DataImage/{$image}'></td>";
                                      echo "<td style='padding:12px 24px;'>{$name}</td>";
                                      echo "<td style='padding:12px 24px;'>{$price}</td>";
                                      echo "<td style='padding:12px 24px;'>{$loc}</td>";
                                      echo "<td style='padding:12px 24px;'>{$rate}</td>";
                                      ?>
                                      <form method="post">
                                        <td>
                                            <input type='hidden' name='id'  value='<?= $id ?>'>
                                            <div style='padding:10px 24px;'>
                                                <input class='btn-primary' style='padding:5px 10px;' type='submit' name='edit' value='Edit'>
                                            </div>
                                        </td>
                                        <td>
                                            <div style='padding:10px 24px;'>
                                                <input class='btn-primary' style='padding:5px 10px;' type='submit' name='delete' value='Delete'>
                                            </div>
                                        </td>
                                      </form>
                                      </tr>
                                      <?php
                                      }
                                  ?>
                                </tbody>
                              </table>
                              <script>
                                  $('#table').DataTable();
                              </script>
                            </div>
                        </div>
                    </div>
                    <?php
                      require('../php/function.php');
                      require_once('../php/imageFunction.php');
                      require_once('../php/connection.php');

                      if(isset($_POST['delete'])){
                          deleteData($_POST['id']);
                      }

                      if (isset($_POST['edit'])) {
                        $tmp = getIdData($_POST['id']);
                        ?>
                    
                        <div class="card-body">
                            <h4 class="card-title">Data Edit</h4>
                            <form class="forms-sample" method="post" enctype="multipart/form-data">
                    
                                <div class="form-group row">
                                    <label for="dataName" class="col-sm-3 col-form-label">Data Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" required name="dataName" value="<?php if (isset($tmp)) echo $tmp['data_name']; ?>" class="form-control" id="dataName" placeholder="Name">
                                    </div>
                                </div>
                    
                                <div class="form-group row">
                                    <label for="dataPrice" class="col-sm-3 col-form-label">Data Price</label>
                                    <div class="col-sm-6">
                                        <input type="text" required name="dataPrice" value="<?php if (isset($tmp)) echo $tmp['data_price']; ?>" class="form-control" id="dataPrice" placeholder="Price">
                                    </div>
                                </div>
                    
                                <div class="form-group row">
                                    <label for="dataLocation" class="col-sm-3 col-form-label">Data Location</label>
                                    <div class="col-sm-6">
                                        <input type="text" required name="dataLocation" value="<?php if (isset($tmp)) echo $tmp['data_location']; ?>" class="form-control" id="dataLocation" placeholder="Location">
                                    </div>
                                </div>
                    
                                <div class="form-group row">
                                    <label for="dataRating" class="col-sm-3 col-form-label">Rating</label>
                                    <div class="col-sm-6">
                                        <input type="text" required name="dataRating" value="<?php if (isset($tmp)) echo $tmp['data_rate']; ?>" class="form-control" id="dataRating" placeholder="Rating">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="dataImage" class="col-sm-3 col-form-label">Add Image</label>
                                    <div class="col-sm-6">
                                        <input type="file" accept="image/*" name="dataImage" class="form-control" id="dataImage" required>
                                    </div>
                                </div>
                    
                                <input type='hidden' name='id' value='<?= $id ?>'>
                                <input type="submit" class="btn btn-primary mr-2" name="submitEdit" value="Edit">
                    
                            </form>
                        </div>
                    <?php
                    }
                    
                    if (isset($_POST['submitEdit'])) {
                        $id = $_POST['id'];
                        $name = $_POST['dataName'];
                        $price = $_POST['dataPrice'];
                        $loc = $_POST['dataLocation'];
                        $rating = $_POST['dataRating'];
                        $image = $_FILES['dataImage'];
                        $pict = uploadImage('DataImage', $image);
                    
                        updateData($id, $name, $price, $loc, $rating, $pict);
                    }
                  ?>
                    <div class="card-body" >
                        <h4 class="card-title mb-5">Homepage Data</h4>

                      <h5 class="text-start">Add Data</h5>  

                        <form class="forms-sample" method="post" enctype="multipart/form-data">

                            <div class="form-group row">
                                <label for="dataImage" class="col-sm-3 col-form-label">Add Image</label>
                                <div class="col-sm-6">
                                    <input type="file" accept="image/*" name="dataImage" class="form-control" id="dataImage" required>
                                </div>
                            </div>
                                
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Data name</label>
                                <div class="col-sm-6">
                                    <input type="text" required name="dataName" class="form-control" id="dataName" placeholder="Name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Price" class="col-sm-3 col-form-label">Price</label>
                                <div class="col-sm-6">
                                    <input type="text" required name="dataPrice" class="form-control" id="dataPrice" placeholder="Price">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Location" class="col-sm-3 col-form-label">Location</label>
                                <div class="col-sm-6">
                                    <input type="text" required name="dataLocation"  class="form-control" id="dataLocation" placeholder="Location">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Rate" class="col-sm-3 col-form-label">Rating</label>
                                <div class="col-sm-6">
                                    <input type="text" required name="dataRate"  class="form-control" id="dataRate" placeholder="Rating">
                                </div>
                            </div>
                                
                            <input type="submit" class="btn btn-primary mr-2" name="submitAdd" value="Add">   

                        </form>
                    </div>
                    <?php
                      if(isset($_POST['submitAdd'])){
                          require_once('../php/imageFunction.php');
                          require_once('../php/connection.php');

                          $image = $_FILES['dataImage'];
                          $pict = uploadImage('DataImage', $image);
                          $name = $_POST['dataName'];
                          $price = $_POST['dataPrice'];
                          $loc = $_POST['dataLocation'];
                          $rate = $_POST['dataRate'];
                      
                          $sql = "INSERT INTO tbl_admin_foryou (data_name, data_price, data_location, data_rate, data_image) VALUES ('$name','$price', '$loc','$rate', '$pict')";

                          if ($conn->query($sql)) {
                              ?>
                                <script>
                                  Swal.fire({
                                  icon: 'success',
                                  text: 'Data Has Been Added',
                                  }).then(()=>{
                                      window.location = "homepageData.php";
                                  })
                                </script>
                              <?php
                          }      
                      }
                      ?>
                  </div>
                </div>
            </div>
        </div>

  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "#fff",
          data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 15,
              font: {
                size: 14,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false
            },
            ticks: {
              display: false
            },
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: "Mobile apps",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#cb0c9f",
            borderWidth: 3,
            backgroundColor: gradientStroke1,
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

          },
          {
            label: "Websites",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#3A416F",
            borderWidth: 3,
            backgroundColor: gradientStroke2,
            fill: true,
            data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
            maxBarThickness: 6
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#b2b9bf',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#b2b9bf',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>