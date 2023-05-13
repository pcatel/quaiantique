<?php

  //les informations d'identification du base de données
  $host = '91.216.107.182';
  $user = 'pasca8966';
  $pass = 'gold1955';
  $db = 'pasca8966_4gp9c9';



  //Créer une connexion à la base de données
  $conn = new mysqli($host, $user, $pass, $db);

  //Vérifier la connexion
  if ($conn->connect_errno) {
     printf("Échec de la connexion à la base de données");
     exit();
  }

  //Récupérer les lignes de la table users
  $res = $conn->query("SELECT * FROM Horaires");

  //Initialiser un tableau
  $data = array();

  //Récupérer les lignes
  while ( $row = $res->fetch_assoc())  {
     $data[] = $row;
  }

  //Afficher le tableau au format JSON
  echo json_encode($data);

  file_put_contents("json/horaires.json", json_encode($data));
 

?>