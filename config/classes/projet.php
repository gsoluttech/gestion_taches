<?php
namespace config\classes\projet;

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database.php';

use config\Database;
use PDO;
$conn = Database\db_connection();

class Project {



function AddProject($nomProjet, $date_Debut, $Date_Fin, $Description) {
    $conn = Database\db_connection();

    echo "Methode";
    $status = "En cours";
    $sql = "INSERT INTO tprojet (NomProjet, DateDebut, DateFin, description_Projet, Statut)
            VALUES (:NomProjet, :Date_Debut, :Date_Fin, :Description, :Statut)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":NomProjet", $nomProjet);
    $stmt->bindParam(":Date_Debut", $date_Debut);
    $stmt->bindParam(":Date_Fin", $Date_Fin);
    $stmt->bindParam(":Description", $Description);
    $stmt->bindParam(":Statut", $status);

    if ($stmt->execute()) {
        echo "Nouveau Projet ajouté avec succès."; 
    } else {
        echo "Erreur: ";
    } 
}
function ModifyProject($idProjet, $nomProjet, $Date_Debut, $Date_Fin, $Description) {
    $conn = Database\db_connection();
    $sql = "UPDATE TProjet SET NomProjet = ?, DateDebut = ?, DateFin = ?, description_Projet = ?
            WHERE IdProjet = ?"; 
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $nomProjet);
    $stmt->bindParam(2, $Date_Debut);
    $stmt->bindParam(3, $Date_Fin);
    $stmt->bindParam(4, $Description);
    $stmt->bindParam(5, $idProjet);
    
    if ($stmt->execute()) {
        echo "Le projet a été mis à jour avec succès.";
    } else {
        echo "Erreur : " . $stmt->errorInfo()[2];
    } 
}

function DeleteProjetct($idProjet) {
    $conn = Database\db_connection();
    $sql = "DELETE FROM TProjet WHERE IdProjet = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":NomProjet", $nomTache);
    $stmt->bindParam(":Date_Debut", $date_Debut);
    $stmt->bindParam(":Date_Fin", $Date_Fin);
    $stmt->bindParam(":Description", $Description);
    $stmt->bindParam(":idProjet",$idProjet);
    if ($stmt->execute()) {
        echo "Le projet a ete supprimé avec succès.";
    } else {
        echo "Erreur de suppression de la tache: " ;
    }
}

function recupererProjet() {
    $conn = Database\db_connection();
    $sql = $conn->prepare("SELECT * FROM TProjet");
    
    $sql->execute();

    $total = $sql->rowCount();

    if ($total != 0) {
        $resultat = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultat;
    } else {
        echo 'error';
    }

}

}
?>