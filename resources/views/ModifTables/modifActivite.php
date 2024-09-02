<?php 
  require_once dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'activite.php';
?>

  <!-- Modification de l'activite -->
  <div class="mb-8">
    <h2 class="text-xl font-semibold mb-4">Modifier l'activité</h2>
    <form class="grid grid-cols-1 md:grid-cols-2 gap-4" method="post">
      <div>
        <label class="block text-gray-700">Nom</label>
        <input type="text" class="mt-1 p-2 block w-full border border-gray-300 rounded-md"  name="nomactivite"/>

      </div>
      <div>
        <label class="block text-gray-700">Description</label>
        <textarea class="mt-1 p-2 block w-full border border-gray-300 rounded-md" name="description"></textarea>
      </div>
      <div>
        <label class="block text-gray-700">Date début</label>

        <input type="date" class="mt-1 p-2 block w-full border border-gray-300 rounded-md" name = "dateDebut" />
      </div>
      <div>
        <label class="block text-gray-700">Date fin</label>
        <input type="date" class="mt-1 p-2 block w-full border border-gray-300 rounded-md" name="dateFin" />
      </div>
      <button type="submit" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700" name ="createactivite">
        Modifier
    </button>

    <?php  
use config\classes\activite\Activites;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST["createactivite"])){
    $nomActivite = $_POST["nomactivite"];
  
    $Description = $_POST["description"];
    $date_Debut = $_POST["dateDebut"];
    $Date_Fin = $_POST["dateFin"];
  
    $startDateTime = new DateTime($date_Debut);
    $endDateTime = new DateTime($Date_Fin);

  $interval = $startDateTime->diff($endDateTime);

  $duree_estimee =  $interval->format('%y années, %m mois, %d jours');

  echo $duree_estimee;
  $newActivity = new Activites();

  $newActivity->AddActivity($nomActivite, $date_Debut, $Date_Fin, $Description, $duree_estimee);
}

?>