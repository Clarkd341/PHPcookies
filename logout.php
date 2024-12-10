<?php

// Déconnexion de l'utilisateur et suppression des préférences stockées
setcookie ('mesprefs', " ", time() -3000, "/" ); 
session_start();
session_unset(); 
session_destroy();  

// Redirection après 3 secondes
echo '<meta http-equiv="refresh" content = "3;url=login.php">';  

// Lien vers la page de connexion
echo 'connecter : <a href = login.php>Login</a>';  

?>
