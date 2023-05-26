<?php include 'connect.php'; ?>
    <?php



    echo '<div class="footer" style="text-align: center;">';
    echo '<h2>Nos Horaires d\'ouvertures</h2>';

    // Connexion à la base de données
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, jour, numJour, service, heureDebut, heureFin FROM Horaires ORDER BY numJour ASC, service ASC";
    $result = $conn->query($sql);

    $horairesData = array(); // Tableau pour stocker les données des horaires regroupées par numJour et service

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $jour = $row['jour'];
            $service = $row['service'];

            unset($row['jour'], $row['service']); // Supprime les champs numJour et service des données individuelles

            if (!isset($horairesData[$jour])) {
                $horairesData[$jour] = array(); // Crée une entrée pour le numJour s'il n'existe pas encore
            }

            if (!isset($horairesData[$jour][$service])) {
                $horairesData[$jour][$service] = array(); // Crée une entrée pour le service s'il n'existe pas encore
            }

            $horairesData[$jour][$service][] = $row; // Ajoute les données de chaque ligne dans le tableau correspondant au numJour et service
        }
    }
    // affichage des jours de la semaine
    echo ' <div class="gridHoraires">';
    foreach ($horairesData as $jour => $horairesByService) {
        echo '<div class="gridColumn"><p class="nomMenu">' . $jour . '</p>';
        //affichage des horaires du midi
        //echo '<div class="gridHoraires">';
        foreach ($horairesByService as $service => $horaires) {
           
           
           
           
           
            foreach ($horaires as $horairesRow) {

                if ($horairesRow['heureDebut'] ==' 00:00:00' || $horairesRow['heureFin'] =='00:00:00') {
                    echo 'Fermé </p>';
                }else {
                    echo '' . $horairesRow['heureDebut'] . ' - ' . $horairesRow['heureFin'] . '</p>';
                };






               // echo '' . $horairesRow['heureDebut'] . ' - ' . $horairesRow['heureFin'] . '</p>';
            }
        }
     echo '</div>';   
    }
    
    echo '</div>';
    $conn->close();
    
    ?>