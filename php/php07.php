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
        mysqli_set_charset($connexion,"utf8");
        $requete="select * from employe;";
        $resultat=mysqli_query($connexion,$requete);
        $ligne=mysqli_fetch_assoc($resultat);
        while($ligne)
        {
            echo$ligne["matricule"]; echo",";
            echo$ligne["nom"]; echo",";
            echo$ligne["prenom"]; echo",";
            echo$ligne["cadre"]; echo",";
            echo$ligne["service"]; echo"<br />";
            $ligne=mysqli_fetch_assoc($resultat);
        }
    }
    else
    {
     echo "problème à la connexion <br />";
    }
    mysqli_close($connexion);
    ?>
    </body>
    </html>