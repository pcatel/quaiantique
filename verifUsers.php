<?php
session_start();
if(isset($_POST['email']) && isset($_POST['password']))
{
 // connexion à la base de données
 $db_username = 'pasca8966';
 $db_password = 'gold1955';
 $db_name = 'pasca8966_4gp9c9';
 $db_host = '91.216.107.182';




 $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
 or die('could not connect to database');
 
 // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
 // pour éliminer toute attaque de type injection SQL et XSS
 $email = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
 $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
 
 if($email !== "" && $password !== "")
 {
 $requete = "SELECT typeUser, count(*) FROM Utilisateurs where 
 email = '".$email."' and mot_de_passe = '".$password."' GROUP BY typeUser";

//$requete = "SELECT typeUser, COUNT(*) FROM Utilisateurs WHERE email = '".$email."' AND mot_de_passe = '".$password."' GROUP BY typeUser";





 $exec_requete = mysqli_query($db,$requete);
 $reponse = mysqli_fetch_array($exec_requete);
 $count = $reponse['count(*)'];
 $typeUser = $reponse['typeUser'];
 if($count!=0) // nom d'utilisateur et mot de passe correctes
 {
 $_SESSION['email'] = $typeUser. ' : ' .$email;
 //$_SESSION['typeUser'] = $typeUser;

 header('Location: index.php');
 }
 else
 {
 header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
 }
 }
 else
 {
 header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
 }
}
else
{
 header('Location: login.php');
}
mysqli_close($db); // fermer la connexion
?>