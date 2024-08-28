<?php

namespace config\class\role;

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database.php';

use config\Database;
use PDO;
use Exception;

class Role
{
    private $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function getAllRole() {

        $bdd = Database\db_connection();

        if ($bdd instanceof PDO) {
            try {
                $req = $bdd->prepare("SELECT * FROM roles");

                $total = $req->rowCount();

                $resultat = $req->fetchAll(PDO::FETCH_ASSOC);

                if ($total > 0) {
                    return $resultat;
                }
            } catch (Exception $e) {
                return 'Erreur : ' . $e->getMessage();
            }
        }
    }

    public function compareRole() {
        try {
            $bdd = Database\db_connection();

            if ($bdd instanceof PDO) {

                $req = $bdd->prepare("SELECT * FROM roles WHERE nom=:nom");

                $req->bindParam(':nom', $nom);
            }
        } catch(Exception $e) {
            return 'Erreur : ' . $e->getMessage();
        }
    }
}