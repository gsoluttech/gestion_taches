<?php

namespace config\classes\user;
use Exception;
use PDO;

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database.php';


use config\Database;


class User 
{
    private $noms;
    private $email;
    private $phone;
    private $motDePasse;

    public function __construct($noms, $email, $phone, $motDePasse) 
    {
        $this->noms = $noms;	
        $this->email = $email;
        $this->phone = $phone;
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
    public function User_signup() 
    {
        $bdd = Database\db_connection();

        if ($bdd instanceof PDO) {
            try {

                $annee = date('Y');
                $ran = rand(0000, 9999);

                $this->noms = htmlspecialchars(strip_tags($this->noms));
                $this->email = htmlspecialchars(strip_tags($this->email));
                $this->phone = htmlspecialchars(strip_tags($this->phone));
                $this->motDePasse = htmlspecialchars(strip_tags($this->motDePasse));

                $noms = explode(' ', $this->noms)[0];
                $matricule = $noms . '_' . $ran;


                $req = $bdd->prepare("INSERT INTO temploye (matricule, noms, email, phone, motDePasse) VALUES (:matricule, :noms, :email, :phone, :motDePasse)");

                $req->bindParam('matricule', $matricule);
                $req->bindParam('noms', $this->noms);
                $req->bindParam('email', $this->email);
                $req->bindParam('phone', $this->phone);
                $req->bindParam('motDePasse', $this->motDePasse);

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
