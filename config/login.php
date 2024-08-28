<?php
require_once 'config.php';
require_once 'database.php';

use config\Database;

// $authUrl = $client->createAuthUrl();
// header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['signup'])) {

        $matricule = $_POST['matricule'];
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

        if (empty($matricule) || empty($email) || empty($password)) {
            $error = 'Tous les champs sont réquis';
        } else {
            $bdd = Database\db_connection();

            $req = $bdd->prepare("SELECT * FROM temploye WHERE matricule = ? AND Email = ?");
    
            $req->execute([$matricule, $email]);
        
            $rowCount = $req->rowCount();
            $results = $req->fetchAll(PDO::FETCH_ASSOC);
    
    
            if ($rowCount != 0) {
                foreach ($results as $result) {
                    if ($password == 'admin') {
                        echo 'changer le mot de passe';
                    } else {
                        if (password_verify($password, $results['MotDePasse'])) {
                            echo 'connectez avec succès';
                        } else {
                            echo 'Mot de passe incorrect';
                        }
                    }
                }
            } else {
                echo 'Compte non trouvé !';
            }
        }
    }
}


?>
