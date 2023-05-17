<?php include 'connect.php'; ?>    
<?php
// se connecter à la base de données




$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// récupérer les données de formulaire soumises
$nom = $_POST["nom"];
$description = $_POST["description"];
$categorie = $_POST["categorie"];
$prix = $_POST["prix"];



// insérer un nouvel enregistrement dans la table "Menus"
$sql = "INSERT INTO Plats (nom, description, categorie, prix) VALUES ('$nom', '$description', '$categorie','$prix')";

if (mysqli_query($conn, $sql)) {
	//echo "Nouveau plat ajouté avec succès";
} else {
	echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}

// fermer la connexion à la base de données
mysqli_close($conn);
?>
<meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
