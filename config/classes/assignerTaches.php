<?php
namespace config\classes\Assigner;

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database.php';

use config\Database;
use PDO;

class Assigner {
    function assignation($idEmploye, $idTaches) {
        $bdd = Database\db_connection();

        if ($bdd instanceof PDO) {
            $req = $bdd->prepare('');
        }
    }
}
?>