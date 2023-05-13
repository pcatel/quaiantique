
var listeHoraires = [];
var xhr = new XMLHttpRequest();
var jour = "";
var nomJour = "";
const options = { weekday: 'long', timeZone: 'UTC' }; // Option pour afficher le jour en français

var startDateMidi = "";
var startDateSoir = "";
var endDateMidi = "";
var endDateSoir = "";

var heureDebutMidi = "";
var heureDebutSoir = "";
var heureFinMidi = "";
var heureFinSoir = "";








function createButtons() {
  chargeJsonFiche();
  //chercheHorairesDuJour();
  //createButtonsMidi();
  //createButtonsSoir();
};

function chargeJsonFiche() {
  xhr.open('GET', 'json/horaires.json');    // charger les données des participants
  xhr.onload = function () {
    if (xhr.status === 200) { // vérifier si la réponse est OK
      listeHoraires = JSON.parse(xhr.responseText); // extraire les produits du fichier JSON
      chercheHorairesDuJour(); // appeler la fonction pour afficher le tableau
    };
  };
  xhr.send(); // envoyer la requête
};


function chercheHorairesDuJour() {
  jour = new Date(document.getElementById("dateSouhaitee").value);
  nomJour = strUcFirst(jour.toLocaleString('fr-FR', options)); // afficher le nom du jour en Français
  alert('le nom du jour est selon chercheHorairesDuJour est    : ' + nomJour);

  for (var i = 0; i < listeHoraires.length; i++) { // recherche le jour
    if (listeHoraires[i].jour == nomJour) {

      if (listeHoraires[i].service == 'midi') {
        heureDebutMidi = listeHoraires[i].heureDebut;
        heureFinMidi = listeHoraires[i].heureFin;
      } else {
        heureDebutSoir = listeHoraires[i].heureDebut;
        heureFinSoir = listeHoraires[i].heureFin;
      };
    };
  };
  //return; 
  //alert('heure de début : ' + heureDebutMidi + ' et heure de fin : ' + heureFinMidi);
  //alert('heure de début : ' + heureDebutSoir + ' et heure de fin : ' + heureFinSoir);
  createButtonsMidi();
};




function strUcFirst(a) { return (a + '').charAt(0).toUpperCase() + a.substr(1); }


function createButtonsMidi() {
  // Récupérer la date à partir du formulaire
  const date = new Date(document.getElementById("dateSouhaitee").value);
  //jour = new Date(document.getElementById("dateSouhaitee").value);

  alert('heure de début : ' + startDateMidi.substring(0, 2) + ' et heure de fin : ' + endDateMidi.substring(0, 2));

  // Créer une date de début pour le service du midi
  startDateMidi = new Date(date.getFullYear(), date.getMonth(), date.getDate(), heureDebutMidi.substring(0, 2), 0, 0);

  // Créer une date de fin pour le service du midi
  endDateMidi = new Date(date.getFullYear(), date.getMonth(), date.getDate(), heureFinMidi.substring(0, 2), 0, 0);


  // Calculer le nombre de tranches de 15 minutes entre les deux heures

  const numSlots = Math.floor((endDateMidi - startDateMidi) / (15 * 60 * 1000));

  // Créer les boutons pour chaque tranche de 15 minutes
  const buttonsContainer = document.getElementById("midi");
  buttonsContainer.innerHTML = ""; // Effacer tout contenu précédent
  let currentTime = startDateMidi;
  document.getElementById('titreMidi').innerHTML = 'Midi';
  for (let i = 0; i < numSlots; i++) {
    // Créer un nouveau bouton
    const button = document.createElement("button");
    button.className = "horaires";
    button.textContent = currentTime.toLocaleDateString() + " " + currentTime.toLocaleTimeString();
    buttonsContainer.appendChild(button);
    // Ajouter 15 minutes à l'heure actuelle
    currentTime = new Date(currentTime.getTime() + 15 * 60000);
  };
  // return;
  createButtonsSoir();
};




function createButtonsSoir() {

  // Récupérer la date à partir du formulaire
  const date = new Date(document.getElementById("dateSouhaitee").value);



  // Créer une date de début à midi

  startDateSoir = new Date(date.getFullYear(), date.getMonth(), date.getDate(), heureDebutSoir.substring(0, 2), 0, 0);

  // Créer une date de fin à 15h00
  endDateSoir = new Date(date.getFullYear(), date.getMonth(), date.getDate(), heureFinSoir.substring(0, 2), 0, 0);
  //alert('heure de début : ' + startDateSoir + ' et heure de fin : ' + endDateSoir);

  // Calculer le nombre de tranches de 15 minutes entre les deux heures

  const numSlots = Math.floor((endDateSoir - startDateSoir) / (15 * 60 * 1000));

  // Créer les boutons pour chaque tranche de 15 minutes
  const buttonsContainer = document.getElementById("soir");
  buttonsContainer.innerHTML = ""; // Effacer tout contenu précédent
  let currentTime = startDateSoir;
  document.getElementById('titreSoir').innerHTML = 'Soir';
  for (let i = 0; i < numSlots; i++) {
    // Créer un nouveau bouton
    const button = document.createElement("button");
    button.className = "horaires";
    button.textContent = currentTime.toLocaleDateString() + " " + currentTime.toLocaleTimeString();
    buttonsContainer.appendChild(button);
    // Ajouter 15 minutes à l'heure actuelle
    currentTime = new Date(currentTime.getTime() + 15 * 60000);
  }
  // return;
}

function afficheHeureChoisie() {
  // Récupérer tous les boutons avec la classe "horaires"
  const buttons = document.querySelectorAll(".horaires");

  // Parcourir les boutons et leur ajouter un gestionnaire d'événements "click"
  buttons.forEach(function (button) {
    button.addEventListener("click", function () {
      // Récupérer la valeur du bouton cliqué
      const value = button.textContent;

      // Mettre à jour la valeur du champ d'entrée avec la valeur du bouton
      // const input = document.querySelector("#mon-champ");
      const input = document.getElementById('heureChoisie');
      input.value = value;
    });
  });




};




