<!DOCTYPE html>
<html lang="en">

<head>
  <title>Quai Antique : Arnaud Michant - Chambéry</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <!-- <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->



  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/slider.css">
  <link rel="stylesheet" href="css/reservation.css">


</head>

<body>
  <?php //include 'php/header.php'; 
  ?>
  <?php //include 'php/navbar.php'; 
  ?>


  <div class="header" style="background-image: url('img/index/reservation.jpg');background-position: center;background-size: cover;opacity: 0.8;">
    <h1>Quai Antique</h1>
    <p> <b>Arnaud Michant - Chambéry</b></p>
  </div>
  <div class="navbar">
    <a href="index.php">Accueil</a>
    <a href="la carte.php">La carte</a>
    <a href="les menus.php">Les Menus</a>
    <a href="reservation.php" class="active">Réserver</a>
    <a href="login.php" class="right">Me connecter</a>
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


        <form class="contact-form">
          <label for="">Date souhaitée</label>
          <input type="date" name="bday" required placeholder="dd-mm-yyyy" value=""
        min="1997-01-01" max="2030-12-31" />


          <label for="nbreCouverts">Nbre de couverts :</label>
          <select name="languages" id="lang">
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="plusieurs">Plus de 6 couverts</option>
          </select>

          <label for="civilité">Civilité :</label>
          <select name="languages" id="lang">
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

          <textarea id="story" name="story" rows="5" cols="33">
Précisez les éventuels allergies et si des enfants seront présents...
</textarea>


          <button type="submit">Envoyer</button>
        </form>
























      </div>







    </div>
  </div>

  <?php include 'php/footer.php'; ?>
  <script src="js/slider.js"></script>

</body>

</html>