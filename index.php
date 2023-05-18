<!DOCTYPE html>
<html lang="en">

<head>
  <title>Quai Antique : Arnaud Michant - Chambéry</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">




  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/slider.css">


</head>

<body>


  <div class="header">
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
      <h2><a href="la carte.php">La carte</a></h2>

      




      <div class="fakeimg" style="height:350px;"><img class="slide-img" src="img/index/lacarte.jpg"></div>
      
      <p>Bienvenue dans notre restaurant, un lieu où les saveurs délicieuses et l'ambiance chaleureuse se rencontrent pour créer une expérience culinaire inoubliable.</p>

      <p>Notre restaurant offre un cadre élégant et contemporain, idéal pour les dîners romantiques, les réunions d'affaires ou les occasions spéciales en famille et entre amis. Dès votre arrivée, vous serez accueilli par notre personnel amical et professionnel, dédié à vous offrir un service exceptionnel.</p>
      
      <p>Notre menu met en valeur une cuisine raffinée, préparée avec des ingrédients frais et de qualité</p>
      <br>
      <h2><a href="les menus.php">Les Menus</a></h2>

      <div class="fakeimg" style="height:350px;"><img class="slide-img" src="img/index/menu.jpg"></div>
      
      <p>Découvrez nos délicieux menus, conçus pour ravir vos papilles et satisfaire vos envies gastronomiques les plus exigeantes.</p>

      <h2><a href="reservation.php">Réserver</a></h2>

      <div class="fakeimg" style="height:350px;"><img class="slide-img" src="img/index/reservation.jpg"></div>
      
      <p>Réserver en ligne dans notre restaurant est simple et pratique.</p>

      <p>Sélectionnez la date et l'heure souhaitées pour votre réservation. Assurez-vous de vérifier la disponibilité en temps réel afin de choisir une plage horaire qui vous convient.</p>

      <p>Indiquez le nombre de personnes qui vous accompagneront. Si vous avez des demandes particulières, telles que des allergies alimentaires ou des préférences spéciales, n'hésitez pas à les mentionner dans la section des commentaires.</p>

      <p>Remplissez vos coordonnées, notamment votre nom, votre numéro de téléphone et votre adresse e-mail. Cela nous permettra de vous contacter facilement pour confirmer votre réservation.</p>
      <br>
      








    </div>
  </div>

  <?php include 'php/footer.php'; ?>
  <script src="js/slider.js"></script>

</body>

</html>