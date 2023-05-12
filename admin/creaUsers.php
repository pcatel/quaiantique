<?php
$servername = "91.216.107.182";
$username = "pasca8966";
$password = "gold1955";
$dbname = "pasca8966_4gp9c9";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Utilisateurs (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nom  VARCHAR(255) NOT NULL,
prenom  VARCHAR(255) NOT NULL,
email VARCHAR(100) NOT NULL,
mot_de_passe VARCHAR(100) NOT NULL,
typeUser  VARCHAR(20) NOT NULL,
nbConvives INT NOT NULL,
allergies  VARCHAR(255) NOT NULL,



reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>