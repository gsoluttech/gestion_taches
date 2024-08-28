<?php

namespace config\classes\SessionUser;

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database.php';

use config\Database;
use Exception;
use PDO;


class Session 
{
    private $id;
    private $ipadress;
    private $payload;
    private $last_activity;
    private $fk_employe;

    public function __construct($id, $ipadress, $payload, $last_activity, $fk_employe) {
        $this->id = $id;
        $this->ipadress = $ipadress;
        $this->payload = $payload;
        $this->last_activity = $last_activity;
        $this->fk_employe = $fk_employe;
    }


    public function add_session() {
        try {
            $bdd = Database\db_connection();

            if ($bdd instanceof PDO) {

                $this->id = htmlspecialchars(strip_tags($this->id));
                $this->ipadress = htmlspecialchars(strip_tags($this->ipadress));
                $this->payload = htmlspecialchars(strip_tags($this->payload));
                $this->last_activity = htmlspecialchars(strip_tags($this->last_activity));
                $this->fk_employe = htmlspecialchars(strip_tags($this->fk_employe));


                $req_search = $bdd->prepare("SELECT * FROM tsessions WHERE FK_Employe = ?");

                $req_search->execute(array($this->fk_employe));
                $total = $req_search->rowCount();
                $resultats = $req_search->fetchAll(PDO::FETCH_ASSOC);

                if ($total != 0) {
                    $req_search = $bdd->prepare("UPDATE tsessions SET ID=:ID, Ip_adress=:ipadress, Payload=:payload, Last_activity=:lastactivity WHERE FK_Employe=:FK_Employe");

                    $req_search->bindParam(':ID', $this->id);
                    $req_search->bindParam(':ipadress', $this->ipadress);
                    $req_search->bindParam(':payload', $this->payload);
                    $req_search->bindParam(':lastactivity', $this->last_activity);
                    $req_search->bindParam(':FK_Employe', $this->fk_employe);

                    if ($req_search->execute()) {
                        return 'Session commencée';
                    } else {
                        return 'Erreur session';
                    }
                } else {
                    $req = $bdd->prepare("INSERT INTO tsessions (ID, Ip_adress, Payload, Last_activity, FK_Employe) VALUES (:id, :ipadress, :payload, :last_activity, :FK_Employe)");

                    $req->bindParam(':id', $this->id);
                    $req->bindParam(':ipadress', $this->ipadress);
                    $req->bindParam(':payload', $this->payload);
                    $req->bindParam('last_activity', $this->last_activity);
                    $req->bindParam(':FK_Employe', $this->fk_employe);
    
                    if ($req->execute()) {
                        return 'Session commencée';
                    } else {
                        return 'Erreur session';
                    }
                }



            }
        } catch(Exception $exc) {
            return 'Une erreur s\'est produite';
        }
    }
}