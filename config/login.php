<?php
require_once 'config.php';
require_once 'database.php';

use config\Database;


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
                        header('Location:  ../../../resources/views/changepassword.php');
                        exit();
                    } else {
                        if (password_verify($password, $results['MotDePasse'])) {
                            echo 'connectez avec succès';

                            if ($role == '1') {
                                header('Location:  ../../../resources/views/CordoView.php');
                                exit();
                            } else if ($role == '2') {
                                header('Location:  ../../../resources/views/superviseurs.php');
                                exit();
                            } else if ($role == '3') {
                                header('Location:  ../../../resources/views/task.php');
                                exit();
                            } else {
                                $error = "Une erreur s'est produite";
                            }
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
