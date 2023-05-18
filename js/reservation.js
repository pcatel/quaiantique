// Déclaration des variables
var listeHoraires = [];
var xhr = new XMLHttpRequest();
var jour = "";
var nomJour = "";
var leNomDuJour = ""; // est affiché lors du chois de la date du datepicket
const options = { weekday: 'long', timeZone: 'UTC' }; // Option pour afficher le jour en français

var startDateMidi = "";
var startDateSoir = "";
var endDateMidi = "";
var endDateSoir = "";

var heureDebutMidi = "";
var heureDebutSoir = "";
var heureFinMidi = "";
var heureFinSoir = "";


// fonction d'iniitialisation
function createButtons() {
  removeBtn();//on efface tous les boutons eventuellement déjà créés
  chargeJsonFiche(); // on charge le fichier json des horaires
};

function chargeJsonFiche() {
  xhr.open('GET', 'json/horaires.json');    // charger les données des participants
  xhr.onload = function () {
    if (xhr.status === 200) { // vérifier si la réponse est OK
      listeHoraires = JSON.parse(xhr.responseText); // extraire les produits du fichier JSON
      chercheHorairesDuJour(); // on appelle la fonction pour rechercher les horaires selon le jour sélectionné
    };
  };
  xhr.send(); // envoyer la requête
};


function chercheHorairesDuJour() {
  jour = new Date(document.getElementById("dateSouhaitee").value);
  nomJour = strUcFirst(jour.toLocaleString('fr-FR', options)); // afficher le nom du jour en Français
  // affiche le jour dans le champs date heure de réservation 
  const optionsbis = { weekday: 'long', year: 'numeric', month: '2-digit', day: '2-digit' };
  leNomDuJour = strUcFirst(jour.toLocaleDateString('fr-FR', optionsbis)); // Formatage de la date selon la locale fr-FR au format 'JJ/MM/AAAA'
  document.getElementById('heureChoisie').value = leNomDuJour;
  for (var i = 0; i < listeHoraires.length; i++) { // recherche le jour
    if (listeHoraires[i].jour == nomJour) { //on recherche dans le fichier json les hoaires dun midi et les horaires du soir pour le jour sélectionnée
      if (listeHoraires[i].service == 'midi') { // les horaires début et fin pour le midi
        heureDebutMidi = listeHoraires[i].heureDebut;

        heureFinMidi = listeHoraires[i].heureFin;

      




      } else { // les horaires début et fin pour le soir
        heureDebutSoir = listeHoraires[i].heureDebut;
        heureFinSoir = listeHoraires[i].heureFin;
      

      };
    };
  };

  createButtonsMidi(); // appelle de la fonction qui créé les boutons pour le service du midi
};




function strUcFirst(a) {
  return (a + '').charAt(0).toUpperCase() + a.substr(1);
}; // on capitalise la première lettre du jour


function createButtonsMidi() {
  // Récupérer la date à partir du formulaire
  const date = new Date(document.getElementById("dateSouhaitee").value);
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
  if (numSlots == 0) { // si heure de fin - heure de début est égale à 0 alors le restaurant est fermé le midi
    document.getElementById('fermeMidi').innerHTML = 'Fermé le midi';
  } else {
    for (let i = 0; i < numSlots; i++) {
      // Créer un nouveau bouton
      const button = document.createElement("button");
      button.className = "horaires";
      button.textContent = currentTime.toLocaleTimeString('fr-FR', { hour: '2-digit', minute: '2-digit' });
      button.addEventListener("click", function () {// Récupérer la valeur du bouton cliqué
      const value = button.textContent;
      const input = document.getElementById('heureChoisie');// Mettre à jour la valeur du champ d'entrée avec la valeur du bouton
      input.value = input.value = leNomDuJour + ' à ' + value;
      });
      buttonsContainer.appendChild(button);
      // Ajouter 15 minutes à l'heure actuelle
      currentTime = new Date(currentTime.getTime() + 15 * 60000);
    };
  };
  createButtonsSoir(); // on appellle la fonction qui créé les boutons pour le service du soir
};




function createButtonsSoir() {
  // Récupérer la date à partir du formulaire
  const date = new Date(document.getElementById("dateSouhaitee").value);
  // Créer une date de début à midi
  startDateSoir = new Date(date.getFullYear(), date.getMonth(), date.getDate(), heureDebutSoir.substring(0, 2), 0, 0);
  // Créer une date de fin à 15h00
  endDateSoir = new Date(date.getFullYear(), date.getMonth(), date.getDate(), heureFinSoir.substring(0, 2), 0, 0);
  // Calculer le nombre de tranches de 15 minutes entre les deux heures
  const numSlots = Math.floor((endDateSoir - startDateSoir) / (15 * 60 * 1000));
  // Créer les boutons pour chaque tranche de 15 minutes
  const buttonsContainer = document.getElementById("soir");
  buttonsContainer.innerHTML = ""; // Effacer tout contenu précédentts
  let currentTime = startDateSoir;
  document.getElementById('titreSoir').innerHTML = 'Soir';
  if (numSlots == 0) {
    document.getElementById('fermeSoir').innerHTML = 'Fermé le soir';
  } else {
    
    for (let i = 0; i < numSlots; i++) {
      // Créer un nouveau bouton
      const button = document.createElement("button");
      button.className = "horaires";
      button.textContent = currentTime.toLocaleTimeString('fr-FR', { hour: '2-digit', minute: '2-digit' });
      button.addEventListener("click", function () {
        // Récupérer la valeur du bouton cliqué
        const value = button.textContent;
        // Mettre à jour la valeur du champ d'entrée avec la valeur du bouton
        const input = document.getElementById('heureChoisie');
        input.value = input.value = leNomDuJour + ' à ' + value;
      });
      buttonsContainer.appendChild(button);
      // Ajouter 15 minutes à l'heure actuelle
      currentTime = new Date(currentTime.getTime() + 15 * 60000);
    };
  };

};



function removeBtn() { // on supprimes les boutons eventuellement créés
  var horairesButtons = document.querySelectorAll('horaires');
  // Parcourir tous les boutons ayant la classe "horaires" et les supprimer un par un
  for (var i = 0; i < horairesButtons.length; i++) {
    var button = horairesButtons[i];
    button.remove();
  };
};





