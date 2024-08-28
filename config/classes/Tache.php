<?php
namespace config\classes\tache;
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database.php';

use config\Database;
use PDO;
$conn = Database\db_connection();

class Taches { 


function AddTache($nomTache, $date_Debut, $Date_Fin, $Description) {
    $conn = Database\db_connection();

    global $last;
    $lastActivity = $conn->prepare("SELECT * FROM tactivite ORDER BY id DESC LIMIT 1");
    $lastActivity->execute();
    $rowCount = $lastActivity->rowCount();
    $resultats = $lastActivity->fetch(PDO::FETCH_ASSOC);

    if ($rowCount != 0) {
        foreach ($resultats as $resultat) {
            $last = $resultats['id'];
        }
    }

    $status = "En cours";

    $sql = "INSERT INTO ttaches (NomTache,desciption_tache,DateDebut ,DateFin ,statut, FK_activite)
            VALUES (:NomTache,:desciption_tache ,	:DateDebut ,:DateFin ,:statut, :FK_activite)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":NomTache", $nomTache);
    $stmt->bindParam(":DateDebut", $date_Debut);
    $stmt->bindParam(":DateFin", $Date_Fin);
    $stmt->bindParam(":statut", $status);
    $stmt->bindParam(":desciption_tache", $Description);
    $stmt->bindParam(":FK_activite",$last);
    if ($stmt->execute()) {
        echo "Nouvelle tâche ajoutée avec succès.";
    } else {
        echo "Erreur: ";
    } 
}
function ModifyTache($idTaches, $nomTache, $Date_Debut, $Date_Fin, $Priorite, $Description, $idProjet) {
    $conn = Database\db_connection();
    $sql = "UPDATE TTaches SET NomTache = ?, Description = ?, Priorite = ?, DateDecheance = ?, Statut = ?, IdProjet = ?
            WHERE IdTaches = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":NomTache", $nomTache);
    $stmt->bindParam(":Date_Debut", $date_Debut);
    $stmt->bindParam(":Date_Fin", $Date_Fin);
    $stmt->bindParam(":Priorite",$Priorite);
    $stmt->bindParam(":Description", $Description);
    $stmt->bindParam(":idProjet",$idProjet);
    if ($stmt->execute()) {
        echo "Tâche mise à jour avec succès.";
    } else {
        echo "Erreur: ";
    } 
}
function DeleteTache($idTaches) {
    $conn = Database\db_connection();
    $sql = "DELETE FROM TTaches WHERE IdTaches = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":NomTache", $nomTache);
    $stmt->bindParam(":Date_Debut", $date_Debut);
    $stmt->bindParam(":Date_Fin", $Date_Fin);
    $stmt->bindParam(":Priorite",$Priorite);
    $stmt->bindParam(":Description", $Description);
    $stmt->bindParam(":idProjet",$idProjet);
    if ($stmt->execute()) {
        echo "Tâche a ete supprimée avec succès.";
    } else {
        echo "Erreur de suppression de la tache: ";
    }
}
    // return null;
    /*function recupererTache($idTaches) {

    $sql = "SELECT * FROM TTaches WHERE IdTaches = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":NomTache", $nomTache);
    $stmt->bindParam(":Date_Debut", $date_Debut);
    $stmt->bindParam(":Date_Fin", $Date_Fin);
    $stmt->bindParam(":Priorite",$Priorite);
    $stmt->bindParam(":Description", $Description);
    $stmt->bindParam(":idProjet",$idProjet);
    
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            echo "Aucune tâche trouvée.";
        }
    } else {
        echo "Erreur: " . $stmt->error;
    }*/

/*$conn->close();*/
}
?>
