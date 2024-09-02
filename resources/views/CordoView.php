<?php
use config\classes\tache\Taches;
                    require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'projet.php';
                    require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'activite.php';
                    require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'Tache.php';
    
                    use config\classes\projet\Project;
                    use config\classes\activite\Activites;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="../js/app.js"></script>
    <title>Weka Tsk</title>
</head>
<body>
    <div class="w-full h-screen relative flex flex-row">
        <div class="w-1/6 fixed">
            <?php require_once 'sidebarCoordo.php';?>
        </div>
        <div class="w-5/6 ml-44 absolute right-0">
            <div class="w-full h-42 mx-10 my-5" id="headerCoordo">
                <?php require_once 'header.php';?>
            </div>

            <div id="apercuView" class="w-full relative h-full flex">
                <?php
                $projet = new Project();
                $allproject = $projet->recupererProjet();

                $activite = new Activites();
                    require_once 'accueil.php';
                ?>
            </div>
            
            <div class="w-11/12 h-42 mx-10 my-5 mr-10 justify-center items-center hidden"  id="taskshowCoordo">
                <?php 
                    $taches = new Taches();
                    $allTaches = $taches->recupererTache();
                ?>
                <table class="w-full table-auto box-border border bg-white border-collapse" aria-label="Tableau des tâches">
                    <thead class="w-full">
                        <tr class="">
                            <th class="py-3 px-6 w-3/12 font-semibold border text-gray-800">Nom de la tâche</th>
                            <th class="py-3 px-6 w-3/12 font-semibold text-gray-800">Durée</th>
                            <th class="py-3 px-6 w-3/12 font-semibold text-gray-800">Priorité</th>
                            <th class="py-3 px-6 w-3/12 font-semibold text-gray-800">Statut</th>
                            <th class="py-3 px-6 w-3/12 font-semibold text-gray-800">Assignée/Non</th>
                        </tr>
                    </thead>
                    <tbody class="w-full">
                        <?php 
                            foreach($allTaches as $tache) {
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
                                    $etatD = "Assigéé";
                                }

                                $classColor = ($etatD == 'Non assignée') ? 'text-red-500' : 'text-blue-500';
                                
                                echo " 
                                <tr class=\"border-b w-auto\">
                                    <td class=\"py-3 px-6 font-medium w-3/12 border\">$nomTache</td>
                                    <td class=\"py-3 px-6 w-3/12 border\">$duree_estimee</td>
                                    <td class=\"py-3 px-6 w-3/12 border\">$priorite</td>
                                    <td class=\"py-3 px-6 w-3/12 border text-blue-500\">$status</td>
                                    <td class=\"py-3 px-6 w-3/12 border . $classColor\">
                                        $etatD
                                    </td>

                                </tr>
                                ";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div id="addNewProject" class="hidden w-full relative">
                <?php 
                    require 'MainCordoView.php';
                ?>
            </div>

            <div id="equipeShow" class="w-full relative h-full hidden">
                <?php 
                    require 'equipe.php';
                ?>
            </div> 

            <div class="hidden" id="modifTaches">
                <?php
                    require_once "./ModifTables/modifTache.php";
                ?>
            </div>
            <div class="hidden" id="modifActivite"> 
                <?php
                    require_once "./ModifTables/modifActivite.php";
                ?>
            </div>
        </div>
    </div>        
</body>
</html>