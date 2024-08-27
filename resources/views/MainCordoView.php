<?php 
  require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'projet.php';
?>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="p-8">
  <!-- creation du projet -->
  <div class="mb-8">
    <h2 class="text-xl font-semibold mb-4">Créer un projet</h2>
    <form class="grid grid-cols-1 md:grid-cols-2 gap-4" method="post">
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
      <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700" type="submit" name="createproject">
      Créer
    </button>
    </form>

  </div>

  <!-- creation de l'activite -->
  <div class="mb-8">
    <h2 class="text-xl font-semibold mb-4">Créer une activité</h2>
    <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div>
        <label class="block text-gray-700">Nom</label>
        <input type="text" class="mt-1 p-2 block w-full border border-gray-300 rounded-md" />
      </div>
      <div>
        <label class="block text-gray-700">Description</label>
        <textarea class="mt-1 p-2 block w-full border border-gray-300 rounded-md"></textarea>
      </div>
      <div>
        <label class="block text-gray-700">Date début</label>
        <input type="date" class="mt-1 p-2 block w-full border border-gray-300 rounded-md" />
      </div>
      <div>
        <label class="block text-gray-700">Date fin</label>
        <input type="date" class="mt-1 p-2 block w-full border border-gray-300 rounded-md" />
      </div>
    </form>
    <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
      Créer
    </button>
  </div>

  <!-- creation de la tache" -->
  <div>
    <h2 class="text-xl font-semibold mb-4">Créer une tâche</h2>
    <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div>
        <label class="block text-gray-700">Nom</label>
        <input type="text" class="mt-1 p-2 block w-full border border-gray-300 rounded-md" />
      </div>
      <div>
        <label class="block text-gray-700">Description</label>
        <textarea class="mt-1 p-2 block w-full border border-gray-300 rounded-md"></textarea>
      </div>
      <div>
        <label class="block text-gray-700">Date début</label>
        <input type="date" class="mt-1 p-2 block w-full border border-gray-300 rounded-md" />
      </div>
      <div>
        <label class="block text-gray-700">Date fin</label>
        <input type="date" class="mt-1 p-2 block w-full border border-gray-300 rounded-md" />
      </div>
      <div>
        <label class="block text-gray-700">Priorité</label>
        <input type="text" class="mt-1 p-2 block w-full border border-gray-300 rounded-md" />
      </div>
    </form>
    <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
      Créer
    </button>
  </div>
</div>


<?php  

if (isset($_POST["createproject"])) {
  $nomProjet = $_POST["nomprojet"];
  $description = $_POST["description"];
  $dateDebut = $_POST["dateDebut"];
  $dateFin = $_POST["dateFin"];

  echo "Valeur aredsjkfhd";


}
?>