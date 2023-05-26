<!DOCTYPE html>
<html lang="fr">

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
      <h2>Administration : liste des utilisateurs OK</h2>

      <?php
// Afficher le message de succès s'il est présent dans l'URL
//if (isset($_GET['message'])) {
  //  echo "<p>" . $_GET['message'] . "</p>";
//}
?>




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

      $sql = "SELECT id, nom, prenom, email, mot_de_passe, typeUser, nbConvives, allergies FROM Utilisateurs";
      $result = $conn->query($sql);


      $result = $conn->query($sql);

      // Affichage du tableau avec inputs pré-remplis
      if ($result->num_rows > 0) {
        echo "<form method='POST' action='valideModifUsers.php'>";
        echo '<table class="styled-table">
          <thead class="thead">
          <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Mot de passe</th>
            <th>Type utilisateur</th>
            <th>Nbre convives</th>
            <th>Allergies</th>
            <th>Modifier</th>

  </tr>
   </thead>
   <tbody>';

        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td><input type='text' name='id[]' value='" . $row["id"] . "'></td>";
          echo "<td><input type='text' name='nom[]' value='" . $row["nom"] . "'></td>";
          echo "<td><input type='text' name='prenom[]' value='" . $row["prenom"] . "'></td>";
          echo "<td><input type='text' name='email[]' value='" . $row["email"] . "'></td>";
          echo "<td><input type='text' name='mot_de_passe[]' value='" . $row["mot_de_passe"] . "'></td>";
          echo "<td><input type='text' name='typeUser[]' value='" . $row["typeUser"] . "'></td>";
          echo "<td><input type='text' name='nbConvives[]' value='" . $row["nbConvives"] . "'></td>";
          echo "<td><input type='text' name='allergies[]' value='" . $row["allergies"] . "'></td>";
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