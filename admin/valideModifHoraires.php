<?php include 'connect.php'; ?>    
<?php
// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Vérification des erreurs de connexion
    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }
    
    // Récupération des données du formulaire
    $ids = $_POST['id'];
    $jours = $_POST['jour'];
    $numJours = $_POST['numJour'];
    $services = $_POST['service'];
    $heuresDebut = $_POST['heureDebut'];
    $heuresFin = $_POST['heureFin'];
    $modificateurs = isset($_POST['modifier']) ? $_POST['modifier'] : array();
    
    // Parcours des données pour mise à jour
    for ($i = 0; $i < count($ids); $i++) {
        $id = $ids[$i];
        $jour = $jours[$i];
        $numJour = $numJours[$i];
        $service = $services[$i];
        $heureDebut = $heuresDebut[$i];
        $heureFin = $heuresFin[$i];
        $modifier = isset($modificateurs[$i]) ? true : false;
        
        // Mise à jour si le checkbox "modifier" est coché
        if ($modifier) {
            // Préparation et exécution de la requête SQL
            $sql = "UPDATE Horaires SET jour = '$jour', numJour = '$numJour', service = '$service', heureDebut = '$heureDebut', heureFin = '$heureFin' WHERE id = $id";
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