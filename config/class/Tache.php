<?php
namespace config\classes\tache;
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database.php';

use config\Database;
$conn = Database\db_connection();

class Taches { 


function AddTache($nomTache, $date_Debut, $Date_Fin, $Priorite, $Description, $idProjet) {
    $conn = Database\db_connection();
    $sql = "INSERT INTO TTaches (NomTache, Date_Debut, Date_Fin, Priorite, Description, IdProjet)
            VALUES (:NomTache, :Date_Debut, :Date_Fin, :Priorite, :Description, :IdProjet)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":NomTache", $nomTache);
    $stmt->bindParam(":Date_Debut", $date_Debut);
    $stmt->bindParam(":Date_Fin", $Date_Fin);
    $stmt->bindParam(":Priorite",$Priorite);
    $stmt->bindParam(":Description", $Description);
    $stmt->bindParam(":idProjet",$idProjet);
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
