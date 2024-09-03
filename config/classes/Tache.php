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
        return "Nouvelle tâche ajoutée avec succès.";
    } else {
        return "Erreur: ";
    } 
}
function ModifyTache($idTaches, $nomTache, $Date_Debut, $Date_Fin, $Priorite, $Description, $idProjet) {
    $conn = Database\db_connection();
    $sql = "UPDATE ttaches SET NomTache = ?, Description = ?, Priorite = ?, DateDecheance = ?, Statut = ?, IdProjet = ?
            WHERE IdTaches = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":NomTache", $nomTache);
    $stmt->bindParam(":Date_Debut", $date_Debut);
    $stmt->bindParam(":Date_Fin", $Date_Fin);
    $stmt->bindParam(":Priorite",$Priorite);
    $stmt->bindParam(":Description", $Description);
    $stmt->bindParam(":idProjet",$idProjet);
    if ($stmt->execute()) {
        return "Tâche mise à jour avec succès.";
    } else {
        return "Erreur: ";
    } 
}
function DeleteTache($idTaches) {
    $conn = Database\db_connection();
    $sql = "DELETE FROM ttaches WHERE idTaces = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute(array($idTaches))) {
        return "Tâche a ete supprimée avec succès.";
    } else {
        return "Erreur de suppression de la tache: ";
    }
}

function recupererTache() {
    $conn = Database\db_connection();
    $sql = $conn->prepare("SELECT * FROM ttaches");
    
    $sql->execute();

    $total = $sql-> rowCount();
    $resultats = $sql->fetchAll(PDO::FETCH_ASSOC);

    if ($total != 0) {
        return $resultats;
    } else {
        echo "Aucune tâche n'a été trouvée";
    }
}

function recupererTacheForOne($idEmploye) {
    $conn = Database\db_connection();
    $sql = $conn->prepare("SELECT * FROM ttaches WHERE FK_Employe=?");
    $sql->execute(array($idEmploye));

    $total = $sql-> rowCount();
    $resultats = $sql->fetchAll(PDO::FETCH_ASSOC);

    if ($total != 0) {
        return $resultats;
    } else {
        return "Aucune tâche n'a été trouvée";
    }
}
}
?>
