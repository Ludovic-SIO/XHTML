<html>
<head><title>Second script php</title></head>
<body>
<?php
 //ceci est un commentaire
 $jour=date("d");
 $mois=date("m");
 $an=date("Y");
 echo "Bonjour, ici Big Brother...<br/><br/>";
 echo "Nous sommes le ".$jour."/".$mois."/".$an."<br/>";
 echo 'Votre adresse IP est '.$_SERVER["REMOTE_ADDR"]."<br />";
 echo "Vous utilisez le navigateur" .$_SERVER["HTTP_USER_AGENT"]."<br/>";
 ?>
 </body>
 </html>