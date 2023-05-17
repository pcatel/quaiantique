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
      <h2>Administration : liste des utlisateurs</h2>


      <?php
// Create connection
$servername = "91.216.107.182";
$username = "pasca8966";
$password = "gold1955";
$dbname = "pasca8966_4gp9c9";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if checkbox is checked for each record and delete corresponding record
    foreach ($_POST["delete"] as $id => $value) {
        if ($value == "on") {
            $sql = "DELETE FROM Utilisateurs WHERE id = $id";
            if ($conn->query($sql) === TRUE) {
                echo "Suppression réalisée avec succès";
            } else {
                echo "Erreur de suppression: " . $conn->error;
            }
        }
    }
}
$sql = "SELECT id, nom, prenom, email, mot_de_passe, typeUser, nbConvives, allergies FROM Utilisateurs";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="post">';
    echo '<table class="styled-table">
        <thead class="thead">
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Mot de passe</th>
                <th>Type User</th>
                <th>nbre convives</th>
                <th>Allergies</th>

                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>';
    while($row = $result->fetch_assoc()) {
        echo '<tr>
            <td>'.$row["id"].'</td>
            <td>'.$row["nom"].'</td>
            <td>'.$row["prenom"].'</td>
            <td>'.$row["email"].'</td>
            <td>'.$row["mot_de_passe"].'</td>
            <td>'.$row["typeUser"].'</td>
            <td>'.$row["nbConvives"].'</td>
            <td>'.$row["allergies"].'</td>


            <td style="text-align: center;"><input type="checkbox" name="delete['.$row["id"].']"></td>
        </tr>';
    }
    echo '</tbody></table>';
    echo '<input type="submit" value="Supprimer sélection">';
    echo '</form>';
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