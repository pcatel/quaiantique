<!DOCTYPE html>
<html lang="fr">
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
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nom, description, formule, periode, composition, prix FROM Menus  ORDER BY nom";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
   echo'<table class="styled-table">
   <thead class="thead">
   <tr>
     <th>Id</th>
     <th>Nom</th>
     <th>Description</th>
     <th>Formule</th>
     <th>Période</th>
     <th>Composition</th>
     <th>Prix</th>
     

   </tr>
   </thead>
   <tbody>';
    while($row = $result->fetch_assoc()) {
      echo'<tr>
      <td>'.$row["id"].'</td>
      <td>'.$row["nom"].'</td>
      <td>'.$row["description"].'</td>
      <td>'.$row["formule"].'</td>
      <td>'.$row["periode"].'</td>
      <td>'.$row["composition"].'</td>
      <td>'.$row["prix"].'</td>
    
      </tr>';
    }

    echo"</tbody></table>";
} else {
    echo "0 results";
}

$conn->close();
?>


    </div>
  </div>

  <?php include '../php/footer.php'; ?>
 

</body>

</html>