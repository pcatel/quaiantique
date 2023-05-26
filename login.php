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
  <link rel="stylesheet" href="css/login.css">

</head>

<body>
  <?php //include 'php/header.php'; 
  ?>
  <?php //include 'php/navbar.php'; 
  ?>

  <div class="header">
    <h1>Quai Antique</h1>
    <p> <b>Arnaud Michant - Chambéry</b></p>
  </div>
  <div class="navbar">
    <a href="index.php">Accueil</a>
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

      <h2>Se connecter</h2>

      <div class="fakeimg">
      <div class="container">
        <form action="verifUsers.php" method="POST">
          <h1>Connexion</h1>

          <label><b>Email</b></label>
          <input type="text" placeholder="Entrer votre email" name="email" required>

          <label><b>Mot de passe</b></label>
          <input type="password" placeholder="Entrer votre mot de passe" name="password" required>

          <input type="submit" id='submit' value='Me connecter'>
          <?php
          if (isset($_GET['erreur'])) {
            $err = $_GET['erreur'];
            if ($err == 1 || $err == 2)
              echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
          }
          ?>
        </form>
        </div>

        

        <a href="creaCompte.php">Je n 'ai pas de compte</a>
        <br>

      </div>





    </div>
  </div>

  <?php include 'php/footer.php'; ?>
  <script src="js/slider.js"></script>

</body>

</html>