<!DOCTYPE html>
<html lang="en">

<head>
  <title>Quai Antique : Arnaud Michant - Chambéry</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">




  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/table.css">


</head>

<body>


  <div class="header">
    <h1>Quai Antique</h1>
    <p> <b>Arnaud Michant - Chambéry</b></p>
  </div>
  <div class="navbar">
    <a href="../index.php" class="active">Accueil</a>
    <a href="../la carte.php">La carte</a>
    <a href="../les menus.php">Les Menus</a>
    <a href="../reservation.php">Réserver</a>

    <!-- gestion de la connexion -->
    <?php include '../php/session.php'; ?>

  </div>



  <div class="row">
    <div class="side">
   
    <?php include 'php/side.php'; ?>

    </div>

    <div class="main">
      <h2>Administration : liste des horaires d'ouverture</h2>






      <div class="fakeimg"></div>
      
      <form action="valideFormAddHoraires.php" method="post">
		<label for="jour">Jour :</label>
		<input type="text" name="jour" id="jour" required><br><br>

		<label for="service">Service :</label>
		<input type="text" name="service" id="service" required><br><br>

		<label for="heureDebut">Heure de début :</label>
		<input type="time" name="heureDebut" id="heureDebut" required><br><br>

		<label for="heureFin">Heure de fin :</label>
		<input type="time" name="heureFin" id="heureFin" required><br><br>

		<input type="submit" value="Ajouter">
	</form>
















    </div>
  </div>

  <?php include '../php/footer.php'; ?>
  <script src="../js/slider.js"></script>

</body>

</html>