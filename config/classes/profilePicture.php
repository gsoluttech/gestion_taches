<?php
namespace config\profilPhoto;

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database.php';

use config\Database;
use PDO;
$conn = Database\db_connection();

class Profils {
    function AddPhoto($nomPhoto, $nomEmplye) {
        $conn = Database\db_connection();
        $sql = $conn->prepare("INSERT INTO tphoto (nomSalle, photo, typePhoto) VALUES (:nomSalle, :photo, :typePhoto)");
                $sql->bindParam(':nomSalle', $nom_services);
                $sql->bindParam(':photo', $image_name);
                $sql->bindParam(':typePhoto', $typePhotoProfil);


                if ($sql->execute()) {
                        header("Location: " . $_SERVER['REQUEST_URI']);
                        exit();
                } else {
                    $error = 'Le changement de la photo de profil a échoué';
                }
    }
}
?>