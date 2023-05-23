<?php include 'connect.php'; ?>    
<?php


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Galerie (titre, nomFichier, aMasquer)
VALUES 
('Titre 01', '01.jpg',0),
('Titre 02', '02.jpg',0),
('Titre 03', '03.jpg',0),
('Titre 04', '04.jpg',0),
('Titre 05', '0(.jpg',0),
('Titre 06', '06.jpg',0)";












if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>