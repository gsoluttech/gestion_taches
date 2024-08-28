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
    
    if (apercuCo) {
        NewProjetCo.classList.remove("sidebarSelect");
        apercuCo.classList.add("sidebarSelect");
        TachesCo.classList.remove("sidebarSelect");
        EquipesCo.classList.remove("sidebarSelect");
    }
}

function Taches() {
    let apercuCo = document.getElementById('apercuCo');
    let TachesCo = document.getElementById('TachesCo');
    let NewProjetCo = document.getElementById('NewProjetCo');
    let EquipesCo = document.getElementById('EquipesCo');
    
    let taskshowCoordo = document.getElementById('taskshowCoordo');
    let addNewProject = document.getElementById('addNewProject');

    if (TachesCo) {
        NewProjetCo.classList.remove('sidebarSelect');
        apercuCo.classList.remove('sidebarSelect');
        TachesCo.classList.add('sidebarSelect');
        EquipesCo.classList.remove('sidebarSelect');

        taskshowCoordo.classList.remove('hidden');
        taskshowCoordo.classList.add('flex');

        addNewProject.classList.remove('flex')
        addNewProject.classList.add('hidden');
    }
}

function NewProjet() {
    let apercuCo = document.getElementById('apercuCo');
    let TachesCo = document.getElementById('TachesCo');
    let NewProjetCo = document.getElementById('NewProjetCo');
    let EquipesCo = document.getElementById('EquipesCo');
    
    let headerCoordo = document.getElementById('headerCoordo');
    let taskshowCoordo = document.getElementById('taskshowCoordo');
    let addNewProject = document.getElementById('addNewProject');

    if (NewProjetCo) {
        NewProjetCo.classList.add("sidebarSelect");
        apercuCo.classList.remove("sidebarSelect");
        TachesCo.classList.remove("sidebarSelect");
        EquipesCo.classList.remove("sidebarSelect");

        taskshowCoordo.classList.remove('flex');
        taskshowCoordo.classList.add('hidden');

        addNewProject.classList.remove('hidden')
        addNewProject.classList.add('flex');

        headerCoordo.classList.add('hidden');
        headerCoordo.classList.remove('flex');
    }
}

function Equipes() {
    let apercuCo = document.getElementById('apercuCo');
    let TachesCo = document.getElementById('TachesCo');
    let NewProjetCo = document.getElementById('NewProjetCo');
    let EquipesCo = document.getElementById('EquipesCo');
    
    let headerCoordo = document.getElementById('headerCoordo');
    let taskshowCoordo = document.getElementById('taskshowCoordo');
    let addNewProject = document.getElementById('addNewProject');
    let equipeShow = document.getElementById('equipeShow');

    if (EquipesCo) {
        NewProjetCo.classList.remove('sidebarSelect');
        apercuCo.classList.remove('sidebarSelect');
        TachesCo.classList.remove('sidebarSelect');
        EquipesCo.classList.add('sidebarSelect');

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