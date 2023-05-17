<?php include 'connect.php'; ?>    
<?php
// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connexion à la base de données

    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Vérification des erreurs de connexion
    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }
    
    // Récupération des données du formulaire
    $ids = $_POST['id'];
    $noms = $_POST['nom'];
    $descriptions = $_POST['description'];
    $categories = $_POST['categorie'];
    $prixs = $_POST['prix'];
    $modificateurs = isset($_POST['modifier']) ? $_POST['modifier'] : array();
    
    // Parcours des données pour mise à jour
    for ($i = 0; $i < count($ids); $i++) {
        $id = $ids[$i];
        $nom = $noms[$i];
        $description = $descriptions[$i];
        $categorie = $categories[$i];
        $prix = $prixs[$i];

        $modifier = isset($modificateurs[$i]) ? true : false;
        
        // Mise à jour si le checkbox "modifier" est coché
        if ($modifier) {
            // Préparation et exécution de la requête SQL
            $sql = "UPDATE Plats SET nom = '$nom', description = '$description', categorie = '$categorie', prix = '$prix' WHERE id = $id";
            if ($conn->query($sql) !== TRUE) {
                echo "Erreur lors de la mise à jour de la base de données : " . $conn->error;
            }
        }
    }
    
    // Fermeture de la connexion à la base de données
    $conn->close();
    
}

?>
<meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />