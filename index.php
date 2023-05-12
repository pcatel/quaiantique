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
      <h2>La carte</h2>

    




      <div class="fakeimg" style="height:350px;"><img class="slide-img" src="img/index/lacarte.jpg"></div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>Les Menus</h2>

      <div class="fakeimg" style="height:350px;"><img class="slide-img" src="img/index/menu.jpg"></div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

      <h2>Réserver</h2>

      <div class="fakeimg" style="height:350px;"><img class="slide-img" src="img/index/reservation.jpg"></div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>Nos horaires d'ouverture</h2>

      <div class="fakeimg" style="height:350px;"><img class="slide-img" src="img/index/horaire ouverture.jpg"></div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>









    </div>
  </div>

  <?php include 'php/footer.php'; ?>
  <script src="js/slider.js"></script>

</body>

</html>