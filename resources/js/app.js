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
    if (tache) {
        taskshow.classList.remove('hidden');
        taskshow.classList.add('flex');
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