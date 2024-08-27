<?php

namespace config\class\password;

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database.php';

use config\Database;
use PDO;
use Exception;

class RessetPassword 
{
    private $email;
    private $token;
    private $create_at;

    public function __construct($email, $token, $create_at) {
        $this->email = $email;
        $this->token = $token;
        $this->create_at = $create_at;
    }

    public function resset_password() {
        try {

            $bdd = Database\db_connection();

            if ($bdd instanceof PDO) {

                $req = $bdd->prepare("INSERT INTO password_reset_token (email, token, create_at) VALUES (:email, :token, :create_at)");

                $req->bindParam(':email', $this->email);
                $req->bindParam(':token', $this->token);
                $req->bindParam(':create_at', $this->create_at);

                if ($req->execute()) {
                    return 'Code envoyé à l\'adresse mail ' . $this->email;
                } else {
                    return 'Réessayer plus tard';
                }
            }
        } catch(Exception $exc) {
            return 'Une erreur s\'est produite' . $exc;
        }
    }

    public function resend_token() {
        try {
            $bdd = Database\db_connection();

            if ($bdd instanceof PDO) {
                $req = $bdd->prepare("UPDATE password_reset_token (token) VALUES (:token) WHERE email=:email");

                $req->bindParam(':email', $this->email);
                $req->bindParam('token', $this->token);


                if ($req->execute()) {
                    return 'Le code a été renvoyer à l\'adresse';
                } else {
                    return 'Une erreur s\'est produite';
                }
            }
        } catch(Exception $exc) {
            return 'Une erreur s\'est produite ' . $exc;
        }
    }
}