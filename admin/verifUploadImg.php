<?php include 'connect.php'; ?>  


<?php
if (isset($_POST['submit'])) {
	$target_dir = "../img/slider/";
	$target_file = $target_dir . basename($_FILES["fichier"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
	// Vérifier si le fichier est une image réelle ou une fausse image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fichier"]["tmp_name"]);
		if($check !== false) {
			$uploadOk = 1;
		} else {
			echo "Erreur : le fichier n'est pas une image.";
			$uploadOk = 0;
		}
	}
	
	// Vérifier si le fichier existe déjà
	if (file_exists($target_file)) {
		echo "Erreur : le fichier existe déjà.";
		$uploadOk = 0;
	}
	
	// Vérifier la taille du fichier
	if ($_FILES["fichier"]["size"] > 5000000) {
		echo "Erreur : le fichier est trop volumineux.";
		$uploadOk = 0;
	}
	
	// Autoriser certains formats de fichiers
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "Erreur : seul les fichiers JPG, JPEG, PNG & GIF sont autorisés.";
		$uploadOk = 0;
	}
	
	// Vérifier si $uploadOk est mis à 0 par une erreur
	if ($uploadOk == 0) {
		echo "Erreur : le fichier n'a pas été téléchargé.";
	// Si tout va bien, essayez de télécharger le fichier
	} else {
		if (move_uploaded_file($_FILES["fichier"]["tmp_name"], $target_file)) {
			echo "Le fichier ". htmlspecialchars( basename( $_FILES["fichier"]["name"])). " a été téléchargé.";
		} else {
			echo "Erreur : il y a eu un problème lors du téléchargement du fichier.";
		}
	}
}


  

// se connecter à la base de données



$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// récupérer les données de formulaire soumises
$titre = $_POST["titre"];
$fichier = htmlspecialchars( basename( $_FILES["fichier"]["name"]));
$aMasquer = $_POST["aMasquer"];


// insérer un nouvel enregistrement dans la table "Horaires"
$sql = "INSERT INTO Galerie (titre, nomFichier, aMasquer) VALUES ('$titre', '$fichier', '$aMasquer')";

if (mysqli_query($conn, $sql)) {
	echo "Nouvelle photo ajouté avec succès";
} else {
	echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}

// fermer la connexion à la base de données
mysqli_close($conn);
?>

<meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
