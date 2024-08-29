<?php
namespace config\classes\activite;

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database.php';

use config\Database;
use PDO;
$conn = Database\db_connection();

class Activites {


function AddActivity($nomActivite, $date_Debut, $Date_Fin, $Description, $duree_estimee) {
    $conn = Database\db_connection();
    global $last;
    $lastActivity = $conn->prepare("SELECT * FROM tprojet ORDER BY idProjet DESC LIMIT 1");
    $lastActivity->execute();
    $rowCount = $lastActivity->rowCount();
    $resultats = $lastActivity->fetch(PDO::FETCH_ASSOC);

    if ($rowCount != 0) {
        foreach ($resultats as $resultat) {
            $last = $resultats['idProjet'];
        }
    }

    $status = "En cours";
    $sql = "INSERT INTO TActivite (Nom, description_activite, type_activite, duree_estimee, dateDebut, dateFin, Statut, FK_Project)
            VALUES (:Nom, :description_activite, :type_activite, :duree_estimee, :dateDebut, :dateFin, :Statut, :FK_Project)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":Nom", $nomActivite);
    $stmt->bindParam(":description_activite", $Description);
    $stmt->bindParam(":type_activite", $Date_Fin);
    $stmt->bindParam(":duree_estimee", $duree_estimee);
    $stmt->bindParam(":dateDebut",$date_Debut);
    $stmt->bindParam(":dateFin",$Date_Fin);
    $stmt->bindParam(":Statut",$status);
    $stmt->bindParam(":FK_Project",$last);


    if ($stmt->execute()) {
        echo "Nouvel activite ajouté avec succès.";
    } else {
        echo "Erreur: ";
    } 
}
function ModifyActivity($idActivite, $nomActivite, $Date_Debut, $Date_Fin, $Description,) {
    $conn = Database\db_connection();
    $sql = "UPDATE TActivite SET NomActivite = ?, Date_Debut = ?, Date_Fin = ?, Description = ?, IdActivite = ?
            WHERE IdActivite = ?"; 
 $stmt = $conn->prepare($sql);
 $stmt->bindParam(":NomActivite", $nomActivite);
 $stmt->bindParam(":Date_Debut", $date_Debut);
 $stmt->bindParam(":Date_Fin", $Date_Fin);
 $stmt->bindParam(":Description", $Description);
 $stmt->bindParam(":idActivite",$idActivite);
    if ($stmt->execute()) {
        echo "L'activite a ete mis à jour avec succès.";
    } else {
        echo "Erreur: " ;
    } 
}
function DeleteActivity($idActivity) {
    $conn = Database\db_connection();
    $sql = "DELETE FROM TActivite WHERE IdActivite = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":NomActivite", $nomActivite);
    $stmt->bindParam(":Date_Debut", $date_Debut);
    $stmt->bindParam(":Date_Fin", $Date_Fin);
    $stmt->bindParam(":Description", $Description);
    $stmt->bindParam(":idActivite",$idActivite);
    if ($stmt->execute()) {
        echo "L'activite a ete supprimé avec succès.";
    } else {
        echo "Erreur de suppression de l'activite: " ;
    }
}

function recupererProjet($idProjet) {
    $conn = Database\db_connection();
    $stmt = $conn->prepare("SELECT * FROM tactivite WHERE FK_Project = ?");
    $stmt->execute(array($idProjet));

    $total = $stmt->rowCount();
    $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if ($total != 0) {
        return $resultats;
    } else {
        return "Activités correspondate non trouvée";
    }
}
}
?>