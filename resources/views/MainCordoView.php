<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<?php 
  require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'projet.php';
  require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'Tache.php';
  require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'activite.php';
?>

<div class="p-8">
  <!-- creation du projet -->
  <div class="mb-8">
    <h2 class="text-xl font-semibold mb-4">Créer un projet</h2>
    <form class="grid grid-cols-1 md:grid-cols-2 gap-4" method="post" action="">
      <div>
        <label class="block text-gray-700">Nom</label>
        <input type="text" class="mt-1 p-2 block w-full border border-gray-300 rounded-md" name="nomprojet"/>
      </div>
      <div>
        <label class="block text-gray-700">Description</label>
        <textarea class="mt-1 p-2 block w-full border border-gray-300 rounded-md" name="description"></textarea>
      </div>
      <div>
        <label class="block text-gray-700">Date début</label>
        <input type="date" class="mt-1 p-2 block w-full border border-gray-300 rounded-md" name="dateDebut" />
      </div>
      <div>
        <label class="block text-gray-700">Date fin</label>
        <input type="date" class="mt-1 p-2 block w-full border border-gray-300 rounded-md" name="dateFin"/>
      </div>
      <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700" type="submit" name="createproject" >creer</button>
    </form>

  </div>

  <!-- creation de l'activite -->
  <div class="mb-8">
    <h2 class="text-xl font-semibold mb-4">Créer une activité</h2>
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
        Créer
    </button>
<!-- 
        <input type="date" class="mt-1 p-2 block w-full border border-gray-300 rounded-md" name="dateDebut"/>
      </div>
      <div>
        <label class="block text-gray-700">Date fin</label>
        <input type="date" class="mt-1 p-2 block w-full border border-gray-300 rounded-md" name="dateFin"/>
      </div>
      <input type="submit" name="activitecreate" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700" value="Créer"> -->

    </form>

  </div>

  <!-- creation de la tache" -->
  <div>
    <h2 class="text-xl font-semibold mb-4">Créer une tâche</h2>
    <form class="grid grid-cols-1 md:grid-cols-2 gap-4" method="post">
      <div>
        <label class="block text-gray-700">Nom</label>

        <input type="text" class="mt-1 p-2 block w-full border border-gray-300 rounded-md" name="nomTache" />

      </div>
      <div>
        <label class="block text-gray-700">Description</label>
        <textarea class="mt-1 p-2 block w-full border border-gray-300 rounded-md" name = "description"></textarea>
      </div>
      <div>
        <label class="block text-gray-700">Date début</label>
        <input type="date" class="mt-1 p-2 block w-full border border-gray-300 rounded-md" name = "dateDebut"/>
      </div>
      <div>
        <label class="block text-gray-700">Date fin</label>
        <input type="date" class="mt-1 p-2 block w-full border border-gray-300 rounded-md" name="dateFin" />
      </div>
      <button type="submit" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700" name ="createtache">
      Créer
    </button>
    </form>
  </div>
</div>


<?php  
use config\classes\projet\Project;
use config\classes\tache\Taches;
use config\classes\tache\Activites;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



if (isset($_POST["createproject"])) {
  echo "test srcipt";
  $nomProjet = $_POST["nomprojet"];
  $description = $_POST["description"];
  $dateDebut = $_POST["dateDebut"];
  $dateFin = $_POST["dateFin"];

  echo "Le projet a ete cree";

  $newproject = new Project();
  $newproject->AddProject($nomProjet, $dateDebut, $dateFin,  $description);
}
if (isset($_POST["createtache"])){
  $nomTache = $_POST["nomTache"];
  $Description = $_POST["description"];
  $dateDebut = $_POST["dateDebut"];
  $dateFin = $_POST["dateFin"];

  echo"LA tache a ete cree";
  $newTaches = new Taches();
  echo $newTaches->AddTache($nomTache, $dateDebut, $dateFin, $Description);
}

if (isset($_POST["createactivite"])){
  $nomActivite = $_POST["nomactivite"];

  $Description = $_POST["description"];
  $date_Debut = $_POST["dateDebut"];
  $Date_Fin = $_POST["dateFin"];

  $startDateTime = new DateTime($date_Debut);
  $endDateTime = new DateTime($Date_Fin);


  

  // Calculer la différence entre les deux dates
  $interval = $startDateTime->diff($endDateTime);


  // Afficher la durée en jours, mois, années, etc.
  $duree_estimee =  $interval->format('%y années, %m mois, %d jours');

  echo $duree_estimee;
  $newActivity = new Activites();

  $newActivity->AddActivity($nomActivite, $date_Debut, $Date_Fin, $Description, $duree_estimee);
}
?>