<?php

// Sauvegarde des préférences utilisateur dans un cookie
$mesprefs = $_POST;

$newprefs = serialize($mesprefs);

setcookie('mesprefs', $newprefs, time() + (30 * 24 * 60 * 60), "/");  

// Redirection vers la page utilisateur
header('Location: user.php');
exit; 
?>
