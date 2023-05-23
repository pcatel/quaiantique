
    <?php include 'connect.php'; ?>
        <?php
 echo '<div class="slide-container">';
        // Connexion à la base de données
        $connexion = new mysqli($servername, $username, $password, $dbname);


        // Vérifier la connexion
        if ($connexion->connect_error) {
            die('Erreur de connexion à la base de données : ' . $connexion->connect_error);
        }

        // Récupérer les données de la table Galerie
        $requete = $connexion->query('SELECT * FROM Galerie');

        // Vérifier si des enregistrements ont été trouvés
        if ($requete->num_rows > 0) {
            $index = 1;

            // Parcourir les enregistrements et afficher chaque élément de la galerie
            while ($row = $requete->fetch_assoc()) {
                $titre = $row['titre'];
                $nomFichier = $row['nomFichier'];
                //$extension = pathinfo($nomFichier, PATHINFO_EXTENSION);
                //$cheminImage = '../img/slider/' . $nomFichier ;
                $cheminImage = 'http://www.pascalcatel.com/maquettes/quaiantique/img/slider/' . $nomFichier;
               
                echo '<div class="custom-slider fade">';
                echo '<div class="slide-index">' . $index . ' / ' . $requete->num_rows . '</div>';
                echo '<img class="slide-img" src="' . $cheminImage . '" title="' . $titre . '">';
                echo '<div class="slide-text">' . $titre . '</div>';
                echo '</div>';

                $index++;
            }
        } else {
            echo 'Aucun élément trouvé dans la galerie.';
        }

        


        echo '<a class="prev" onclick="plusSlides(-1)"><</a>';
        echo '<a class="next" onclick="plusSlides(1)">></a>';
        echo '</div>';
        echo '<br>';
        echo '<div class="slide-dot">';

        // Afficher les points de navigation
        for ($i = 1; $i <= $requete->num_rows; $i++) {
            echo '<span class="dot" onclick="currentSlide(' . $i . ')"></span>';
        }

        echo ' </div>';

// Fermer la connexion à la base de données
        $requete->close();
        $connexion->close();


        ?>
 