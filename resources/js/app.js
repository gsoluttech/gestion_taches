// sidebar employe

function apercu() {
    let apercu = document.getElementById('apercu');
    let tache = document.getElementById('tache');
    let superviseur = document.getElementById('superviseur');
    let messages = document.getElementById('messages');
    let parametre = document.getElementById('parametre');

    if (apercu) {
        
    } else {
        console.log('Apercu available');
    }

}
function tache() {
    let apercu = document.getElementById('apercu');
    let tache = document.getElementById('tache');
    let superviseur = document.getElementById('superviseur');
    let messages = document.getElementById('messages');
    let parametre = document.getElementById('parametre');

    let taskshow = document.getElementById('taskshow');
    let taskrapport = document.getElementById('taskrapport');
    if (tache) {
        taskshow.classList.remove('hidden');
        taskshow.classList.add('flex');
        tache.classList.add('sidebarSelect');

        taskrapport.classList.add('hidden');
        taskrapport.classList.remove('flex');
        superviseur.classList.remove('sidebarSelect');

        console.log('Available')
    } else {
        console.log('not available');
    }
}

function superviseur() {
    let apercu = document.getElementById('apercu');
    let tache = document.getElementById('tache');
    let superviseur = document.getElementById('superviseur');
    let messages = document.getElementById('messages');
    let parametre = document.getElementById('parametre');

    let taskrapport = document.getElementById("taskrapport");
    let taskshow = document.getElementById("taskshow");

    if (taskrapport) {
        taskrapport.classList.remove('hidden');
        taskrapport.classList.add('flex');
        superviseur.classList.add("sidebarSelect");

        taskshow.classList.remove('flex')
        taskshow.classList.add('hidden');
        tache.classList.remove("sidebarSelect");

        console.log('djfdskf');
        console.log("Classes actuelles de l'élément : ", taskrapport.className);
    }

}

function messages() {
    let apercu = document.getElementById('apercu');
    let tache = document.getElementById('tache');
    let superviseur = document.getElementById('superviseur');
    let messages = document.getElementById('messages');
    let parametre = document.getElementById('parametre');

}

function parametre() {
    let apercu = document.getElementById('apercu');
    let tache = document.getElementById('tache');
    let superviseur = document.getElementById('superviseur');
    let messages = document.getElementById('messages');
    let parametre = document.getElementById('parametre');

}

// espace coordo config

function apercu() {
    let apercuCo = document.getElementById('apercuCo');
    let TachesCo = document.getElementById('TachesCo');
    let NewProjetCo = document.getElementById('NewProjetCo');
    let EquipesCo = document.getElementById('EquipesCo');
    let AjouterEmplCo = document.getElementById('AjouterEmplCo');

    let showAddUsers = document.getElementById('showAddUsers');
    let apercuView = document.getElementById('apercuView');
    
    let headerCoordo = document.getElementById('headerCoordo');

    let taskshowCoordo = document.getElementById('taskshowCoordo');
    let addNewProject = document.getElementById('addNewProject');
    
    if (apercuCo) {
        NewProjetCo.classList.remove("sidebarSelect");
        apercuCo.classList.add("sidebarSelect");
        TachesCo.classList.remove("sidebarSelect");
        EquipesCo.classList.remove("sidebarSelect");
        AjouterEmplCo.classList.remove('sidebarSelect');

        headerCoordo.classList.remove('hidden');
        headerCoordo.classList.add('flex');
        apercuView.classList.add('flex');
        apercuView.classList.remove('hidden');

        showAddUsers.classList.add('hidden');
        showAddUsers.classList.remove('flex');

        taskshowCoordo.classList.remove('flex');
        taskshowCoordo.classList.add('hidden');

        addNewProject.classList.remove('flex')
        addNewProject.classList.add('hidden');

        equipeShow.classList.add('hidden');
        equipeShow.classList.remove('flex');

        console.log('apercuView');
    }
}

function Taches() {
    let apercuCo = document.getElementById('apercuCo');
    let TachesCo = document.getElementById('TachesCo');
    let NewProjetCo = document.getElementById('NewProjetCo');
    let EquipesCo = document.getElementById('EquipesCo');
    let AjouterEmplCo = document.getElementById('AjouterEmplCo');

    let showAddUsers = document.getElementById('showAddUsers');
    let taskshowCoordo = document.getElementById('taskshowCoordo');
    let headerCoordo = document.getElementById('headerCoordo');
    let addNewProject = document.getElementById('addNewProject');

    if (TachesCo) {
        NewProjetCo.classList.remove('sidebarSelect');
        apercuCo.classList.remove('sidebarSelect');
        TachesCo.classList.add('sidebarSelect');
        EquipesCo.classList.remove('sidebarSelect');
        AjouterEmplCo.classList.remove('sidebarSelect');

        headerCoordo.classList.remove('hidden');
        headerCoordo.classList.add('flex');
        apercuView.classList.add('hidden');
        apercuView.classList.remove('flex');

        showAddUsers.classList.add('hidden');
        showAddUsers.classList.remove('flex');
        
        taskshowCoordo.classList.remove('hidden');
        taskshowCoordo.classList.add('flex');

        addNewProject.classList.remove('flex')
        addNewProject.classList.add('hidden');

        equipeShow.classList.add('hidden');
        equipeShow.classList.remove('flex');
    }
}

function NewProjet() {
    let apercuCo = document.getElementById('apercuCo');
    let TachesCo = document.getElementById('TachesCo');
    let NewProjetCo = document.getElementById('NewProjetCo');
    let EquipesCo = document.getElementById('EquipesCo');
    let AjouterEmplCo = document.getElementById('AjouterEmplCo');

    let showAddUsers = document.getElementById('showAddUsers');
    let headerCoordo = document.getElementById('headerCoordo');
    let taskshowCoordo = document.getElementById('taskshowCoordo');
    let addNewProject = document.getElementById('addNewProject');

    if (addNewProject) {
        console.log('found NewProjetCo')
        NewProjetCo.classList.add("sidebarSelect");
        apercuCo.classList.remove("sidebarSelect");
        TachesCo.classList.remove("sidebarSelect");
        EquipesCo.classList.remove("sidebarSelect");
        AjouterEmplCo.classList.remove('sidebarSelect');

        apercuView.classList.add('hidden');
        apercuView.classList.remove('flex');

        showAddUsers.classList.add('hidden');
        showAddUsers.classList.remove('flex');

        taskshowCoordo.classList.remove('flex');
        taskshowCoordo.classList.add('hidden');

        console.log('before');
        addNewProject.classList.remove('hidden')
        addNewProject.classList.add('flex');
        console.log('after');
        equipeShow.classList.add('hidden');
        equipeShow.classList.remove('flex');

        headerCoordo.classList.add('hidden');
        headerCoordo.classList.remove('flex');
    } else {
        console.log('NewProjetCo NOT found');
    }
}

function Equipes() {
    let apercuCo = document.getElementById('apercuCo');
    let TachesCo = document.getElementById('TachesCo');
    let NewProjetCo = document.getElementById('NewProjetCo');
    let EquipesCo = document.getElementById('EquipesCo');
    let AjouterEmplCo = document.getElementById('AjouterEmplCo');

    let showAddUsers = document.getElementById('showAddUsers');
    let headerCoordo = document.getElementById('headerCoordo');
    let taskshowCoordo = document.getElementById('taskshowCoordo');
    let addNewProject = document.getElementById('addNewProject');
    let equipeShow = document.getElementById('equipeShow');

    if (EquipesCo) {
        NewProjetCo.classList.remove('sidebarSelect');
        apercuCo.classList.remove('sidebarSelect');
        TachesCo.classList.remove('sidebarSelect');
        EquipesCo.classList.add('sidebarSelect');
        AjouterEmplCo.classList.remove('sidebarSelect');

        showAddUsers.classList.add('hidden');
        showAddUsers.classList.remove('flex');
        
        apercuView.classList.add('hidden');
        apercuView.classList.remove('flex');

        taskshowCoordo.classList.remove('flex');
        taskshowCoordo.classList.add('hidden');

        addNewProject.classList.remove('flex')
        addNewProject.classList.add('hidden');

        headerCoordo.classList.add('flex');
        headerCoordo.classList.remove('hidden');

        equipeShow.classList.add('flex');
        equipeShow.classList.remove('hidden');
    }
}

function AjouterEmplCo() {
    let apercuCo = document.getElementById('apercuCo');
    let TachesCo = document.getElementById('TachesCo');
    let NewProjetCo = document.getElementById('NewProjetCo');
    let EquipesCo = document.getElementById('EquipesCo');
    let AjouterEmplCo = document.getElementById('AjouterEmplCo');

    let showAddUsers = document.getElementById('showAddUsers');
    let headerCoordo = document.getElementById('headerCoordo');
    let taskshowCoordo = document.getElementById('taskshowCoordo');
    let addNewProject = document.getElementById('addNewProject');
    let equipeShow = document.getElementById('equipeShow');

    if (showAddUsers) {
        NewProjetCo.classList.remove('sidebarSelect');
        apercuCo.classList.remove('sidebarSelect');
        TachesCo.classList.remove('sidebarSelect');
        EquipesCo.classList.remove('sidebarSelect');
        AjouterEmplCo.classList.add('sidebarSelect');

        showAddUsers.classList.remove('hidden');
        showAddUsers.classList.add('flex');

        apercuView.classList.add('hidden');
        apercuView.classList.remove('flex');

        taskshowCoordo.classList.remove('flex');
        taskshowCoordo.classList.add('hidden');

        addNewProject.classList.remove('flex')
        addNewProject.classList.add('hidden');

        headerCoordo.classList.add('flex');
        headerCoordo.classList.remove('hidden');

        equipeShow.classList.add('hidden');
        equipeShow.classList.remove('flex');
    }
}

function showActivity() {
    // alert("show showActivity")
    let btnShowContent = document.getElementById("btnShowContent");
    let showActivity = document.querySelectorAll('.DetailshowActivity');

    if (showActivity) {

        showActivity.forEach(function(actSh) {
            if (actSh.classList.contains('flex')) {
                actSh.classList.remove('flex');
                actSh.classList.add('hidden');

                btnShowContent.textContent = "Voir les activités";
                console.log('Cacher')
            } else {
                actSh.classList.remove('hidden');
                actSh.classList.add('flex');

                btnShowContent.textContent = "Cacher les activités";

                console.log('Afficher')
            }

            console.log(actSh.textContent);  // Affiche le contenu de chaque commentaire
        })
        showActivity.classList.remove('hidden');
        showActivity.classList.add('flex');

        // console.log('Activités show');
    } else {
        console.log('showActivity not found');
    }
}

function sendPiCheck() {
    const sendPicAuto = document.getElementById('showFilesDialog');

    console.log('sendPicAuto');
    if(sendPicAuto) {
        sendPicAuto.addEventListener('click', () => {
            console.log('Boite de dialogue ouverte');
        });
        sendPicAuto.addEventListener('change', () => {
            
            if (sendPicAuto.files.length > 0) {
                console.log("Image image selected");              
                console.log('Boîte de dialogue fermée');
                document.getElementById('send_profile_picture').click();
            } else {
                console.log("No image selected");             
                console.log('Boîte de dialogue fermée');
            }

        });

    } else {
        console.log('Boîte de dialogue non trouvée');
    }

}

document.addEventListener('DOMContentLoaded', (event) => {
    let profil_image_default = document.getElementById("profil_image_default");
    let profileImage = document.getElementById("profileImage");
    let container_profils = document.getElementById("container_profils");

    if (profileImage && profileImage.naturalWidth > 0 && profileImage.naturalHeight > 0) {
        container_profils.classList.remove('bg-gray-200');
        profileImage.classList.remove('hidden');
        profileImage.classList.add('flex')
    } else {
        profil_image_default.classList.remove('hidden');
        profil_image_default.classList.add('flex');
        container_profils.classList.add('bg-gray-200');
    }
});

function showModidifyProject() {
    alert('showModidifyProject');
    let showModifyProject = document.getElementById('showModifyProject');

    if (showModifyProject) {
        showModifyProject.classList.remove('hidden');
        showModifyProject.classList.add('flex');

        console.log('showModifyProject ');
    } else {
        console.log('not found');
    }
}

function confirmDeletion() {
    return confirm("Êtes-vous sûr de vouloir supprimer cet élément ?");
}

function confirmAssigner() {
    return confirm("Voulez-vous assigner la tâche à cet utilisateur ?");
}

function assignerTache(param) {
    // let idTaches = param;
    let showAllEmpoyee = document.getElementById('showAllEmpoyee');
    let idTacheAssignation = document.getElementById('idTacheAssignation');
    if (showAllEmpoyee) {
        showAllEmpoyee.classList.remove('hidden');
        showAllEmpoyee.classList.add('flex');

        idTacheAssignation.value = param;
    }
}

var sendUserAssignation = document.querySelectorAll('#sendFormulaireID').forEach(button => {
    button.addEventListener('click', () => {
        const main_container_user = button.closest('#sendFormulaireID');

        const idformEmploye = main_container_user.querySelector('#idformEmploye');
        const submitForm = idformEmploye.querySelector('#submitForm');

        if (submitForm) {
            console.log('found');
            submitForm.click();
        } else {
            console.log('not found')
        }
    })
})

function closeAssinTask() {
    let showAllEmpoyee = document.getElementById('showAllEmpoyee');
    if (showAllEmpoyee) {
        showAllEmpoyee.classList.add('hidden');
        showAllEmpoyee.classList.remove('flex');
    }
}