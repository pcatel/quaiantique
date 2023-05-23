
<?php include 'connect.php'; ?>
<?php

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nom, description, prix, categorie FROM Plats";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $categories = array();

    // Regrouper les plats par catégorie
    while ($row = $result->fetch_assoc()) {
        $categorie = $row["categorie"];
        $categories[$categorie][] = $row;
    }

    // Parcourir les catégories et afficher les tables
    foreach ($categories as $categorie => $plats) {

        switch ($categorie) {
            case 'entrée':
                echo '<h2>Les entrées</h2>';
                break;
            case 'viande':
                echo '<h2>Les viandes</h2>';
                break;
            case 'poisson':
                echo '<h2>Les poissons</h2>';
                break;
            case 'dessert':
                echo '<h2>Les desserts</h2>';
                break;
        }




        echo '<table class="styled-table">';
        echo '<tbody>';

        // Afficher les plats de la catégorie actuelle
        foreach ($plats as $plat) {
            echo '<tr>';
            echo '<td>' . $plat["nom"] . '</td>';
            echo '<td>' . $plat["description"] . '</td>';
            echo '<td>' . $plat["prix"] . '€</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
        echo '<br>';
    }
} else {
    echo "Aucun plat trouvé.";
}


$conn->close();

?>
