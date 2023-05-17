<?php include 'connect.php'; ?>    
<?php


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Menus (nom, description, formule, periode, composition, prix)
VALUES 
('Menu du marché', 'C est le menu traditionnel que l on trouve dans la plupart des restaurants. Il propose une liste de plats individuels avec leur prix respectif. Les clients peuvent choisir librement ce qu ils souhaitent commander.','Déjeuner','le midi du lundi au vendredi','Entrée + Plat',16.00),
('Menu du marché', 'C est le menu traditionnel que l on trouve dans la plupart des restaurants. Il propose une liste de plats individuels avec leur prix respectif. Les clients peuvent choisir librement ce qu ils souhaitent commander.','Diner','du lundi au samedi midi','Entrée + Plat + dessert',20.00),
('Menu découverte', 'C est le menu traditionnel que l on trouve dans la plupart des restaurants. Il propose une liste de plats individuels avec leur prix respectif. Les clients peuvent choisir librement ce qu ils souhaitent commander.','Déjeuner','le midi du lundi au vendredi','Entrée + Plat',16.00),
('Menu découverte', 'C est le menu traditionnel que l on trouve dans la plupart des restaurants. Il propose une liste de plats individuels avec leur prix respectif. Les clients peuvent choisir librement ce qu ils souhaitent commander.','Diner','du lundi au samedi midi','Entrée + Plat + dessert',20.00),
('Menu prestige', 'C est le menu traditionnel que l on trouve dans la plupart des restaurants. Il propose une liste de plats individuels avec leur prix respectif. Les clients peuvent choisir librement ce qu ils souhaitent commander.','Déjeuner','le midi du lundi au vendredi','Entrée + Plat',16.00),
('Menu prestige', 'C est le menu traditionnel que l on trouve dans la plupart des restaurants. Il propose une liste de plats individuels avec leur prix respectif. Les clients peuvent choisir librement ce qu ils souhaitent commander.','Diner','du lundi au samedi midi','Entrée + Plat + dessert',20.00)";



if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>