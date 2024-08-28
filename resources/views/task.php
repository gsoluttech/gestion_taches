<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/app.css">
    <script src="../js/app.js" defer></script>
    <title>TAsk</title>
</head>
<body>

<?php require_once 'sidebaruser.php'; ?>

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
    <div id="taskshow" class="content hidden">
        <div class="task-container">
            <div class="task-header">
                <h2>Nom tâche</h2>
                <span>Durée</span>
                <span>Priorité</span>
                <span>Status</span>
            </div>
            <div class="task-item">
                <span class="task-name">Nom tâche</span>
                <span class="task-duration">Durée</span>
                <span class="task-priority">Priorité</span>
                <span class="task-status in-progress">En cours</span>
            </div>
            <div class="task-item">
                <span class="task-name">Nom tâche</span>
                <span class="task-duration">Durée</span>
                <span class="task-priority">Priorité</span>
                <span class="task-status in-progress">En cours</span>
            </div>
            <div class="task-item">
                <span class="task-name">Nom tâche</span>
                <span class="task-duration">Durée</span>
                <span class="task-priority">Priorité</span>
                <span class="task-status completed">Terminé</span>
            </div>
            <div class="task-item">
                <span class="task-name">Nom tâche</span>
                <span class="task-duration">Durée</span>
                <span class="task-priority">Priorité</span>
                <span class="task-status in-progress">En cours</span>
            </div>
        </div>
    </div>
</div>

</body>
</html>