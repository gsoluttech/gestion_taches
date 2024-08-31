<?php 
    use config\classes\projet\Project;
?>

<div class="w-full p-8 absolute top-10 z-10 backdrop-blur-lg bg-white border-2 border-solid border-white">
  <!-- modification du projet -->
  <div class="mb-8">
    <h2 class="text-xl font-semibold mb-4">Modifier le projet</h2>
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
      <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700" type="submit" name="createproject" >Modifier</button>
    </form>
</div>

<?php  



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

?>