
<div class="w-96 bg-gray-300 p-5">
    <ul>
        <?php
            foreach ($users as $user) {
                $iduser = $user['matricule'];
                $noms = $user['Noms'];
                $email = $user['Email'];
                $poste = $user['Poste'];
                
                echo " 
                    <li class=\"border rounded-lg w-full\">     
                        <ul>
                            <li>$noms</li>
                            <li>$email</li>
                            <li>$poste</li>
                            <form action=\"\" method=\"post\" class=\"hidden\">
                                <input type=\"text\" name=\"idEmploye\" id=\"\" value=\"$iduser\" class=\"hidden\">
                                <input type=\"text\" name=\"idTache\" id=\"\" value=\"$idTaces\" class=\"hidden\">
                                <input type=\"submit\" value=\"Envoyer\" class=\"hidden\" name=\"assignerUser\">
                            </form>
                        </ul>
                    </li>
                ";
            }
        ?>
    </ul>
</div>

<?php
if (isset($_POST['assignerUser'])) {
    $idEmploye = $_POST['idEmploye'];
    $idTache = $_POST['idTache'];
}
?>