<?php include 'connect.php'; ?>    

<?php


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Utilisateurs (nom, prenom, email, mot_de_passe, typeUser, nbConvives, allergies)
VALUES ('CATEL', 'Pascal', 'pcatel@pascalcatel.com', 'pcatel', 'admin', 5, 'sans'),
('QUAI', 'antique', 'quai@antique.com', 'quai','client', 2, 'gluten et chocolat'),
('CATEL', 'Brigitte', 'bcatel@pascalcatel.com', 'brigitte','client', 2, 'gluten, soja, échalote')";




if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>