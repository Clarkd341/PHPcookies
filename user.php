<?php
session_start(); 

// Vérifie si l'utilisateur est connecté en vérifiant les variables de session
if (!isset($_SESSION['nom']) || !isset($_SESSION['islogin']) || $_SESSION['islogin'] !== true) {
    echo "Veuillez vous connecter d'abord.";
    exit; 
}

// echo du message de bienvenue
echo "Bienvenue " . htmlspecialchars($_SESSION['nom']);


// Vérification des préférences utilisateur via les cookies
if (isset($_COOKIE['mesprefs'])) {

    $mesprefs = unserialize($_COOKIE['mesprefs']); 

    // Affichage des préférences de l'utilisateur
    echo "Mes préférences : animal " . $mesprefs['animal'] . " et la couleur " . $mesprefs['couleur'];

    // Liens vers ajoute préférences et la déconnexion
    echo "<a href='edit.php'>Ajouter une préférence</a>";
    echo "<a href='logout.php'>Quitter</a>";
} else {
   
    // 4. Si aucune préférence n'est définie, afficher un message alternatif
    echo 'Pas de préférences définies.';
    echo "<a href='edit.php'>Ajouter une préférence</a>";
    echo "<a href='logout.php'>Quitter</a>";
}

?>
