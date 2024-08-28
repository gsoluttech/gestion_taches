<?php

namespace config\class\EmployeProjet;
use Exception;
use PDO;

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database.php';

use config\Database;

class EmployeProjet
{
    private $matricule;
    private $noms;
    private $email;
    private $roleUser;
    private $idUser;
    private $motDePasse;

    public function __construct($matricule, $noms, $email, $roleUser, $idUser, $motDePasse) {
        $this->matricule=$matricule;
        $this->noms=$noms;
        $this->email=$email;
        $this->roleUser=$roleUser;
        $this->idUser=$idUser;
        $this->motDePasse=$motDePasse;
    }

    public function addUserProject() {

        try {

            $bdd = Database\db_connection();

            if ($bdd instanceof PDO) {
                
                $this->matricule = htmlspecialchars(strip_tags($this->matricule));
                $this->noms = htmlspecialchars(strip_tags($this->noms));
                $this->email = htmlspecialchars(strip_tags($this->email));
                $this->roleUser = htmlspecialchars(strip_tags($this->roleUser));
                $this->idUser = htmlspecialchars(strip_tags($this->idUser));

                
                $req = $bdd->prepare("INSERT INTO tuserprojet (matricule, noms, email, roleUser, idProjet) VALUES (:matricule, :noms, :email, :roleUser, :idProjet)");

                $req->bindParam(':matricule', $matricule);
                $req->bindParam(':noms', $noms);
                $req->bindParam(':email', $email);
                $req->bindParam(':roleUser', $roleUser);
                $req->bindParam(':idProjet', $idProjet);

                if ($req->execute()) {
                    return 'Employé ajouté au projet';
                } else {
                    return 'Opératiion annulée, réessayer plus tard';
                }
            }
        } catch (Exception $exc) {
            return 'Erreur : ' . $exc;
        }
    }

    public function modifyUser() {
        try {
            $bdd = Database\db_connection();

            if ($bdd instanceof PDO) {

                $this->matricule = htmlspecialchars(strip_tags($this->matricule));
                $this->noms = htmlspecialchars(strip_tags($this->noms));
                $this->email = htmlspecialchars(strip_tags($this->email));
                $this->roleUser = htmlspecialchars(strip_tags($this->roleUser));
                $this->idUser = htmlspecialchars(strip_tags($this->idUser));

                $req = $bdd->prepare("UPDATE tuserprojet (matricule, noms, email, roleUser, idProjet) SET (:matricule, :noms, :email, :roleUser, :idProjet) WHERE matricule=:matricule");

                $req->bindParam('matricule', $this->matricule);
                $req->bindParam('noms', $this->noms);
                $req->bindParam('email', $this->email);
                $req->bindParam('roleUser', $this->roleUser);
                $req->bindParam('idUser', $this->idUser);


                if ($req->execute()) {
                    return 'Utilisateur modifié avec succès';
                } else {
                    return 'Erreur';
                }
            }
        } catch (Exception $exc) {
            return 'Erreur : ' . $exc;
        }
    }

    public function deleteUser($matricule) {

        try {

            $bdd = Database\db_connection();

            if ($bdd instanceof PDO) {

                $req = $bdd->prepare("DELETE FROM tuserprojet WHERE matricule=:matricule");

                $req->bindParam('matricule', $matricule);

                if ($req->execute()) {
                    return ' ' . $matricule . ' Supprimer avec succès';
                } else {
                    return 'Une erreur s\'est produite, réessayer plus tard';
                }
            }
        } catch (Exception $e) {
            return 'Erreur';
        }
    }

    public function changePassword() {
        $bdd = Database\db_connection();

        if ($bdd instanceof PDO) {

            $req = $bdd->prepare("UPDATE temploye SET MotDePasse=:MotDePasse WHERE matricule=:matricule");

            $req->bindParam(':MotDePasse', $this->motDePasse);
            $req->bindParam('matricule', $this->matricule);

            if ($req->execute()) {
                return 'Mot de passe modifier';
            } else {
                return 'erreur';
            }
        }
    }
}