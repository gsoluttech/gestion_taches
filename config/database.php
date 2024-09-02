<?php
namespace config\Database;


require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use Dotenv\Dotenv;
use PDO;
use PDOException;



function db_connection() {
   // $db_conn = $_ENV['DB_CONNECTION'];
    $host_name = "localhost";
    $username = "root";
    $pwd = "";
    $db_name = "gestion_projet";



    try {
        $bdd = new PDO("mysql:host=$host_name;dbname=$db_name", $username, $pwd);

        // $bdd = new PDO("mysql:host=$servername;dbname=$bdname", $username, $password);

        
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $bdd;
    } catch(PDOException $ex) {
        echo "Une erreur s'est produite lors de la connexion à la base données, veillez réessayer !" . $ex;
        // return $error;
    }
}


