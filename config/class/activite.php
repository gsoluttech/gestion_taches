<?php
namespace config\class\tache;

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database.php';

use config\Database;
$conn = Database\db_connection();
function AddActivity($nomActivite, $date_Debut, $Date_Fin, $Description, $idProjet) {
    $conn = Database\db_connection();
    $sql = "INSERT INTO TActivite (NomActivite, Date_Debut, Date_Fin, Description, IdActivite)
            VALUES (:NomActivite, :Date_Debut, :Date_Fin, :Description, :IdActivite)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":NomActivite", $nomActivite);
    $stmt->bindParam(":Date_Debut", $date_Debut);
    $stmt->bindParam(":Date_Fin", $Date_Fin);
    $stmt->bindParam(":Description", $Description);
    $stmt->bindParam(":idProjet",$idActivite);
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
/*function recupererProjet($idProjet) {
    $conn = Database\db_connection();
    $sql = "SELECT * FROM TActivite WHERE IdActivite = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam("i", $idActivite);
    
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            echo "Aucune activite n'a ete trouvé.";
        }
    } else {
        echo "Erreur: ";
    };
    return null;
};*/
/*$conn->close();*/
?>