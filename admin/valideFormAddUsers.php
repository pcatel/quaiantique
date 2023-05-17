<?php include 'connect.php'; ?>    
<?php
// se connecter à la base de données



$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// récupérer les données de formulaire soumises
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$mot_de_passe = $_POST["mot_de_passe"];
$typeUser = $_POST["typeUser"];
$nbConvives = $_POST["nbConvives"];
$allergies = $_POST["allergies"];






// insérer un nouvel enregistrement dans la table "Horaires"
$sql = "SELECT id, nom, prenom, email, mot_de_passe, typeUser, nbConvives, allergies FROM Utilisateurs";
$sql = "INSERT INTO Utilisateurs (nom, prenom, email, mot_de_passe, typeUser, nbConvives, allergies) VALUES ('$nom', '$prenom', '$email', '$mot_de_passse', '$typeUser', '$nbConvives', '$allergies')";

if (mysqli_query($conn, $sql)) {
	echo "Nouvel utlisateur ajouté avec succès";
} else {
	echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}

// fermer la connexion à la base de données
mysqli_close($conn);
?>
<meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
