<html>
    <head>
    <title>Un petit bonjour </title>
    </head>
    
    <body>
    <?php
    if (empty($_POST["familier"]))
    {
        echo "Bonjour".$_POST["prenom"];
    }
    else
    {
        echo"Salut ".$_POST["prenom"];
    }
?>
    </body>
</html>

