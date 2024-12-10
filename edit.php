<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Préférences</title>
</head>
<body>

<h2>Formulaire</h2>

<!-- Formulaire-->
<form action="traite.php" name="mesprefs" method="POST">

    <label for="animal">Quel est ton animal préféré ?</label>
    <input type="text" name="animal" id="animal" placeholder="exemple : chien" required><br>

    <label for="couleur">Quelle est ta couleur préférée ?</label>
    <input type="text" name="couleur" id="couleur" placeholder="exemple : blanc" required><br>

    <button type="submit">Ajouter</button>
</form>

</body>
</html>
