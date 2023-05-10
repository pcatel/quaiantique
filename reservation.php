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


      <h2>Réservations</h2>

      <div class="fakeimg">

        <p>Merci d'avance de préciser en commentaire le nombre d'enfants présent à table (si il y en a).</p>
        <p>Pour tout retrad de plus de 20 mn votre table sera donnée à d'autre client !!!</p>
        <br>

        <form action="#">

          <label for=""><img src="img/icone/people-fill.svg"></label>
          <select name="languages" id="lang">
            <option value="2">2 couverts</option>
            <option value="3">3 couverts</option>
            <option value="4">4 couverts</option>
            <option value="5">5 couverts</option>
            <option value="6">6 couverts</option>
            <option value="plusieurs">Plus de 6 couverts</option>
          </select>
          <label for=""><img src="img/icone/calendar-date.svg"></label>
          <input type="date" name="bday" required pattern="\d{4}-\d{2}-\d{2}" />
        </form>








      </div>







    </div>
  </div>

  <?php include 'php/footer.php'; ?>
  <script src="js/slider.js"></script>

</body>

</html>