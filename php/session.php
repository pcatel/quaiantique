<?php
    session_start();
    if ($_SESSION['email'] !== "") {
      $user = $_SESSION['email'];
      if (substr($_SESSION['email'], 0, 5) == "admin") {

        
echo '<a href="http://pascalcatel.com/maquettes/quaiantique/admin/admin.php" class="right active">Administration</a>';
      };

      
      echo '<a href="http://pascalcatel.com/maquettes/quaiantique/index.php?deconnexion=true" class="right">' . $user . '</a>';
      
      // si déconnexion
      if (isset($_GET['deconnexion'])) {
        if ($_GET['deconnexion'] == true) {
          session_unset();
          header("location:login.php");
        }
      } else if ($_SESSION['email'] !== "") {
        $user = $_SESSION['email'];

        echo '<a href="login.php" class="right">Me connecter</a>';
      } else {
        
        echo '<a href="http://pascalcatel.com/maquettes/quaiantique/index.php?deconnexion=true" class="right">' . $user .  '</a>';
      };
      // fin deconnexion
    } else {
      echo '<a href="login.php" class="right">Me connecter</a>';
    };
    ?>