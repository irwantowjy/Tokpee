<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
    function getIdUser($id) {
      require_once('../../User/php/connection.php');
      $query = "SELECT * FROM tbl_akun_user where user_id = $id";
      if ($result = $conn -> query($query)) return $result -> fetch_assoc();
      return null;
    }

    function getIdAdmin($id) {
      require_once('../../User/php/connection.php');
      $query = "SELECT * FROM tbl_akun_admin where admin_id = $id";
      if ($result = $conn -> query($query)) return $result -> fetch_assoc();
      return null;
    }

    function getIdItem($id) {
      require_once('../../User/php/connection.php');
      $query = "SELECT * FROM tbl_admin_diskon where item_id = $id";
      if ($result = $conn -> query($query)) return $result -> fetch_assoc();
      return null;
    }

    function getIdOfficial($id) {
      require_once('../../User/php/connection.php');
      $query = "SELECT * FROM tbl_admin_official where item_id = $id";
      if ($result = $conn -> query($query)) return $result -> fetch_assoc();
      return null;
    }

    function getIdData($id) {
      require_once('../../User/php/connection.php');
      $query = "SELECT * FROM tbl_admin_foryou where data_id = $id";
      if ($result = $conn -> query($query)) return $result -> fetch_assoc();
      return null;
    }

    function deleteUser($id) {
      ?>
      <script>
        Swal.fire({
          title: 'Are you sure you want to delete this data?',
          showDenyButton: true,
          confirmButtonText: 'Yes',
          denyButtonText: 'No'
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire({
              title: 'Saved!',
              text: 'Your Data Has Been Deleted!',
              icon: 'success'
            }).then(() => {
              window.location = "../pages/dashboard.php";
            });
            <?php
            require_once('../../User/php/connection.php');
            $query = "DELETE FROM tbl_akun_user WHERE user_id = $id";
            $conn->query($query);
            ?>
          } else if (result.isDenied) {
            Swal.fire('Changes are not saved', '', 'info');
          }
        });
      </script>
    <?php
    }

    function deleteData($id) {
      ?>
      <script>
        Swal.fire({
          title: 'Are you sure you want to delete this data?',
          showDenyButton: true,
          confirmButtonText: 'Yes',
          denyButtonText: 'No'
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire({
              title: 'Saved!',
              text: 'Your Data Has Been Deleted!',
              icon: 'success'
            }).then(() => {
              window.location = "../pages/homepageData.php";
            });
            <?php
            require_once('../../User/php/connection.php');
            $query = "DELETE FROM tbl_admin_foryou WHERE data_id = $id";
            $conn->query($query);
            ?>
          } else if (result.isDenied) {
            Swal.fire('Changes are not saved', '', 'info');
          }
        });
      </script>
    <?php
    }

    function deleteAdmin($id) {
      ?>
      <script>
        Swal.fire({
          title: 'Are you sure you want to delete this data?',
          showDenyButton: true,
          confirmButtonText: 'Yes',
          denyButtonText: 'No'
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire({
              title: 'Saved!',
              text: 'Your Data Has Been Deleted!',
              icon: 'success'
            }).then(() => {
              window.location = "../pages/dashboard.php";
            });
            <?php
            require_once('../../User/php/connection.php');
            $query = "DELETE FROM tbl_akun_admin WHERE admin_id = $id";
            $conn->query($query);
            ?>
          } else if (result.isDenied) {
            Swal.fire('Changes are not saved', '', 'info');
          }
        });
      </script>
    <?php
    }

    function deleteItem($id) {
      ?>
      <script>
        Swal.fire({
          title: 'Are you sure you want to delete this data?',
          showDenyButton: true,
          confirmButtonText: 'Yes',
          denyButtonText: 'No'
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire({
              title: 'Saved!',
              text: 'Your Data Has Been Deleted!',
              icon: 'success'
            }).then(() => {
              window.location = "../pages/homepageKejarDiskon.php";
            });
            <?php
            require_once('../../User/php/connection.php');
            $query = "DELETE FROM tbl_admin_diskon WHERE item_id = $id";
            $conn->query($query);
            ?>
          } else if (result.isDenied) {
            Swal.fire('Changes are not saved', '', 'info');
          }
        });
      </script>
    <?php
    }

    function deleteOfficialItem($id) {
      ?>
      <script>
        Swal.fire({
          title: 'Are you sure you want to delete this data?',
          showDenyButton: true,
          confirmButtonText: 'Yes',
          denyButtonText: 'No'
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire({
              title: 'Saved!',
              text: 'Your Data Has Been Deleted!',
              icon: 'success'
            }).then(() => {
              window.location = "../pages/homepageOfficial.php";
            });
            <?php
            require_once('../../User/php/connection.php');
            $query = "DELETE FROM tbl_admin_official WHERE item_id = $id";
            $conn->query($query);
            ?>
          } else if (result.isDenied) {
            Swal.fire('Changes are not saved', '', 'info');
          }
        });
      </script>
    <?php
    }
    
    function updateUser($id, $email, $user, $pass, $pict, $phone, $gender, $address)
    {
        require_once('../../User/php/connection.php');
        if ($pict['error'] === UPLOAD_ERR_OK) {
            $filename = $pict['name'];
            $tmp_name = $pict['tmp_name'];
            $upload_path = '../../UploadImage/Profile/' . $filename;
            
            if (move_uploaded_file($tmp_name, $upload_path)) {
                if (!empty($pass)) {
                    $query = "UPDATE tbl_akun_user SET username = '$user', email = '$email', user_password = '$pass', user_profile = '$filename', no_hp = '$phone', jenis_kelamin = '$gender', alamat = '$address' WHERE user_id = '$id'"; 
                } else {
                    $query = "UPDATE tbl_akun_user SET username = '$user', email = '$email', user_profile = '$filename', no_hp = '$phone', jenis_kelamin = '$gender', alamat = '$address' WHERE user_id = '$id'";
                }
                
                if ($conn->query($query)) {
                    ?>
                      <script>
                        Swal.fire({
                          title: 'Saved!',
                          text: 'Your Data Has Been Changed !',
                          icon: 'success'
                        }).then(() => {
                          window.location = "../pages/dashboard.php";
                        });
                      </script>
                    <?php
                } else {
                    echo $conn->error;
                }
            } else {
                echo "Failed to move uploaded file.";
            }
        } else {
            if (!empty($pass)) {
                $query = "UPDATE tbl_akun_user SET username = '$user', email = '$email', user_password = '$pass', no_hp = '$phone', jenis_kelamin = '$gender', alamat = '$address' WHERE user_id = '$id'";
            } else {
                $query = "UPDATE tbl_akun_user SET username = '$user', email = '$email', no_hp = '$phone', jenis_kelamin = '$gender', alamat = '$address' WHERE user_id = '$id'";
            }
            
            if ($conn->query($query)) {
              ?>
                <script>
                  Swal.fire({
                    title: 'Saved!',
                    text: 'Your Data Has Been Changed !',
                    icon: 'success'
                  }).then(() => {
                    window.location = "../pages/dashboard.php";
                  });
                </script>
              <?php
            } else {
                echo $conn->error;
            }
        }
    
        return false; 
    }

    function updateAdmin($id, $email, $user, $pass, $pict)
    {
        require_once('../../User/php/connection.php');
        if ($pict['error'] === UPLOAD_ERR_OK) {
            $filename = $pict['name'];
            $tmp_name = $pict['tmp_name'];
            $upload_path = '../../UploadImage/Profile/' . $filename;
            
            if (move_uploaded_file($tmp_name, $upload_path)) {
                if (!empty($pass)) {
                    $query = "UPDATE tbl_akun_admin SET admin_username = '$user', admin_email = '$email', admin_password = '$pass', admin_profile = '$filename' WHERE admin_id = '$id'"; 
                } else {
                    $query = "UPDATE tbl_akun_admin SET admin_username = '$user', admin_email = '$email', admin_profile = '$filename' WHERE admin_id = '$id'";
                }
                
                if ($conn->query($query)) {
                    ?>
                      <script>
                        Swal.fire({
                          title: 'Saved!',
                          text: 'Your Data Has Been Changed !',
                          icon: 'success'
                        }).then(() => {
                          window.location = "../pages/admin.php";
                        });
                      </script>
                    <?php
                } else {
                    echo $conn->error;
                }
            } else {
                echo "Failed to move uploaded file.";
            }
        } else {
            if (!empty($pass)) {
                $query = "UPDATE tbl_akun_admin SET admin_username = '$user', admin_email = '$email', admin_password = '$pass' WHERE admin_id = '$id'";
            } else {
                $query = "UPDATE tbl_akun_admin SET admin_username = '$user', admin_email = '$email' WHERE admin_id = '$id'";
            }
            
            if ($conn->query($query)) {
              ?>
                <script>
                  Swal.fire({
                    title: 'Saved!',
                    text: 'Your Data Has Been Changed !',
                    icon: 'success'
                  }).then(() => {
                    window.location = "../pages/dashboard.php";
                  });
                </script>
              <?php
            } else {
                echo $conn->error;
            }
        }
    
        return false; 
    }

    function updateItem($id, $title, $value, $priceBefore, $priceAfter, $avail, $pict)
    {
        require_once('../../User/php/connection.php');
        $query = "UPDATE tbl_admin_diskon SET item_title = '$title', discount_value = '$value', price_before = '$priceBefore', price_after = '$priceAfter', availbility = '$avail', item_image = '$pict' WHERE item_id = '$id'";
        if ($conn->query($query)) {
    ?>
            <script>
                Swal.fire({
                    title: 'Saved!',
                    text: 'Your Data Has Been Changed!',
                    icon: 'success'
                }).then(() => {
                    window.location = "../pages/homepageKejarDiskon.php";
                });
            </script>
    <?php
        } else {
            echo $conn->error;
        }
    }

    function updateOfficialItem($id, $name, $pict1, $pict2, $pict3)
    {
        require_once('../../User/php/connection.php');
        $query = "UPDATE tbl_admin_official SET item_name = '$name', image_1  = '$pict1', image_2  = '$pict2', image_3  = '$pict3' WHERE item_id = '$id'";
        if ($conn->query($query)) {
    ?>
            <script>
                Swal.fire({
                    title: 'Saved!',
                    text: 'Your Data Has Been Changed!',
                    icon: 'success'
                }).then(() => {
                    window.location = "../pages/homepageOfficial.php";
                });
            </script>
    <?php
        } else {
            echo $conn->error;
        }
    }

    function updateData($id, $name, $price, $loc, $rating, $pict){
      require_once('../../User/php/connection.php');
        $query = "UPDATE tbl_admin_foryou SET data_name = '$name', data_price = '$price', data_location = '$loc', data_rate = '$rating', data_image = '$pict' WHERE data_id = '$id'";
        if ($conn->query($query)) {
    ?>
            <script>
                Swal.fire({
                    title: 'Saved!',
                    text: 'Your Data Has Been Changed!',
                    icon: 'success'
                }).then(() => {
                    window.location = "../pages/homepageData.php";
                });
            </script>
    <?php
        } else {
            echo $conn->error;
        }
    }

    function updateCarousel($id, $name, $price, $loc, $rating, $pict){
      require_once('../../User/php/connection.php');
        $query = "UPDATE tbl_admin_foryou SET data_name = '$name', data_price = '$price', data_location = '$loc', data_rate = '$rating', data_image = '$pict' WHERE data_id = '$id'";
        if ($conn->query($query)) {
    ?>
            <script>
                Swal.fire({
                    title: 'Saved!',
                    text: 'Your Data Has Been Changed!',
                    icon: 'success'
                }).then(() => {
                    window.location = "../pages/homepageData.php";
                });
            </script>
    <?php
        } else {
            echo $conn->error;
        }
    }
  
  ?>