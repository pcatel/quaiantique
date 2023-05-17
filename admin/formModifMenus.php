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
      <h2>Administration : liste des menus</h2>
      <div class="fakeimg"></div>
      <?php include 'connect.php'; ?>    
      <?php
      // Create connection



   


      // Connexion à la base de données


      $conn = new mysqli($servername, $username, $password, $dbname);

      // Vérification de la connexion
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // Requête SELECT pour récupérer les données

      $sql = "SELECT id, nom, description, formule, periode, composition, prix FROM Menus  ORDER BY nom";
      $result = $conn->query($sql);


      $result = $conn->query($sql);

      // Affichage du tableau avec inputs pré-remplis
      if ($result->num_rows > 0) {
        echo "<form method='POST' action='valideModifMenus.php'>";
        echo '<table class="styled-table">
          <thead class="thead">
          <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Formule</th>
            <th>Période</th>
            <th>Composition</th>
            <th>Prix</th>
            <th>Modifier</th>

              </tr>
              </thead>
              <tbody>';


        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td><input type='text' name='id[]' value='" . $row["id"] . "'></td>";
          echo "<td><input type='text' name='nom[]' value='" . $row["nom"] . "'></td>";
          echo "<td><input type='text' name='description[]' value='" . $row["description"] . "'></td>";
          echo "<td><input type='text' name='formule[]' value='" . $row["formule"] . "'></td>";
          echo "<td><input type='text' name='periode[]' value='" . $row["periode"] . "'></td>";
          echo "<td><input type='text' name='composition[]' value='" . $row["composition"] . "'></td>";
          echo "<td><input type='text' name='prix[]' value='" . $row["prix"] . "'></td>";
          echo "<td><input type='checkbox' name='modifier[]'></td>";
          echo "</tr>";
        }
        echo "</tbody></table>";
        echo "<input type='submit' value='Valider'>";
        echo "</form>";
      } else {
        echo "0 résultats";
      };

      // Fermeture de la connexion
      $conn->close();

      ?>
     
    </div>
  </div>

  <?php include '../php/footer.php'; ?>


</body>

</html>