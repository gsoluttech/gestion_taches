<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/app.css">
    <title>Task</title>
</head>
<body>

<?php 
    require_once 'sidebaruser.php'; 
?>
 
<div class="main-content">
    <header>
        <div class="explorer">Explorer</div>
        <div class="search-bar">
            <input type="text" placeholder="Search">
            <i class='bx bx-search'></i>
        </div>
        <div class="header-right">
            <button class="category-btn"><i class='bx bx-category'></i> Catégorie</button>
            <button class="sort-btn"><i class='bx bx-sort'></i> Trié : Déjà fait</button>
            <i class='bx bx-bell notification-icon'></i>
            <div class="profile-icon"></div>
        </div>
    </header>
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-gray-50">
                <th class="py-3 px-6 font-medium text-gray-800">Nom tâche</th>
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
            <tr class="border-b">
                <td class="py-3 px-6">Nom tâche</td>
                <td class="py-3 px-6">Durée</td>
                <td class="py-3 px-6">Priorité</td>
                <td class="py-3 px-6 text-blue-500">En cours</td>
            </tr>
            <tr class="border-b">
                <td class="py-3 px-6">Nom tâche</td>
                <td class="py-3 px-6">Durée</td>
                <td class="py-3 px-6">Priorité</td>
                <td class="py-3 px-6 text-green-500">Terminé</td>
            </tr>
            <tr>
                <td class="py-3 px-6">Nom tâche</td>
                <td class="py-3 px-6">Durée</td>
                <td class="py-3 px-6">Priorité</td>
                <td class="py-3 px-6 text-blue-500">En cours</td>
            </tr>
        </tbody>
    </table>

</body>
</html>