
<?php include 'connect.php'; ?>
<?php

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nom, description, formule, periode, composition, prix FROM Menus ORDER BY nom, formule ASC";
$result = $conn->query($sql);

$currentMenu = null; // Variable pour stocker le menu actuel
if ($result->num_rows > 0) {
    // Tableau associatif pour stocker les formules du menu
    $menuFormules = array();

    // Parcourir les résultats et regrouper les formules par menu
    while ($row = $result->fetch_assoc()) {
        $nom = $row["nom"];
        $description = $row["description"];
        $formule = $row["formule"];
        $periode = $row["periode"];
        $composition = $row["composition"];
        $prix = $row["prix"];

        // Vérifier si le nom du menu existe dans le tableau des formules
        if (!isset($menuFormules[$nom])) {
            $menuFormules[$nom] = array(
                "description" => $description,
                "formules" => array()
            );
        }

        // Ajouter les informations de la formule au menu correspondant
        $menuFormules[$nom]["formules"][] = array(
            "formule" => $formule,
            "periode" => $periode,
            "composition" => $composition,
            "prix" => $prix
        );
    }


    // Parcourir le tableau des formules et afficher le nom des menus et leurs descriptions
    echo '<div class="gridMenu">';
    foreach ($menuFormules as $nomMenu => $menu) {

        echo '  <div class="gridColumn">';

        echo '<p class="nomMenu">' . $nomMenu . '</p>';
        echo '<p class="descriptionMenu">' . $menu["description"] . '</p>';
        echo '</div>';
    }
    echo '</div>';
    echo '<br><br>';

 // Parcourir le tableau des menus et afficher le nom des formules et leurs détails

 //echo '<div class="gridMenu">';
 
  
  echo '<div class="gridMenu">';
  foreach ($menuFormules as $nomMenu => $menu) {
    
    
    foreach ($menu["formules"] as $index => $formule) {
       
        echo '<div class="gridColumn">';

        echo '<p class="nomFormule"> Formule ' . $formule["formule"] . '</p>';
        echo '<p class="joursService"">' . $formule["periode"] . '</p>';
        echo '<p>' . $formule["composition"] . '</p>';
        echo '<p class="prixFormule"">' . $formule["prix"] . '€</p>';
        
      echo '</div>';     
        
    }
    
   
  
 
}
  
 echo '</div>';

} else {
    echo "Aucun résultat trouvé.";
}
$conn->close();

?>
