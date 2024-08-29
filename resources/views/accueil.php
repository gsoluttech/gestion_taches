
<div id="accueil" class="w-full">
    <div class="w-full h-full p-6 flex flex-col" id="containerProjectShow">
            <?php
                foreach($allproject as $proj) {
                    $idProjet = $proj['idProjet'];
                    $nomProjet = $proj['NomProjet'];
                    $description = $proj['description_Projet'];
                    
                    $hisActivity = $activite->recupererProjet($idProjet);

                    echo "   
                    <div class=\"w-4/12 h-48 bg-gray-200 shadow-lg rounded-lg p-4 relative flex flex-col my-6 mx-4\" id=\"ProjectShowDetails\">
                        <ul class=\"w-full relative h\">
                            <input class=\"hidden\" value=\"$idProjet\" name=\"idProjet\">
                            <h3 class=\"text-lg font-semibold text-gray-700\">$nomProjet</h3>
                            <p>$description</p>
                        </ul>
                        <ul class=\"w-full absolute bottom-5 flex flex-row items-center justify-center\">
                            <ul class=\"flex flex-col w-2/4\">
                                <button id=\"btnShowContent\" class=\"w-48 flex relative bottom-0 mt-4 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700\" onclick=\"showActivity();\">Voir les activités</button>
                            </ul>
                            <ul class=\"flex flex-row w-2/4 relative pt-2 h-16\">
                                <button class=\"mt-4 px-2 ml-4 mx-2 h-12 text-4xl text-green-500 rounded-md hover:text-green-400 showModidifyProject\" type=\"submit\"><i class='bx bxs-edit' id=\"showModidifyProject\" onclick=\"showModidifyProject();\"></i></button>
                                <form action=\"\" method=\"\">
                                    <button class=\"mt-4 px-2 h-12 text-4xl text-red-700 rounded-md hover:text-red-500\" type=\"submit\"><i class='bx bxs-trash-alt'></i></button>
                                </form>
                            </ul>
                        </ul>
                    </div>
                    ";
                    echo "<div class=\"w-2/4 flex flex-col absolute top-10 right-10\">";
                    if (is_array($hisActivity)) {
                    foreach($hisActivity as $act) {
                        $nomActivite = $act['Nom'];
                        $descriptionActivite = $act['description_activite'];
                        $dateDebut = $act['dateDebut'];
                        $dateFin = $act['dateFin'];
                        $Statut = $act['Statut'];

                        echo " 

                            <div class=\"w-96 h-46 bg-gray-100 shadow-lg rounded-lg p-4 relative hidden flex-col my-5 mx-4 DetailshowActivity\">
                                
                                <ul class=\"w-3/6\">
                                    <h3 class=\"text-lg font-semibold text-gray-700\">$nomActivite</h3>
                                    <p>$descriptionActivite</p>

                                </ul>
                                <ul class=\"w-2/6\">
                                    <label class=\"text-md font-semibold \">Du $dateDebut </label>
                                    <label class=\"text-md font-semibold \">Au $dateFin</label>
                                    <span class=\"font-medium                   
                                </ul>
                                <ul class=\"absolute right-0 top-0 w-1/6\">
                                    <ul class=\"flex flex-col\">
                                        <form method=\"POST\" class=\"flex flex-row\">
                                            <button class=\"mt-4 px-2 ml-4 mx-2 h-12 text-xl text-green-500 rounded-md hover:text-green-400\" type=\"submit\"><i class='bx bxs-edit'></i></button>
                                            <button class=\"mt-4 px-2 ml-4 mx-2 h-12 text-xl text-red-700 rounded-md hover:text-red-500\" type=\"submit\"><i class='bx bxs-trash-alt'></i></button>
                                        </form>
                                    </ul>
                                </ul>
                            </div>
                        ";
                    }
                } else {
                    // echo $hisActivity;
                }
                echo "</div>";
                    
                }    
            ?>      
    </div>
</div>

<div class="hidden w-full absolute top-10 z-10 backdrop-blur-lg" id="showModifyProject">
    <?php
        require_once "./ModifTables/modifProjet.php";
    ?>
</div>
