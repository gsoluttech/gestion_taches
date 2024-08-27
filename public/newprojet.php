<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    use config\class\projet\Project;
        require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'gestion_tache_projet' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'redirectRoute.php'; 
        require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'gestion_tache_projet' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'projet.php';
    ?>
    <div>
        <form action="" method="post">
            <input type="text" name="title" id="">
            <input type="text" name="description" id="">
            <input type="text" name="dateDebut" id="">
            <input type="date" name="dateFin" id="">
            <input type="text" name="idProjet" id="">
            <input type="submit" value="Modifier" name="createProject">
        </form>
    </div>

    <div>
        <h1>Envoyer notif</h1>
        <form action="" method="post">
            <input type="text" name="message" id="">
            <input type="text" name="type" id="">
            <input type="number" name="idUser" id="">

            <input type="submit" value="Créer" name="createNotif">
        </form>
    </div>

    <div>
        <h1>Delete</h1>

        <form action="" method="post">
            <input type="text" name="idprojet" id="">
            <input type="submit" value="Supprimer" name="deleteP">
        </form>
    </div>

    <div>
        <h1>All project</h1>
        <?php
        $class_project = new Project();

        $showProjects = $class_project->showAllProjects();

        foreach($showProjects as $showProject) {
            $id_project = $showProject['idProjet'];
            $name_projet = $showProject['nomProjet'];
            $description = $showProject['description'];
            $dateDebut = $showProject['dateDebut'];
            $dateFin = $showProject['dateFin'];
            $statut = $showProject['statut'];
            $id_user = $showProject['idNewUser'];

            echo "
                <div>
                    <h1>$name_projet</h1>
                    <label>$id_project</label>
                    <p>$description</p>
                    <span>$dateDebut</span>
                    <span>$dateFin</span>

                    <label>$statut </br> $id_user</label>
                </div>
            ";

        }
        ?>



    </div>
</body>
</html>