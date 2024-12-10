<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Animal et Couleur</title>
</head>

<body>
    
<h1>Session cookies</h1>

<h3>Afficher  son User Agent - son adresse ip - le nom du serveur</h3>
<ul>

 <li><a href="index.php">Acceuil</a></li>
 <li><a href="infos.php">Infos Php</a></li>
 <li><a href="login.php">Login</a></li>
 <li><a href="edit.php">edit</a></li>


</ul>
//<!-- Affichage des informations serveur : nom du serveur, adresse IP, User Agent -->
<?php
echo $_SERVER ['SERVER_NAME'];
echo "<br> <br>" ;
echo $_SERVER['SERVER_ADDR'];
echo "<br> <br>" ;
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br> <br>" ;
?>


</body>
</html>