<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer une Agence</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Créer une nouvelle agence</h2>
        <form method="post" action="add_agency.php">
    <label for="ref_agence">Référence de l'agence :</label>
    <input type="text" id="ref_agence" name="ref_agence" required><br><br>

    <label for="nom_agence">Nom de l'agence :</label>
    <input type="text" id="nom_agence" name="nom_agence" required><br><br>

    <label for="ville_agence">Ville de l'agence :</label>
    <input type="text" id="ville_agence" name="ville_agence" required><br><br>

    <label for="nombre_employes">Nombre d'employés :</label>
    <input type="number" id="nombre_employes" name="nombre_employes" required><br><br>

    <label for="nombre_clients">Nombre de clients potentiels :</label>
    <input type="number" id="nombre_clients" name="nombre_clients" required><br><br>

    <input type="submit" value="Ajouter l'agence">
</form>

        <p id="response"></p>
    </div>
</body>
</html>
