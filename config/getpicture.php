<?php
use config\classes\profilePicture\profilPhoto\Profils;
require_once __DIR__ . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'profilePicture.php';

if (isset($_FILES['profile_picture']) && ($_FILES['profile_picture']['error']) == UPLOAD_ERR_OK ) { 

    $profil = new Profils();

    $image_items = $_FILES['profile_picture']['name'];
    $image_items_tmp = $_FILES['profile_picture']['tmp_name'];

    if ($image_items != "") {
        $ext = pathinfo($image_items, PATHINFO_EXTENSION);
        $file_names = basename($image_items, '-' . $ext);

        if ($ext != "jpg" && $ext != "jpeg" && $ext != "png" && $ext != "gif") {
            $error = "Extension non permi * ('.jpeg, .png, .jpg, .gif')";
        } else {
            $image_name = $usernameC . '-' . rand() . '.' . $ext;
            move_uploaded_file($image_items_tmp, '../src/assets/profilsPicture/' . $image_name);

            $newPhoto = $profil->AddPhoto($image_name,$usernameC);
        }
    } else {
        $error = "Veillez charger une image !!";
    }
} else {
    $error = "Une erreur s'est produite, réesayer plus tard";
}

?>