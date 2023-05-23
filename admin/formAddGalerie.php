<!DOCTYPE html>
<html lang="en">

<head>
  <title>Quai Antique : Arnaud Michant - Chambéry</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">




  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/table.css">
  <link rel="stylesheet" href="../css/login.css">



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
      <h2>Administration : Ajouter une image à la galerie</h2>






      <div class="fakeimg">
      <div class="container">
        <form method="POST"  action="verifUploadImg.php" class="contact-form" enctype="multipart/form-data">
          <label for="">titre de la photo : </label>
          <input type="text" name = "titre" id="titre">
        <label for="fichier">Sélectionnez une image à télécharger :</label>
          <input type="file" name="fichier" id="fichier"><br>
          
      <label for="">à masquer</label>
<input type="checkbox" id="aMasquer" name="aMasquer">
<br><br>

          <input type="submit" name="submit" value="Envoyer">
        </form>


        </div>


      </div>


    </div>
  </div>

  <?php include '../php/footer.php'; ?>
  

</body>

</html>