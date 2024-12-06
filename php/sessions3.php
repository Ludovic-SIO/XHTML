<?php
    session_start();
?>
<html>
    <body>
        <?php
            echo 'Nom : '.$_SESSION["nom"].'<br />';
            echo 'Prénom: '.$_SESSION["prenom"]
        ?>
    </body>
</html>