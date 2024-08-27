<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'projet.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'notification.php'; 
require_once __DIR__ . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'alluser.php'; 


// namespace redirect;


// use class\projet\Project\createProject;
use config\class\notification\Notification;
use config\class\projet\Project;
use config\class\user\User;



if (isset($_POST['createProject'])) {
    $nom_project = $_POST['title'];
    $description_p = $_POST['description'];
    $dateDebut = $_POST['dateDebut'];
    // $dateFin = $_POST['dateFin'];
    $idProjet = $_POST['idProjet'];

    // $class_project = new Project();
    $password_hash = password_hash($idProjet, PASSWORD_DEFAULT);

    $class_users = new User($nom_project, $description_p, $dateDebut, $password_hash);

    $class_users->User_signup();
    // $class_project->modifyProject($idProjet,$nom_project, $description_p, $dateDebut, $dateFin);


    echo "Accepter !!";
}

if (isset($_POST['deleteP'])) {
    $id_project = $_POST['idprojet'];

    $classProject = new Project();

    echo $classProject->deleteProject($id_project);
}
if (isset($_POST['createNotif'])) {
    $message_text = $_POST['message'];
    $type_notif = $_POST['type'];
    $id_user = $_POST['idUser'];

    $name_datenotif = "";

    $class_notif=new Notification($message_text, $name_datenotif, $type_notif, $id_user);

    $class_notif->create_notification($message_text, $name_datenotif, $type_notif, $id_user);
}