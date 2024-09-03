<?php
session_start();
$usernameC = $_SESSION["user_name"];

require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'profilePicture.php';
require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'getpicture.php';
require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'Tache.php';


use config\classes\profilePicture\profilPhoto\Profils;
use config\classes\tache\Taches;

$profil = new Profils();

$usernameC = $_SESSION['user_name'];

$getImage = $profil->searchPhoto($usernameC);
global $profil_image;

if (is_array($getImage)) {
    foreach ($getImage as $getimg) {
        $profil_image = $getimg['nom'];
    }
} else {
    // $profil_image = "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="../js/app.js" defer></script>
    <link rel="stylesheet" href="../css/app.css">
    <title>Task</title>
</head>

<body>

    <?php require_once 'sidebaruser.php'; ?>

    <div class="main-content">
        <?php require_once 'header.php' ?>
        <div class="w-full h-screen">
            <div class="w-11/12 h-42 mx-10 my-5 mr-10 justify-center items-center flex" id="taskshowCoordo">
                <?php
                $taches = new Taches();
                $idEmploye = $_SESSION['matricule'];
                $allTaches = $taches->recupererTacheForOne($idEmploye);
                ?>
                <table class="w-full table-auto flex flex-col box-border border bg-white border-collapse" aria-label="Tableau des tâches">
                    <thead class="w-full">
                        <tr class="">
                            <th class="py-3 px-6 w-3/12 font-semibold border text-gray-800">Nom de la tâche</th>
                            <th class="py-3 px-6 w-3/12 font-semibold border text-gray-800">Durée</th>
                            <th class="py-3 px-6 w-3/12 font-semibold border text-gray-800">Priorité</th>
                            <th class="py-3 px-6 w-3/12 font-semibold border text-gray-800">Statut</th>
                            <th class="py-3 px-6 w-3/12 font-semibold border text-gray-800">Assignée/Non</th>
                        </tr>
                    </thead>
                    <tbody class="w-full">
                        <?php
                        if(is_array($allTaches)) { 
                            foreach ($allTaches as $tache) {
                                $idTaces = $tache['idTaces'];
                                $nomTache = $tache['NomTache'];
                                $dateDebut = $tache['DateDebut'];
                                $dateFin = $tache['DateFin'];
                                $priorite = $tache['Priorite'];
                                $status = $tache['Statut'];
                                $etat = $tache['FK_Employe'];

                                $startDateTime = new DateTime($dateDebut);
                                $endDateTime = new DateTime($dateFin);
                                $interval = $startDateTime->diff($endDateTime);
                                $duree_estimee =  $interval->format('%y années, %m mois, %d jours');

                                if ($etat == "") {
                                    $etatD = "Non assignée";
                                } else {
                                    $etatD = $etat;
                                }

                                $classColor = ($etatD == 'Non assignée') ? 'text-red-500' : 'text-blue-500';

                                echo " 
                                    <tr class=\"border-b w-auto\">
                                        <td class=\"py-3 px-6 font-medium w-3/12 border border-collapse relative cursor-pointer hover:bg-gray-100\">
                                            <p class=\"w-5/6\" onclick=\"assignerTache('$idTaces');\">$nomTache</p>
                                            <form method=\"post\" action=\"\" onsubmit=\"return confirmDeletion();\" class=\"absolute right-10 top-0 w-1/6 flex flex-row\">
                                                <input type=\"text\" class=\"hidden\" name=\"idtache\" value=\"$idTaces\"/>
                                                <button class=\"mt-4 px-2 ml-4 mx-2 h-12 text-xl text-red-700 rounded-md hover:text-red-500\" type=\"submit\" name=\"deleteTaches\"><i class='bx bxs-trash-alt'></i></button>
                                            </form>
                                        </td>
                                        <td class=\"py-3 px-6 w-3/12 border\">$duree_estimee</td>
                                        <td class=\"py-3 px-6 w-3/12 border\">$priorite</td>
                                        <td class=\"py-3 px-6 w-3/12 border text-blue-500\">$status</td>
                                        <td class=\"py-3 px-6 w-3/12 border . $classColor\">
                                            $etatD
                                        </td>

                                    </tr>
                                    ";
                            }
                        } else {
                            echo " 
                                <tr class=\"border-b w-auto\">
                                    <td colspan=\"5\" class=\"py-3 px-6 w-3/12 text-center border text-red-500\">$allTaches</td>
                                </tr>
                            ";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div>
                <?php
                require_once 'TaskRapport.php';
                ?>
            </div>
        </div>
    </div>

</body>

</html>