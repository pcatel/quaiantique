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


</head>

<body>
<?php //include 'php/header.php'; ?>
  <?php //include 'php/navbar.php'; ?>
 
  
  <div class="header" style="background-image: url('img/index/horaire ouverture.jpg');background-position: center;background-size: cover;opacity: 0.8;color: 'black';">
  <h1>Quai Antique</h1>
  <p> <b>Arnaud Michant - Chambéry</b></p>
  </div>
  <div class="navbar">
  <a href="index.php">Accueil</a>
  <a href="la carte.php">La carte</a>
  <a href="les menus.php">Les Menus</a>
  <a href="horaires.php" class="active">Les Horaires d'ouverture</a>
  <a href="reservation.php">Réserver</a>
  <a href="login.php" class="right">Me connecter</a>
</div>




  <div class="row">
  <div class="side">
      <h2 style="text-align: center;">Nos Plats "signature"</h2>
      <?php include 'php/slider.php'; ?>

      <?php include 'php/insideRestaurant.php'; ?>
    </div>
    <div class="main">
      
      <h2>Nos horaires d'ouverture</h2>
      
      <div class="fakeimg">Horaires d'ouverture</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    
    
    
    
    
    
    
    
    
    </div>
  </div>

  <?php include 'php/footer.php'; ?>
  <script src="js/slider.js"></script>

</body>

</html>