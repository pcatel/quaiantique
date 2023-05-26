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
  <link rel="stylesheet" href="css/table.css">
  <link rel="stylesheet" href="css/login.css">

</head>

<body>


  <div class="header" style="background-image: url('img/index/lacarte.jpg');background-position: center;background-size: cover;opacity: 0.8;">



    <h1>Quai Antique</h1>
    <p> <b>Arnaud Michant - Chambéry</b></p>
  </div>

  <div class="navbar">
    <a href="index.php">Accueil</a>
    <a href="la carte.php" class="active">La carte</a>
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
      <div class="container">
        <div class="fakeimg">
          <?php include 'php/carte.php'; ?>
        </div>
      </div>



    </div>
  </div>

  <?php include 'php/footer.php'; ?>
  <script src="js/slider.js"></script>

</body>

</html>