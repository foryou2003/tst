<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Compte Bancaire</title>
</head>
<body>
    <h1>Ajouter un Compte Bancaire</h1>
    <form method="post" action="add_compte.php">
        <label for="ref_compte">Référence du compte :</label>
        <input type="text" id="ref_compte" name="ref_compte" required><br><br>

        <label for="date_creation">Date de création :</label>
        <input type="date" id="date_creation" name="date_creation" required><br><br>

        <label for="nom_porteur">Nom du porteur du compte :</label>
        <input type="text" id="nom_porteur" name="nom_porteur" required><br><br>

        <label for="type_compte">Type de compte :</label>
        <select id="type_compte" name="type_compte" required>
            <option value="business">Compte Business</option>
            <option value="client">Compte Client</option>
        </select><br><br>

        <label for="carte_bancaire">Carte bancaire :</label>
        <select id="carte_bancaire" name="carte_bancaire" required>
            <option value="Visa">Carte Visa</option>
            <option value="CMI">Carte CMI</option>
        </select><br><br>

        <label for="type_contrat">Type de contrat :</label>
        <input type="text" id="type_contrat" name="type_contrat" required><br><br>

        <input type="submit" value="Ajouter le compte">
    </form>
</body>
</html>
