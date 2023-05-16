<?php
// se connecter à la base de données

$servername = "91.216.107.182";
$username = "pasca8966";
$password = "gold1955";
$dbname = "pasca8966_4gp9c9";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// récupérer les données de formulaire soumises
$jour = $_POST["jour"];
$service = $_POST["service"];
$heureDebut = $_POST["heureDebut"];
$heureFin = $_POST["heureFin"];

// insérer un nouvel enregistrement dans la table "Horaires"
$sql = "INSERT INTO Horaires (jour, service, heureDebut, heureFin) VALUES ('$jour', '$service', '$heureDebut', '$heureFin')";

if (mysqli_query($conn, $sql)) {
	echo "Nouvel horaire ajouté avec succès";
} else {
	echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}

// fermer la connexion à la base de données
mysqli_close($conn);
?>
