<?php
namespace config\class\thimo;

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database.php';


use PDO;
use config\Database;
use Exception;

class Thimo
{
    private $nom;
    private $postNom;	
    private $prenom;
    private $sexe;	
    private $adresse;
    
    public function __construct($nom, $postNom, $prenom, $sexe, $adresse) {
        $this->nom = $nom;
        $this->postNom = $postNom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->adresse = $adresse;
    }

    public function addWorkForce() {
        try {
            $bdd = Database\db_connection();

            if ($bdd instanceof PDO) {

                $this->nom = htmlspecialchars(strip_tags($this->nom));
                $this->postNom = htmlspecialchars(strip_tags($this->postNom));
                $this->prenom = htmlspecialchars(strip_tags($this->prenom));
                $this->sexe = htmlspecialchars(strip_tags($this->sexe));
                $this->adresse = htmlspecialchars(strip_tags($this->adresse));

                $req = $bdd->prepare("INSERT INTO tthimo (nom, postNom, prenom, sexe, adresse) VALUES (:nom, :postNom, :prenom, :sexe, :adresse)");
            
                $req->bindParam(':nom', $this->nom);
                $req->bindParam(':postNom', $this->postNom);
                $req->bindParam(':prenom', $this->prenom);
                $req->bindParam(':sexe', $this->sexe);
                $req->bindParam(':adresse', $this->adresse);

                if ($req->execute()) {
                    return 'Ajouté avec succès';
                } else {
                    return 'Une erreur s\'est produit durant l\'ajout';
                }
            }
        } catch (Exception $exc) {
            return 'Erreur : ' . $exc->getMessage();
        }
    }

    public function updateWorkForce($id) {
        try {
            $bdd = Database\db_connection();

            if ($bdd instanceof PDO) {
                
                $this->nom = htmlspecialchars(strip_tags($this->nom));
                $this->postNom = htmlspecialchars(strip_tags($this->postNom));
                $this->prenom = htmlspecialchars(strip_tags($this->prenom));
                $this->sexe = htmlspecialchars(strip_tags($this->sexe));
                $this->adresse = htmlspecialchars(strip_tags($this->adresse));

                $req = $bdd->prepare("UPDATE tthimo SET nom=:nom, postNom=:postNom, prenom=:prenom, sexe=:sexe, adresse=:adresse WHERE id=:id");

                $req->bindParam(':nom', $this->nom);
                $req->bindParam(':postNom', $this->postNom);
                $req->bindParam(':prenom', $this->prenom);
                $req->bindParam(':sexe', $this->sexe);
                $req->bindParam(':adresse', $this->adresse);
                $req->bindParam(':id', $id);

                if ($req->execute()) {
                    return 'Modifié avec succès';
                } else {
                    return 'Une s\'est produite, réesayer plus tard';
                }
            } 
        } catch(Exception $exc) {
            return 'Erreur : ' . $exc->getMessage();
        }
    }
    public function deleteWorkForce($id) {
        try {
            $bdd = Database\db_connection();

            if ($bdd instanceof PDO) {

                $req = $bdd->prepare ("DELETE FROM tthimo WHERE id=:id");

                $req->bindParam(':id', $id);

                if ($req->execute()) {
                    return 'Supprimer avec succès';
                }
            }
        } catch(Exception $exc) {
            return 'Une erreur s\'est produit : '. $exc->getMessage();
        }
    }
}