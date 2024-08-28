<?php 

namespace config\class\notification;

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database.php';

use config\Database;

class Notification {
    public $name_message;
    public $name_datenotif;
    public $name_typenotif;
    public $name_iduser;

    public function __construct($name_message, $name_datenotif, $name_typenotif, $name_iduser) {
        $this->name_message = $name_message;
        $this->name_datenotif = $name_datenotif;
        $this->name_typenotif = $name_typenotif;
        $this->name_iduser = $name_iduser;
    }

    function create_notification($name_message, $name_datenotif, $name_typenotif, $name_iduser) {
        try {
            // Connexion à la base de données
            $bdd = Database\db_connection();
        
            // Préparer la commande SQL
            $sql = "INSERT INTO tnotification (message, typeNotif, idUser) VALUES (:message, :typenotif, :iduser)";
            $stmt = $bdd->prepare($sql);
        
            // Associer les valeurs des paramètres
            $stmt->bindParam(':message', $name_message);
            // $stmt->bindParam(':datenotif', $name_datenotif);
            $stmt->bindParam(':typenotif', $name_typenotif);
            $stmt->bindParam(':iduser', $name_iduser);
        /* The line `->bindParam(':datenotif', );` is binding the value of the
        `` variable to the `:datenotif` parameter in the prepared SQL statement. */
        
            // Exécuter la commande SQL
            if($stmt->execute()) {
                echo "Notification créée avec succès.";
            } else {
                echo "Erreur lors de la création de la notification.";
            }
        } catch (\PDOException $e) {  // Note le backslash ici
            // Gérer les erreurs de la base de données
            echo "Erreur de base de données : " . $e->getMessage();
        } catch (\Exception $e) {  // Note le backslash ici
            // Gérer toutes les autres erreurs
            echo "Erreur générale : " . $e->getMessage();
        }
        
    }
    
}
