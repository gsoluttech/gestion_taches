<?php

namespace config\classes\user;
use Exception;
use PDO;

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database.php';


use config\Database;


class User 
{
    private $matricule;
    private $noms;
    private $email;
    private $phone;
    private $adresse;
    private $sexe;
    private $poste;
    private $motDePasse;

    public function __construct($matricule, $noms, $email, $phone, $adresse, $sexe, $poste, $motDePasse) 
    {
        $this->matricule = $matricule;	
        $this->noms = $noms;	
        $this->email = $email;
        $this->phone = $phone;
        $this->adresse = $adresse;
        $this->sexe = $sexe;
        $this->poste = $poste;
        $this->motDePasse = $motDePasse;
    }

    /**
     * Summary of user_signup
     * @param mixed $noms
     * @param mixed $email
     * @param mixed $phone
     * @param mixed $password
     * @return void
     */
    public function addUser() 
    {
        $bdd = Database\db_connection();

        if ($bdd instanceof PDO) {
            try {

                $this->phone = htmlspecialchars(strip_tags($this->matricule));
                $this->noms = htmlspecialchars(strip_tags($this->noms));
                $this->email = htmlspecialchars(strip_tags($this->email));
                $this->phone = htmlspecialchars(strip_tags($this->phone));
                $this->adresse = htmlspecialchars(strip_tags($this->adresse));
                $this->sexe = htmlspecialchars(strip_tags($this->sexe));
                $this->poste = htmlspecialchars(strip_tags($this->poste));
                $this->motDePasse = htmlspecialchars(strip_tags($this->motDePasse));


                $req = $bdd->prepare("INSERT INTO temploye (matricule,Noms,Email,Phone,Adresse,sexe,Poste,MotDePasse) VALUES (:matricule,:Noms,:Email,:Phone,:Adresse,:sexe,:Poste,:MotDePasse)");

                $req->bindParam(':matricule', $this->matricule);
                $req->bindParam(':Noms', $this->noms);
                $req->bindParam(':Email', $this->email);
                $req->bindParam(':Phone', $this->phone);
                $req->bindParam(':Adresse', $this->adresse);
                $req->bindParam(':sexe', $this->sexe);
                $req->bindParam(':Poste', $this->poste);
                $req->bindParam(':MotDePasse', $this->motDePasse);

                if ($req->execute()) {
                    return 'Inscription réussie';
                } else {
                    return 'Erreur';
                }
            } catch (Exception $e) { 
                return 'Erreur : ' . $e->getMessage();
            }
        }
    }

    public function modify_user($idNewsUser) {
        $bdd = Database\db_connection();

        if ($bdd instanceof PDO) {
            try {

                $this->noms = htmlspecialchars(strip_tags($this->noms));
                $this->email = htmlspecialchars(strip_tags($this->email));
                $this->phone = htmlspecialchars(strip_tags($this->phone));
                $this->motDePasse = htmlspecialchars(strip_tags($this->motDePasse));


                $req = $bdd->prepare("UPDATE temploye SET noms=:noms, email=:email, phone=:phone, motDePasse=:motDePasse WHERE idNewsUser=:idNewsUser");

                $req->bindParam('noms', $this->noms);
                $req->bindParam('email', $this->email);
                $req->bindParam('phone', $this->phone);
                $req->bindParam('motDePasse', $this->motDePasse);
                $req->bindParam('idNewsUser', $idNewsUser);

                if ($req->execute()) {
                    return 'Inscription réussie';
                } else {
                    return 'Erreur';
                }
            } catch (Exception $e) { 
                return 'Erreur : ' . $e->getMessage();
            }
        }
    }

    public function delete_user($idNewsUser) {
        try {
            $bdd=Database\db_connection();

            if ($bdd instanceof PDO) {

                $req = $bdd->prepare("DELETE FROM temploye WHERE matricule=:matricule");

                $req->bindParam('matricule', $idNewsUser);

                if ($req->execute()) {
                    return 'Utilisateur supprimer avec succès';
                } else {
                    return 'Une erreur s\'est produite';
                }
            }
        } catch (Exception $exc) {
            return 'Une erreur s\'est produite, ' . $exc;
        }
    }

    function recupererEmploye() {
        $bdd = Database\db_connection();

        $req=$bdd->prepare("SELECT * FROM temploye");
        $req->execute();
        $total = $req->rowCount();
        $resultats = $req->fetchAll(PDO::FETCH_ASSOC);

        if ($total != 0) {
            return $resultats;
        } else {
            $error = 'Aucun utilisateur';
        }
    }
}
