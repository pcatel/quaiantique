var listeHoraires = [];
var xhr = new XMLHttpRequest();




function chargeJsonFiche() {
  xhr.open('GET', 'json/horaires.json');    // charger les données des participants
  xhr.onload = function () {
    if (xhr.status === 200) { // vérifier si la réponse est OK
      listeHoraires = JSON.parse(xhr.responseText); // extraire les produits du fichier JSON
      chercheHorairesDuJour(); // appeler la fonction pour afficher le tableau
    }
  };
  xhr.send(); // envoyer la requête
  return;
};

function chercheHorairesDuJour() {
  for (var i = 0; i < listeHoraires.length; i++) {
    if (i + 1 == "lundi") {
      alert(listeHoraires[i].heureDebut);
    };
  };
};