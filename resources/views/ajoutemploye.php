
<div class="flex items-center justify-center min-h-screen w-3/4">
    <div class="bg-white p-6 rounded-lg shadow-md w-full">
        <form method="POST" action="" class="w-full">
            <div class="mb-4">
                <label for="noms" class="block text-gray-700 font-medium mb-2">Noms</label>
                <input type="text" id="noms" name="noms" class="border border-gray-300 rounded-md p-2 w-full" placeholder="ex: John Doe John">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" name="email" id="email" class="border border-gray-300 rounded-md p-2 w-full" placeholder="ex: john@gmail.com">
            </div>
            <div class="mb-4">
                <label for="telephone" class="block text-gray-700 font-medium mb-2">Téléphone</label>
                <input type="tel" name="tel" id="telephone" class="border border-gray-300 rounded-md p-2 w-full" placeholder="Phone">
            </div>
            <div class="mb-4 flex space-x-4">
                <div class="w-1/2">
                    <label for="genre"  class="block text-gray-700 font-medium mb-2">Genre</label>
                    <select name="genre" id="genre" class="border border-gray-300 rounded-md p-2 w-full">
                        <option value="masculin">Masculin</option>
                        <option value="féminin">Féminin</option>
                    </select>
                </div>
                <div class="w-1/2">
                    <label for="poste" class="block text-gray-700 font-medium mb-2">Poste</label>
                    <input type="text" name="poste" id="poste" class="border border-gray-300 rounded-md p-2 w-full" placeholder="Poste">
                </div>
            </div>
            <div class="mb-4">
                <label for="adresse" class="block text-gray-700 font-medium mb-2">Adresse</label>
                <textarea id="adresse" name="adresse" class="border border-gray-300 rounded-md p-2 w-full" placeholder="Entrez votre adresse" rows="3"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md w-full hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400" name="addUser">
                Ajouter
            </button>
        </form>
    </div>
</div>


<?php
use config\classes\user\User;


if (isset($_POST["addUser"])) {
    $noms = $_POST["noms"];
    $email = $_POST["email"];
    $telephone = $_POST["tel"];
    $genre = $_POST["genre"];
    $poste = $_POST["poste"];
    $adresse = $_POST["adresse"];

    $parties = preg_split('/\s+/', $noms);
    $anneeActuelle = date("Y");
    $rand = rand(0000, 9999);

    $matricule = $parties[0] . '_' . $rand;
    $mdp = "admin";

    $allusers = new User($matricule, $noms, $email, $telephone, $adresse, $genre, $poste, $mdp);
    echo $adduserVar = $allusers->addUser();

    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}
?>