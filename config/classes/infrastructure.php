<?php

namespace config\class\infrastructure;

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database.php';

use Exception;
use config\Database;
use PDO;

class Infrastructure
{
    private $nom;
    private $avenu;	
    private $quartier;	
    private $commune;
    private $ville;	
    private $province;

    public function __construct($nom, $avenu, $quartier, $commune, $ville, $province) {
        $this->nom = $nom;
        $this->avenu = $avenu;
        $this->quartier = $quartier;
        $this->commune = $commune;
        $this->ville = $ville;
        $this->province = $province;
    }

    public function addInfrastructure() {
        try {
            $bdd = Database\db_connection();

            if ($bdd instanceof PDO) {

                $this->nom = htmlspecialchars(strip_tags($this->nom));
                $this->avenu = htmlspecialchars(strip_tags($this->avenu));
                $this->quartier = htmlspecialchars(strip_tags($this->quartier));
                $this->commune = htmlspecialchars(strip_tags($this->commune));
                $this->ville = htmlspecialchars(strip_tags($this->ville));
                $this->province = htmlspecialchars(strip_tags($this->province));

                $req = $bdd->prepare("INSERT INTO tinfrastructure (nom,avenu,quartier,commune,ville,province) VALUES (:nom,:avenu,:quartier,:commune,:ville,:province)");
            
                $req->bindParam(':nom', $this->nom);
                $req->bindParam(':avenu', $this->avenu);
                $req->bindParam(':quartier', $this->quartier);
                $req->bindParam(':commune', $this->commune);
                $req->bindParam(':ville', $this->ville);
                $req->bindParam(':province', $this->province);

                if ($req->execute()) {
                    return 'Infrastructure ajoutée avec succès';
                } else {
                    return 'Erreur, réessayer';
                }
            }
        } catch (Exception $e) {
            return 'Erreur : '. $e->getMessage();
        }
    }

    public function updateInfrastructure($id) {
        try {
            $bdd = Database\db_connection();

            if ($bdd instanceof PDO) {
                $this->nom = htmlspecialchars(strip_tags($this->nom));
                $this->avenu = htmlspecialchars(strip_tags($this->avenu));
                $this->quartier = htmlspecialchars(strip_tags($this->quartier));
                $this->commune = htmlspecialchars(strip_tags($this->commune));
                $this->ville = htmlspecialchars(strip_tags($this->ville));
                $this->province = htmlspecialchars(strip_tags($this->province));

                $req = $bdd->prepare("UPDATE tinfrastructure SET (nom=:nom,avenu=:avenu,quartier=:quartier,commune=:commune,ville=:ville,province=:province)");
                
                $req->bindParam(':nom', $this->nom);
                $req->bindParam(':avenu', $this->avenu);
                $req->bindParam('quartier', $this->quartier);
                $req->bindParam(':commune', $this->commune);
                $req->bindParam(':ville', $this->ville);
                $req->bindParam(':province', $this->province);

                if ($req->execute()) {
                    return 'Infrastructure modifiée avec succès';
                } else {
                    return 'Erreur';
                }
            }
        } catch (Exception $e) {
            return 'error updating' . $e->getMessage();
        }
    }
}