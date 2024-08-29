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
    <div class="w-full h-screen relative flex flex-row">
        <div class="w-1/6 fixed">
            <?php require_once 'sidebarCoordo.php';?>
        </div>
        <div class="w-5/6 absolute right-0">
            <div class="w-full h-42 mx-10 my-5" id="headerCoordo">
                <?php require_once 'header.php';?>
            </div>
            <div class="w-3/3 h-42 mx-10 my-5 justify-center items-center hidden"  id="taskshowCoordo"> 
                <table class="min-h-screen text-left border-collapse flex flex-col">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="py-3 px-6 font-medium text-gray-800">Nom de la tâche</th>
                            <th class="py-3 px-6 font-medium text-gray-800">Durée</th>
                            <th class="py-3 px-6 font-medium text-gray-800">Priorité</th>
                            <th class="py-3 px-6 font-medium text-gray-800">Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-3 px-6">Nom tâche</td>
                            <td class="py-3 px-6">Durée</td>
                            <td class="py-3 px-6">Priorité</td>
                            <td class="py-3 px-6 text-blue-500">En cours</td>
                        </tr>
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

            <div id="apercuView" class="w-full relative h-full hidden>
                <?php
                    require_once 'accueil.php';
                ?>
            </div>
        </div>
    </div>
</body>
</html>