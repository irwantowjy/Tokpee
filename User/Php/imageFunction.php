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

    function deleteImage($location, $imageName) {
        $path = "../../UploadImage/" . $location . "/" . $imageName;
        if(file_exists($path)) if (unlink($path)) return true;
        return false;
    }
?>