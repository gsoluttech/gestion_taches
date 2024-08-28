<?php
namespace config\classes\projet;

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database.php';

use config\Database;
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
function ModifyProject($idProjet, $nomProjet, $Date_Debut, $Date_Fin, $Description,) {
    $conn = Database\db_connection();
    $sql = "UPDATE TProjet SET NomProjet = ?, Date_Debut = ?, Date_Fin = ?, Description = ?, IdProjet = ?
            WHERE IdProjet = ?"; 
 $stmt = $conn->prepare($sql);
 $stmt->bindParam(":NomProjet", $nomTache);
 $stmt->bindParam(":Date_Debut", $date_Debut);
 $stmt->bindParam(":Date_Fin", $Date_Fin);
 $stmt->bindParam(":Description", $Description);
 $stmt->bindParam(":idProjet",$idProjet);
    if ($stmt->execute()) {
        echo "Le Projet a ete mis à jour avec succès.";
    } else {
        echo "Erreur: " ;
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
/*function recupererProjet($idProjet) {
    $conn = Database\db_connection();
    $sql = "SELECT * FROM TProjet WHERE IdProjet = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam("i", $idProjet);
    
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            echo "Aucun Projet n'a ete trouvé.";
        }
    } else {
        echo "Erreur: ";
    };
    return null;
};*/
/*$conn->close();*/
}
?>