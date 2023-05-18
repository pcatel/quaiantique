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
    $prenoms = $_POST['prenom'];
    $emails = $_POST['email'];
    $mot_de_passes = $_POST['mot_de_passe'];
    $typeUsers = $_POST['typeUser'];
    $nbConvivess = $_POST['nbConvives'];
    $allergiess = $_POST['allergies'];
    $modificateurs = isset($_POST['modifier']) ? $_POST['modifier'] : array();





    
    // Parcours des données pour mise à jour
    for ($i = 0; $i < count($ids); $i++) {
        $id = $ids[$i];
        $nom = $noms[$i];
        $prenom = $prenoms[$i];
        $email = $emails[$i];
        $mot_de_passe = $mot_de_passes[$i];
        $typeUser = $typeUsers[$i];
        $nbConvives = $nbConvives[$i];
        $allergies = $allergiess[$i];
        $modifier = isset($modificateurs[$i]) ? true : false;
        
        // Mise à jour si le checkbox "modifier" est coché
        if ($modifier) {
            // Préparation et exécution de la requête SQL
            $sql = "UPDATE Utilisateurs SET nom = '$nom', prenom = '$prenom', email = '$email', mot_de_passe = '$mot_de_passe' , typeUser = '$typeUser', nbConvives = '$nbConvives', allergies = '$allergies' WHERE id = $id";
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