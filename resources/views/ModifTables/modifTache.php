<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="../js/app.js" defer></script>
    <title>Weka Tsk</title>
</head>

<!-- Modifier la tache" -->
<div>
    <h2 class="text-xl font-semibold mb-4">Modifier tâche</h2>
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
      Modifier
    </button>
    </form>
  </div>
</div>

<?php  
use config\classes\tache\Taches;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST["createtache"])){
    $nomTache = $_POST["nomTache"];
    $Description = $_POST["description"];
    $dateDebut = $_POST["dateDebut"];
    $dateFin = $_POST["dateFin"];
  
    echo"LA tache a ete modifier";
    $newTaches = new Taches();
    echo $newTaches->AddTache($nomTache, $dateDebut, $dateFin, $Description);
  }

?>