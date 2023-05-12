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
      <div class="container">
        <div class="fakeimg">
          <h2>Les Entrées</h2>

          <table class="styled-table">
            <tbody>
              <tr>
                <td>Soupe du jour</td>
                <td>une soupe maison préparée avec des légumes frais de saison</td>
                <td>12€</td>
              </tr>
              <tr>
                <td>Salade Caesar</td>
                <td>laitue romaine croquante, poulet grillé, croûtons maison, parmesan et une vinaigrette Caesar classique</td>
                <td>22€</td>
              </tr>
              <tr>
                <td>Carpaccio de boeuf</td>
                <td>fines tranches de boeuf marinées dans une huile d'olive citronnée, garnies de copeaux de parmesan et de roquette</td>
                <td>23€</td>
              </tr>
            </tbody>
          </table>
        </div>
        <br>

        <div class="fakeimg">
          <h2>Les Viandes</h2>


          <table class="styled-table">
            <tbody>
              <tr>
                <td>Filet mignon</td>
                <td>un steak tendre et juteux, servi avec des légumes grillés et des pommes de terre rôties</td>
                <td>12€</td>
              </tr>
              <tr>
                <td>Côtelette d'agneau</td>
                <td>une côtelette d'agneau grillée à la perfection, accompagnée de purée de pommes de terre et de légumes verts sautés</td>
                <td>22€</td>
              </tr>
              <tr>
                <td>Poulet rôti</td>
                <td>un poulet entier cuit lentement au four, servi avec une sauce aux herbes et des pommes de terre rôties</td>
                <td>23€</td>
              </tr>
            </tbody>
          </table>
        </div>
        <br>

        <div class="fakeimg">
          <h2>Les Poissons</h2>


          <table class="styled-table">
            <tbody>
              <tr>
                <td>Saumon grillé</td>
                <td>Filet de bar</td>
                <td>12€</td>
              </tr>
              <tr>
                <td>Cabillaud poché</td>
                <td>un filet de cabillaud poché, servi avec des légumes frais et une sauce hollandaise</td>
                <td>22€</td>
              </tr>
              <tr>
                <td>Filet de bar</td>
                <td>un filet de bar grillé, accompagné d'un risotto crémeux aux champignons et d'une sauce au vin blanc</td>
                <td>23€</td>
              </tr>
            </tbody>
          </table>
        </div>
        <br>

        <div class="fakeimg">
          <h2>Les Desserts</h2>


          <table class="styled-table">
            <tbody>
              <tr>
                <td>Crème brûlée</td>
                <td>une crème vanille légère et crémeuse, recouverte d'une fine couche de sucre caramélisé</td>
                <td>12€</td>
              </tr>
              <tr>
                <td>Fondant au chocolat</td>
                <td>un gâteau au chocolat chaud et fondant, servi avec une boule de glace à la vanille</td>
                <td>22€</td>
              </tr>
              <tr>
                <td>Tarte aux pommes</td>
                <td>une tarte aux pommes maison, servie chaude avec de la crème fouettée et une boule de glace à la cannelle</td>
                <td>23€</td>
              </tr>
            </tbody>
          </table>
        </div>
        <br>




      </div>



    </div>
  </div>

  <?php include 'php/footer.php'; ?>
  <script src="js/slider.js"></script>

</body>

</html>