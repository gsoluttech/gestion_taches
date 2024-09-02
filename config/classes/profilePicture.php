<?php
namespace config\classes\profilePicture\profilPhoto;

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database.php';

use config\Database;
use PDO;
$conn = Database\db_connection();

class Profils {
    function AddPhoto($nomPhoto, $nomEmplye) {
        $conn = Database\db_connection();

        $sql = $conn->prepare("INSERT INTO photoprofil (nom,employeName) VALUES (:nom,:employeName)");
                $sql->bindParam(':nom', $nomPhoto);
                $sql->bindParam(':employeName', $nomEmplye);

                if ($sql->execute()) {
                        header("Location: " . $_SERVER['REQUEST_URI']);
                        exit();
                } else {
                    
                }
    }

    function searchPhoto($nomEmplye) {
        $conn = Database\db_connection();

        $sql = $conn->prepare("SELECT * FROM photoprofil WHERE employeName=?");
        $sql->execute(array($nomEmplye));

        $total = $sql->rowCount();
        $resultat = $sql->fetchAll(PDO::FETCH_ASSOC);

        if($total != 0) {
            return $resultat;
        } else {
            //
        }
    }
}
?>