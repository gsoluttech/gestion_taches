<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">

<?php
    require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'projet.php';
    require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'activite.php';

    use config\classes\projet\Project;
    use config\classes\activite\Activites;

    $projet = new Project();
    $allproject = $projet->recupererProjet();

    $activite = new Activites();
?>
<div class="">
    <div class="w-full h-full p-10 flex flex-wrap justify-center">
            <?php
                foreach($allproject as $proj) {
                    $idProjet = $proj['idProjet'];
                    $nomProjet = $proj['NomProjet'];
                    $description = $proj['description_Projet'];
                    
                    $hisActivity = $activite->recupererProjet($idProjet);

                    echo "   
                    <div class=\"w-96 h-24 bg-gray-200 shadow-lg rounded-lg p-4 relative flex flex-row my-6 mx-4\" onclick=\"showActivity();\">
                        <ul class=\"w-2/4\">
                            <h3 class=\"text-lg font-semibold text-gray-700\">$nomProjet</h3>
                            <p>$description</p>
                        </ul>
                        <ul class=\"absolute right-0 w-2/4\">
                            <ul class=\"flex flex-col\">
                                <form method=\"POST\" class=\"flex flex-col\">
                                    <button class=\"p-2 text-xl\" type=\"submit\"><i class='bx bxs-edit'></i></button>
                                    <button type=\"submit\"><i class='bx bxs-trash-alt'></i></button>
                                </form>
                            </ul>
                        </ul>
                    </div>
                    ";
                    foreach($hisActivity as $act) {
                        $nomActivite = $act['Nom'];
                        $descriptionActivite = $act['description_activite'];
                        $dateDebut = $act['dateDebut'];
                        $dateFin = $act['dateFin'];
                        $Statut = $act['Statut'];

                        echo " 
                            <div class=\"w-96 h-24 bg-gray-200 shadow-lg rounded-lg p-4 relative flex flex-row my-6 mx-4\" onclick=\"showActivity();\">
                                <ul class=\"w-2/4\">
                                    <h3 class=\"text-lg font-semibold text-gray-700\">$nomActivite</h3>
                                    <p>$descriptionActivite</p>
                                </ul>
                                <ul class=\"absolute right-0 w-2/4\">
                                    <ul class=\"flex flex-col\">
                                        <form method=\"POST\" class=\"flex flex-col\">
                                            <button class=\"p-2 text-xl\" type=\"submit\"><i class='bx bxs-edit'></i></button>
                                            <button type=\"submit\"><i class='bx bxs-trash-alt'></i></button>
                                        </form>
                                    </ul>
                                </ul>
                            </div>
                        ";
                    }
                    

                    
                }    
            ?>
        
    </div>
</div>