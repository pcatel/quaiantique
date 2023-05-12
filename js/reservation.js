function createButtons() {
    createButtonsMidi();
    createButtonsSoir();

};






function createButtonsMidi() {
    // Récupérer la date à partir du formulaire
    const date = new Date(document.getElementById("dateSouhaitee").value);
  
    // Créer une date de début à midi
    const startDateMidi = new Date(date.getFullYear(), date.getMonth(), date.getDate(), 12, 0, 0);
  
    // Créer une date de fin à 15h00
    const endDateMidi = new Date(date.getFullYear(), date.getMonth(), date.getDate(), 15, 0, 0);
  
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
    }
  // return;
}




  function createButtonsSoir() {
    // Récupérer la date à partir du formulaire
    const date = new Date(document.getElementById("dateSouhaitee").value);
  
    // Créer une date de début à midi
    const startDateSoir = new Date(date.getFullYear(), date.getMonth(), date.getDate(), 19, 0, 0);
  
    // Créer une date de fin à 15h00
    const endDateSoir = new Date(date.getFullYear(), date.getMonth(), date.getDate(), 22, 0, 0);
  
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
      
      
      
      
      //button.onclick = afficheHeureChoisie(currentTime.toLocaleDateString() + " " + currentTime.toLocaleTimeString());
      button.onclick = afficheHeureChoisie(button.textContent);
      buttonsContainer.appendChild(button);
      document.getElementById('heureChoisie').value="";
      // Ajouter 15 minutes à l'heure actuelle
      currentTime = new Date(currentTime.getTime() + 15 * 60000);
    }
    // return;
  }

  function afficheHeureChoisie() {
// Récupérer tous les boutons avec la classe "horaires"
const buttons = document.querySelectorAll(".horaires");

// Parcourir les boutons et leur ajouter un gestionnaire d'événements "click"
buttons.forEach(function(button) {
  button.addEventListener("click", function() {
    // Récupérer la valeur du bouton cliqué
    const value = button.textContent;

    // Mettre à jour la valeur du champ d'entrée avec la valeur du bouton
    // const input = document.querySelector("#mon-champ");
const input = document.getElementById('heureChoisie');
    input.value = value;
  });
});
   
   


};
  