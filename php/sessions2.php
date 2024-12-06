<?php
    session_start();
?>
<html>
    <body>
        <?php
        $_SESSION["nom"]="Dupont";
        $_SESSION["prenom"]="Paul";
        ?>
        <a href="sessions3.php">sessions3.php</a>
    </body>
</html>