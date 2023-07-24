<?php
    function uploadImage($location, $image) {
        $photo = $image["tmp_name"];
        $targetDirectory = "../../UploadImage/" . $location . '/';
        $extension = pathinfo($image["name"], PATHINFO_EXTENSION);
        $newFileName = uniqid() . "." . $extension;
        $targetFile = $targetDirectory . $newFileName;

        if (!is_dir($targetDirectory)) {
            mkdir($targetDirectory, 0777, true);
        }

        if (move_uploaded_file($photo, $targetFile)) {
            return $newFileName;
        } else {
            return false;
        }
    }


    // function compressImage($source, $destination, $quality) {

    //     $info = getimagesize($source);
      
    //     if ($info['mime'] == 'image/jpeg') 
    //       $image = imagecreatefromjpeg($source);
      
    //     elseif ($info['mime'] == 'image/gif') 
    //       $image = imagecreatefromgif($source);
      
    //     elseif ($info['mime'] == 'image/png') 
    //       $image = imagecreatefrompng($source);
    //       imagealphablending($image, false);
    //       imagesavealpha($image, true);
      
      
    //     if ($info['mime'] == 'image/png') {
    //       if (imagepng($image, $destination, round(9 * $quality / 100))) {
    //         return true;
    //       }
    //     } else {
    //         if (imagejpeg($image, $destination, $quality)) {
    //           return true;
    //       }
    //     }
    //     return false;
      
    //   }
?>