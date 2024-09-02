<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="../js/app.js" defer></script>
    <title>Weka Tsk</title>
</head>
<body>
    <?php
        require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'profilePicture.php';
        require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'getpicture.php';
        
        use config\classes\profilePicture\profilPhoto\Profils;
        
        $profil = new Profils();
        
        $usernameC = $_SESSION['user_name'];
        
        $getImage = $profil->searchPhoto($usernameC);
        global $profil_image;
        
        foreach($getImage as $getimg) {
            $profil_image = $getimg['nom'];
        }
        
    ?>
    <div class="w-full h-screen relative flex flex-row">
        <div class="w-1/6 fixed">
            <?php require_once 'sidebarCoordo.php';?>
        </div>
        <div class="w-5/6 absolute right-0">
            <div class="w-full h-42 mx-10 my-5" id="headerCoordo">
                <?php require_once 'header.php';?>
            </div>
            <div class="w-11/12 mx-10 my-5 justify-center items-center hidden"  id="taskshowCoordo"> 
                <table class="w-full text-left border border-collapse">
                    <thead class="w-full">
                        <tr class="bg-gray-50 w-auto border-collapse">
                            <th class="py-3 px-6 w-3/12 font-semibold border text-gray-800">Nom de la tâche</th>
                            <th class="py-3 px-6 w-3/12 font-semibold border text-gray-800">Durée</th>
                            <th class="py-3 px-6 w-3/12 font-semibold border text-gray-800">Priorité</th>
                            <th class="py-3 px-6 w-3/12 font-semibold border text-gray-800">Statut</th>
                        </tr>
                    </thead>
                    <tbody class="w-full">
                        <?php
                        foreach ($)
                        <tr class="border-b w-full border-collapse">
                            <td class="py-3 px-6 border w-3/12 ">Nom tâche</td>
                            <td class="py-3 px-6 border  w-3/12">Durée</td>
                            <td class="py-3 px-6 border w-3/12">Priorité</td>
                            <td class="py-3 px-6 border w-3/12 text-blue-500">En cours</td>
                        </tr>

                        ?>
                    </tbody>
                </table>
            </div>
            <div id="addNewProject" class="hidden w-full relative h-full">
                <?php 
                    require_once 'MainCordoView.php';
                ?>
            </div>

            <div id="equipeShow" class="w-full relative h-full hidden">
                <?php 
                    require_once 'equipe.php';
                ?>
            </div>

            <div id="apercuView" class="w-full relative h-full flex>
                <?php
                    require_once 'accueil.php';
                ?>
            </div>
        </div>
    </div>
</body>
</html>