<?php
namespace config\profilPhoto;

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database.php';

use config\Database;
use PDO;
$conn = Database\db_connection();

class Profils {
    function AddPhoto($nomPhoto, $nomEmplye) {
        $sql = $bdd->prepare("INSERT INTO tphoto (nomSalle, photo, typePhoto) VALUES (:nomSalle, :photo, :typePhoto)");
                $sql->bindParam(':nomSalle', $nom_services);
                $sql->bindParam(':photo', $image_name);
                $sql->bindParam(':typePhoto', $typePhotoProfil);

                //rechercher le service dans la table infoSErvice

                $id_service_sql2 = "";
                $nom_services_sql2 = "";
                $nom_photo_sql2 = "";

                $sql2 = $bdd->prepare("SELECT * FROM tinfosalle WHERE nomSalle=?");
                $sql2->execute([$nom_services]);

                $total_sql2 = $sql2->rowCount();
                $resultat_sql2 = $sql2->fetchAll(PDO::FETCH_ASSOC);

                if($total_sql2 == 0) {
                    //
                } else {
                    foreach($resultat_sql2 as $res_sql2) {
                        $id_service_sql2 = $res_sql2["idInfo"];
                        $nom_services_sql2 = $res_sql2["nomSalle"];
                        $nom_photo_sql2 = $res_sql2["photo"];
                    }
                }

                $sql3 = $bdd->prepare("UPDATE tinfosalle SET photo= :namePhoto WHERE idInfo= :id");
                $sql3->bindParam(':namePhoto', $image_name);
                $sql3->bindParam('id', $id_service_sql2);


                if ($sql->execute()) {
                    if ($sql3->execute()) {
                        header("Location: " . $_SERVER['REQUEST_URI']);
                        exit();
                    }
                } else {
                    $error = 'Le changement de la photo de profil a échoué';
                }
    }
}
?>