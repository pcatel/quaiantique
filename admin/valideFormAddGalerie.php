<?php include 'connect.php'; ?>    
<?php
// se connecter à la base de données



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
$sql = "INSERT INTO Horaires (jour, numJour, service, heureDebut, heureFin) VALUES ('$jour', '$numJour', '$service', '$heureDebut', '$heureFin')";

if (mysqli_query($conn, $sql)) {
	echo "Nouvel horaire ajouté avec succès";
} else {
	echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}

// fermer la connexion à la base de données
mysqli_close($conn);
?>
<meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
