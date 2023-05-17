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
    <a href="../index.php">Accueil</a>
    <a href="../la carte.php">La carte</a>
    <a href="../les menus.php">Les Menus</a>
    <a href="../reservation.php">Réserver</a>

    <!-- gestion de la connexion -->
    <?php include '../php/session.php'; ?>

  </div>



  <div class="row">
    <div class="side">
   
    <?php include 'side.php'; ?>

    </div>

    <div class="main">
      <h2>Administration : liste des plats</h2>






      <div class="fakeimg"></div>
      
      <form action="valideFormAddPlats.php" method="post">
		<label for="nom">Nom :</label>
		<input type="text" name="nom" id="nom" required><br><br>

		<label for="Description">Description :</label>
		<input type="text" name="description" id="description" required><br><br>

		<label for="categorie">Catégorie :</label>
		<input type="text" name="categorie" id="categorie" required><br><br>
    
    <label for="prix">Prix :</label>
		<input type="text" name="prix" id="prix" required><br><br>


		<input type="submit" value="Ajouter">
	</form>

    </div>
  </div>

  <?php include '../php/footer.php'; ?>
  

</body>

</html>