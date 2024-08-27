<?php

namespace config\class\session;

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

    public function __construct($id, $ipadress, $payload, $last_activity) {
        $this->id = $id;
        $this->ipadress = $ipadress;
        $this->payload = $payload;
        $this->last_activity = $last_activity;
    }


    public function add_session() {
        try {
            $bdd = Database\db_connection();

            if ($bdd instanceof PDO) {

                $this->id = htmlspecialchars(strip_tags($this->id));
                $this->ipadress = htmlspecialchars(strip_tags($this->ipadress));
                $this->payload = htmlspecialchars(strip_tags($this->payload));
                $this->last_activity = htmlspecialchars(strip_tags($this->last_activity));


                $req = $bdd->prepare("INSERT INTO session (id, ipadress, payload, last_activity) VALUES (:id, :ipadress, :payload, :last_activity)");

                $req->bindParam(':id', $this->id);
                $req->bindParam(':ipadress', $this->ipadress);
                $req->bindParam(':payload', $this->payload);
                $req->bindParam('last_activity', $this->last_activity);

                if ($req->execute()) {
                    return 'Session commencée';
                } else {
                    return 'Erreur session';
                }
            }
        } catch(Exception $exc) {
            return 'Une erreur s\'est produite';
        }
    }
}