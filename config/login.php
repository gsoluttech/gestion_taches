<?php
session_start();

// require_once __DIR__ . '/classes/session.php';
require_once dirname(__DIR__)  . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'session.php';
require_once 'database.php';

use config\Database;
use config\classes\SessionUser\Session;

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

date_default_timezone_set('Europe/Paris');

// $authUrl = $client->createAuthUrl();
// header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));

global $error;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['signup'])) {

        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

        if (empty($email) || empty($password)) {
            $error = 'Tous les champs sont réquis';
        } else {
            $bdd = Database\db_connection();

            $req = $bdd->prepare("SELECT * FROM temploye WHERE Email = ?");
            $req->execute(array($email));
            $rowCount = $req->rowCount();
            $results = $req->fetchAll(PDO::FETCH_ASSOC);

            if ($rowCount != 0) {
                foreach ($results as $result) {
                    if ($result['MotDePasse'] == 'admin') {
                        echo 'Changer le mot de passe';
                        $_SESSION['email'] = $result['matricule'];
                        header('Location: ../../../resources/views/changepassword.php');
                        exit();
                    } else {
                        // Accès sécurisé au mot de passe et au rôle
                        if (password_verify($password, $result['MotDePasse'])) {
                            echo 'Connecté avec succès';

                            $role = $result['FK_role'];
                            $_SESSION['user_name'] = $result['Noms'];
                            $_SESSION['email'] = $result['Email'];
                            $_SESSION['matricule'] = $result['matricule'];

                            $ip_address = $_SERVER['REMOTE_ADDR'];

                            $payload = json_encode($_SESSION);

                            // Récupérer l'identifiant de la session
                            $session_id = session_id();

                            // Déterminer le moment de la dernière activité
                            $last_activity = date("Y-m-d H:i:s");
                            $fk_employe = $_SESSION['matricule'];
                            $email = $_SESSION['email'];
                            //insérer les données de la session dans la base de données
                            $sessionclasse = new Session($session_id, $email, $payload, $last_activity, $fk_employe);

                            $sessionclasse->add_session();

                            if (strval($role) == '1') {
                                echo "Role : " . $role;
                                header('Location: ../../../resources/views/CordoView.php');
                                exit();
                            } else if (strval($role) == '2') {
                                header('Location: ../../../resources/views/superviseurs.php');
                                exit();
                            } else if (strval($role) == '3') {
                                header('Location: ../../../resources/views/task.php');
                                exit();
                            
                            } else if (strval($role) == '4') {
                                header('Location: ../../../resources/views/task.php');
                                exit();
                            
                            } else {
                                $error = "Une erreur s'est produite";
                            }
                        } else {
                            $error = 'Mot de passe incorrect';
                        }
                    }
                }
            } else {
                $error = 'Compte non trouvé !';
            }
        }
    }
}


?>
