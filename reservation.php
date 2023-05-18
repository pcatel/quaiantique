<!DOCTYPE html>
<html lang="en">

<head>
  <title>Quai Antique : Arnaud Michant - Chambéry</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
   <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/slider.css">
  <link rel="stylesheet" href="css/login.css">


</head>

<body>

  <?php
  // génération des horaires en json
  //les informations d'identification du base de données
  $host = '91.216.107.182';
  $user = 'pasca8966';
  $pass = 'gold1955';
  $db = 'pasca8966_4gp9c9';



  //Créer une connexion à la base de données
  $conn = new mysqli($host, $user, $pass, $db);

  //Vérifier la connexion
  if ($conn->connect_errno) {
    printf("Échec de la connexion à la base de données");
    exit();
  }

  //Récupérer les lignes de la table users
  $res = $conn->query("SELECT * FROM Horaires");

  //Initialiser un tableau
  $data = array();

  //Récupérer les lignes
  while ($row = $res->fetch_assoc()) {
    $data[] = $row;
  }

  //Afficher le tableau au format JSON

  file_put_contents("json/horaires.json", json_encode($data));
  ?>





  <div class="header" style="background-image: url('img/index/reservation.jpg');background-position: center;background-size: cover;opacity: 0.8;">
    <h1>Quai Antique</h1>
    <p> <b>Arnaud Michant - Chambéry</b></p>
  </div>
  <div class="navbar">
    <a href="index.php" class="active">Accueil</a>
    <a href="la carte.php">La carte</a>
    <a href="les menus.php">Les Menus</a>
    <a href="reservation.php">Réserver</a>

    <!-- gestion de la connexion -->
    <?php include 'php/session.php'; ?>

  </div>




  <div class="row">
    <div class="side">

      <h2 style="text-align: center;">Nos Plats "signature"</h2>
      <?php include 'php/slider.php'; ?>

      <?php include 'php/insideRestaurant.php'; ?>
    </div>
    <div class="main">


      <h2>Réservation</h2>

      <div class="fakeimg">

        <p>Merci d'avance de préciser en commentaire le nombre d'enfants présent à table (si il y en a).</p>
        <p>Pour tout retard de plus de 20 mn votre table sera donnée à d'autre client !!!</p>
        <br>
        <div class="container">

          <form class="contact-form">
            <label for="">Date souhaitée</label>
            <input type="date" name="dateSouhaitee" id="dateSouhaitee" required placeholder="dd-mm-yyyy" value="" max="2030-12-31" />
            <script>
              const dateDuJour = new Date();
              const dateMin = dateDuJour.toISOString().split('T')[0];
              document.getElementById('dateSouhaitee').setAttribute('min', dateMin);
            </script>




            <br>
            <input type="submit" id='submit' value='voir les disponibiltés' onclick="createButtons()">
            <br>
            <p id="titreMidi"></p>
            <p id="fermeMidi"></p>
            <div id="midi"></div>

            <br>

            <p id="titreSoir"></p>
            <p id="fermeSoir"></p>
            <div id="soir"></div>

            <br>

            <label for="">Heure choisie :</label>
            <input type="text" id="heureChoisie" name="heureChoisie">



            <label for="nbreCouverts">Nbre de couverts :</label>
            <select name="nbreCouverts" id="nbreCouverts">
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="plusieurs">Plus de 6 couverts</option>
            </select>

            <label for="civilité">Civilité :</label>
            <select name="civilité" id="civilité">
              <option value="2">Mme</option>
              <option value="3">Mlle</option>
              <option value="2">Mr</option>
            </select>




            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="tel">Téléphone :</label>
            <input type="tel" id="tel" name="tel" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="couverts">Nombre de couverts :</label>
            <input type="number" id="couverts" name="couverts" required>

            <label for="story">Commentaires / Allergies:</label>

            <textarea id="Commentaires" name="Commentaires" rows="5" cols="33">
Précisez les éventuelles allergies et si des enfants seront présents...
</textarea>



            <input type="submit" id='submit' value='Envoyer'>
          </form>
        </div>

      </div>







    </div>
  </div>

  <?php include 'php/footer.php'; ?>
  <script src="js/slider.js"></script>
  <script src="js/reservation.js"></script>

</body>

</html>