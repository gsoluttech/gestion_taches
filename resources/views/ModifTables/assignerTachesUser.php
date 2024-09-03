
<div class="w-4/6 bg-gray-200 p-5 rounded-lg relative">
    <ul class="w-full relative mb-5">
        <button class="absolute right-10 text-4xl text-white" onclick="closeAssinTask();">
            <i class='bx bxs-x-circle'></i>
        </button>
    </ul>

    <h1 class="my-2 relative">Assignée à : </h1>
    <ul>
        <?php
            foreach ($users as $user) {
                $iduser = $user['matricule'];
                $noms = $user['Noms'];
                $email = $user['Email'];
                $poste = $user['Poste'];
                
                echo " 
                    <button class=\"border bg-white h-12 rounded-lg w-full justify-center items-center flex my-2\"  id=\"sendFormulaireID\">     
                            <ul class=\"w-2/6 text-left ml-4\"><li class=\"mx-2 font-semibold\">$noms</li></ul>
                            <ul class=\"w-2/6 text-left ml-4\"><li class=\"mx-2 font-semibold\">$email</li></ul>
                            <ul class=\"w-2/6 text-left ml-4\"><li class=\"mx-2 font-semibold\">$poste</li></ul>
                            <form action=\"\" method=\"post\" class=\"hidden\" onsubmit=\"return confirmAssigner();\" id=\"idformEmploye\">
                                <input type=\"text\" name=\"idEmploye\" id=\"\" value=\"$iduser\" class=\"hidden\">
                                <input type=\"text\" name=\"idTache\" id=\"idTacheAssignation\" value=\"$idTaces\" class=\"hidden\">
                                <input type=\"submit\" value=\"Envoyer\" class=\"hidden\" name=\"assignerUser\" id=\"submitForm\">
                            </form>
                    </button>
                ";
            }
        ?>
    </ul>
</div>

<?php
if (isset($_POST['assignerUser'])) {
    $idEmploye = $_POST['idEmploye'];
    $idTache = $_POST['idTache'];

    echo 'Test';
    echo $assignation = $assigner->assignation($idEmploye, $idTache);

    // header("Location: " . $_SERVER['REQUEST_URI']);
    // exit();
} else {
    echo 'assignerUser not found';
}
?>