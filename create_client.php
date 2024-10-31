<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Client</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Ajouter un Client</h2>
        <form method="post" action="add_client.php">
    <label for="first_name">Prénom :</label>
    <input type="text" id="first_name" name="first_name" required><br><br>

    <label for="last_name">Nom :</label>
    <input type="text" id="last_name" name="last_name" required><br><br>

    <label for="client_type">Type de client :</label>
    <select id="client_type" name="client_type" required>
        <option value="fidele">Client fidèle</option>
        <option value="normal">Client normal</option>
    </select><br><br>

    <label for="account_type">Type de compte :</label>
    <select id="account_type" name="account_type" required>
        <option value="normal">Compte normal</option>
        <option value="particulier">Compte particulier</option>
    </select><br><br>

    <label for="balance">Solde :</label>
    <input type="number" id="balance" name="balance" required><br><br>

    <input type="submit" value="Ajouter le client">
</form>


        <p id="response"></p>
    </div>
   
</body>
</html>
