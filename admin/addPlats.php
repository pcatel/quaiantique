<?php include 'connect.php'; ?>    
<?php


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Plats (nom, description, prix, categorie)
VALUES ('Soupe du jour', 'une soupe maison préparée avec des légumes frais de saison', 12.00, 'entrée'),
('laitue romaine croquante', 'poulet grillé, croûtons maison, parmesan et une vinaigrette Caesar classique',12.00, 'entrée'),
('Carpaccio de boeuf', 'fines tranches de boeuf marinées dans une huile d'olive citronnée, garnies de copeaux de parmesan et de roquette',12.00, 'entrée'),
('Filet mignon', 'une soupe maison préparée avec des légumes frais de saison',12.00, 'viande'),
('Côtelette d'agneau', 'une côtelette d agneau grillée à la perfection, accompagnée de purée de pommes de terre et de légumes verts sautés',12.00, 'viande'),
('Poulet rôti', 'un poulet entier cuit lentement au four, servi avec une sauce aux herbes et des pommes de terre rôties',12.00, 'viande'),
('Saumon grillé', 'un filet de saumon frais grillé, servi avec des asperges et une sauce béarnaise',12.00, 'poisson'),
('Filet de bar', 'un filet de bar grillé, accompagné d'un risotto crémeux aux champignons et d'une sauce au vin blanc',12.00, 'poisson'),
('Cabillaud poché', 'un filet de cabillaud poché, servi avec des légumes frais et une sauce hollandaise',12.00, 'poisson'),
('Crème brûlée', 'une crème vanille légère et crémeuse, recouverte avec une fine couche de sucre caramélisé',12.00, 'dessert'),
('Fondant au chocolat', 'un gâteau au chocolat chaud et fondant, servi avec une boule de glace à la vanille',12.00, 'dessert'),
('Tarte aux pommes', 'une tarte aux pommes maison, servie chaude avec de la crème fouettée et une boule de glace à la cannelle',12.00, 'dessert')";



if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>