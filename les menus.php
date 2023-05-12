<!DOCTYPE html>
<html lang="en">

<head>
  <title>Quai Antique : Arnaud Michant - Chambéry</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">





  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/slider.css">
  <link rel="stylesheet" href="css/login.css">


</head>

<body>



  <div class="header" style="background-image: url('img/index/menu.jpg');background-position: center;background-size: cover;opacity: 0.8;">
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


      <h4>Arnaud Michant vous propose de découvrir dans son restaurant "LE QUAI ANTIQUE" 3 menus ...</h4>



      <div class="container">
        <div class="fakeimg">

          <!-- Affiche de la présentation des menus -->
          <div class="gridMenu">
            <div class="gridColumn">
              <p class="nomMenu">Menu du marché</p>
              <p class="descriptionMenu">C'est le menu traditionnel que l'on trouve dans la plupart des restaurants. Il propose une liste de plats individuels avec leur prix respectif. Les clients peuvent choisir librement ce qu'ils souhaitent commander.</p>
            </div>
            <div class="gridColumn">
              <p class="nomMenu">Menu découverte</p>
              <p class="descriptionMenu">C'est le menu traditionnel que l'on trouve dans la plupart des restaurants. Il propose une liste de plats individuels avec leur prix respectif. Les clients peuvent choisir librement ce qu'ils souhaitent commander.</p>
            </div>
            <div class="gridColumn">
              <p class="nomMenu">Menu prestige</p>
              <p class="descriptionMenu">Ce menu est une expérience culinaire en plusieurs plats, souvent proposée pour des occasions spéciales ou pour les personnes qui veulent découvrir une variété de plats dans un même repas. Il peut également être accompagné d'une sélection de vins pour une expérience gastronomique complète.</p>
            </div>
          </div>

<br>

          <!-- Affiche des menus -->

          <div class="gridMenu">
            <div class="gridColumn">
              <p class="nomFormule">Formule Diner</p>
              <p class="joursService">(du lundi au samedi midi)</p>
              <p>Entrée + Plat + dessert</p>
              <p class="prixFormule">20 €</p>

              <p class="nomFormule">Formule Déjeuner</p>
              <p class="joursService">(le midi du lundi au vendredi)</p>
              <p>Entrée + Plat</p>
              <p class="prixFormule">16 €</p>
            </div>
            <div class="gridColumn">

              <p class="nomFormule">Formule Diner</p>
              <p class="joursService">(du lundi au samedi midi)</p>
              <p>Entrée + Plat + dessert</p>
              <p class="prixFormule">20 €</p>



              <p class="nomFormule">Formule Déjeuner</p>
              <p class="joursService">(le midi du lundi au vendredi)</p>
              <p>Entrée + Plat</p>
              <p class="prixFormule">16 €</p>

            </div>
            <div class="gridColumn">

              <p class="nomFormule">Formule Diner</p>
              <p class="joursService">(du lundi au samedi midi)</p>
              <p>Entrée + Plat + dessert</p>
              <p class="prixFormule">20 €</p>

              <p class="nomFormule">Formule Déjeuner</p>
              <p class="joursService">(le midi du lundi au vendredi)</p>
              <p>Entrée + Plat</p>
              <p class="prixFormule">16 €</p>


            </div>


          </div>



        </div>


      </div>
    </div>

    <?php include 'php/footer.php'; ?>
    <script src="js/slider.js"></script>

</body>

</html>