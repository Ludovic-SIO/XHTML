<html>
<head>
    <title>Liste des employés</title>
</head>
<body>
    <?php 
    $connexion =mysqli_connect("localhost","root","","empScePhp");
    if($connexion)
    {
      //connexion réussie
      mysqli_set_charset ($connexion,"utf8");
      echo'<form action="php10.php" method="post">';
      echo"<h2>Liste des employes par service</h2>";
      echo"<p>Selectionnez le service souhaité:</p>";
      echo'<select name="service" size="5>';
      $requete="select* from service order by designation;";
      $resultat=mysqli_query($connexion,$requete);
      $ligne=mysqli_fetch_assoc($resulat);
      if ($ligne)
      {
        echo '<option selected value="'.$ligne["code"].'">'.$ligne["code"]
                .''.$ligne["designation"].'</option>';//ne pas changer de ligne 
        $ligne=mysqli_fetch_assoc($resultat);
        while ($ligne)
        {
         echo '<option  value="'.$ligne["code"].'">'.$ligne["code"]
                .''.$ligne["designation"].'</option>';//ne pas changer de ligne 
         $ligne=mysqli_fetch_assoc($resultat);
        }
      }
      echo "</select>";
      echo '<p /><input type="submit" value="Afficher la liste"><p />'
      echo "</form>";
    }
    else
    {
     echo "probleme à la connexion <br />";
    }
    mysqli_close($connexion);
    ?>
    </body>
    </html>
        

    

       
    