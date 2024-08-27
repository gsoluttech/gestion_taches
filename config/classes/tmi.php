<?php
namespace config\class\tmi;

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database.php';

use config\Database;
use PDO;
use Exception;

class Tmi
{
    private $numero;
    private $avenue;
    private $quartier;
    private $commune;
    private $ville;
    private $province;

    public function __construct($numero, $avenue, $quartier, $commune, $ville, $province) {
        $this->numero = $numero;
        $this->avenue = $avenue;
        $this->quartier = $quartier;
        $this->commune = $commune;
        $this->ville = $ville;
        $this->province = $province;
    } 

    public function addMenage() {
        try {
            $bdd = Database\db_connection();

            if ($bdd instanceof PDO) {

                $this->numero = htmlspecialchars(strip_tags($this->numero));
                $this->avenue = htmlspecialchars(strip_tags($this->avenue));
                $this->quartier = htmlspecialchars(strip_tags($this->quartier));
                $this->commune = htmlspecialchars(strip_tags($this->commune));
                $this->ville = htmlspecialchars(strip_tags($this->ville));
                $this->province = htmlspecialchars(strip_tags($this->province));

                $req = $bdd->prepare("INSERT INTO ttmi (numero,avenu,quartier,commune,ville,province) VALUES (:numero,:avenue,:quartier,:commune,:ville,:province)");

                $req->bindParam(':numero', $this->numero);
                $req->bindParam(':avenue', $this->avenue);
                $req->bindParam(':commune', $this->quartier);
                $req->bindParam(':commune', $this->commune);
                $req->bindParam(':ville', $this->ville);
                $req->bindParam('province', $this->province);

                if ($req->execute()) {
                    return 'Menage ajouter';
                } else {
                    return 'Erreur';
                } 

            }
        } catch(Exception $exc) {
            return 'Erreur : '. $exc;
        }
    } 

    public function updateMenage() {
        try {
            $bdd = Database\db_connection();

            if ($bdd instanceof PDO) {
                $this->numero = htmlspecialchars(strip_tags($this->numero));
                $this->avenue = htmlspecialchars(strip_tags($this->avenue));
                $this->quartier = htmlspecialchars(strip_tags($this->quartier));
                $this->commune = htmlspecialchars(strip_tags($this->commune));
                $this->ville = htmlspecialchars(strip_tags($this->ville));
                $this->province = htmlspecialchars(strip_tags($this->province));

                $req = $bdd->prepare("UPDATE ttmi SET numero=:numero,avenu=:avenu,quartier=:quartier,commune=:commune,ville=:ville,province=:province");

                $req->bindParam(':numero', $this->numero);
                $req->bindParam(':avenue', $this->avenue);
                $req->bindParam(':commune', $this->quartier);
                $req->bindParam(':commune', $this->commune);
                $req->bindParam(':ville', $this->ville);
                $req->bindParam('province', $this->province);

                if ($req->execute()) {
                    return 'Menage modifier';
                } else {
                    return 'Erreur';
                } 
            }
        } catch(Exception $exc) {
            return 'Erreur : ' . $exc->getMessage(); 
        }
    }

    public function deleteMenage($id) {
        try {
            $bdd = Database\db_connection();

            if ($bdd instanceof PDO) {

                $req = $bdd->prepare("DELETE FROM ttmi WHERE id=:id");

                $req->bindParam(':id', $id);

                if ($req->execute()) {
                    return 'Suppression réussie';
                } else  {
                    return 'Erreur lors de la suppression';
                }
            }
        } catch(Exception $exc) {
            return 'Erreur : ' . $exc->getMessage();
        }
    } 
}