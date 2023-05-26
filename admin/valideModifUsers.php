<?php include 'connect.php';?>
<?php




// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérification des erreurs de connexion
    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }





    // Vérifier si la case "modifier" a été cochée pour au moins un enregistrement
    if (isset($_POST["modifier"]) && is_array($_POST["modifier"])) {
        // Récupérer les valeurs des champs modifiés pour chaque enregistrement
        $ids = $_POST["id"];
        $noms = $_POST["nom"];
        $prenoms = $_POST["prenom"];
        $emails = $_POST["email"];
        $motsDePasse = $_POST["mot_de_passe"];
        $typesUsers = $_POST["typeUser"];
        $nbConvives = $_POST["nbConvives"];
        $allergies = $_POST["allergies"];

        $modificationEffectuee = false; // Variable de drapeau

        // Parcourir les enregistrements modifiés
        foreach ($_POST["modifier"] as $index => $valeur) {
            // Vérifier si la case "modifier" a été cochée pour cet enregistrement
            if (!empty($valeur)) {
                // Récupérer les valeurs modifiées pour cet enregistrement
                $id = $ids[$index];
                $nom = $noms[$index];
                $prenom = $prenoms[$index];
                $email = $emails[$index];
                $motDePasse = $motsDePasse[$index];
                $typeUser = $typesUsers[$index];
                $nbConvive = $nbConvives[$index];
                $allergie = $allergies[$index];

                // Vérifier si au moins un champ a été modifié
                if (!empty($nom) || !empty($prenom) || !empty($email) || !empty($motDePasse) || !empty($typeUser) || !empty($nbConvive) || !empty($allergie)) {
                    // Effectuer la mise à jour dans la base de données
                    $sql = "UPDATE Utilisateurs SET nom='$nom', prenom='$prenom', email='$email', mot_de_passe='$motDePasse', typeUser='$typeUser', nbConvives='$nbConvive', allergies='$allergie' WHERE id='$id'";

                    // Exécuter la requête
                    if ($conn->query($sql) === TRUE) {
                        $modificationEffectuee = true; // Modification effectuée pour au moins un enregistrement
                        echo "Enregistrement avec ID $id modifié avec succès.<br>";
                    } else {
                        echo "Erreur lors de la modification de l'enregistrement avec ID $id : " . $conn->error . "<br>";
                    }
                }
            }
        }

        // Vérifier si une modification a été effectuée
        if ($modificationEffectuee) {
            //echo "Les modifications ont été enregistrées avec succès.";
        } else {
           // echo "Aucune modification n'a été effectuée.";
        }
    } else {
        echo "Aucun enregistrement sélectionné pour modification.";
    }
} else {
    echo "Le formulaire n'a pas été soumis.";
}
?>
<meta http-equiv="refresh" content="2; url=<?php echo $_SERVER["HTTP_REFERER"]; ?>" />

