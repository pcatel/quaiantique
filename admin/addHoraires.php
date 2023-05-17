
<?php include 'connect.php'; ?>    
<?php

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Horaires (jour, service, heureDebut, heureFin)
VALUES ('Lundi', 'midi','12:00', '14:00'),
('Lundi', 'soir','19:00', '22:00'),
('Mardi', 'midi','12:00', '14:00'),
('Mardi', 'soir', '19:00', '22:00'),
('Mercredi', 'midi', '00:00', '00:00'),
('Mercredi', 'soir', '00:00', '00:00'),
('Jeudi',  'midi','12:00', '14:00'),
('Jeudi',  'soir','19:00', '22:00'),
('Vendredi', 'midi','12:00', '14:00'),
('Vendredi', 'soir', '19:00', '22:00'),
('Samedi',  'midi','00:00', '00:00'),
('Samedi',  'soir','19:00', '23:00'),
('Dimanche', 'midi', '12:00', '14:00'),
('Dimanche', 'soir', '00:00', '00:00')";













if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>