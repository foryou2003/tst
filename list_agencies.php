<?php

$conn = mysqli_connect("localhost", "root", "", "banque_db");


if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}


$sql = "SELECT * FROM agence";
$result = mysqli_query($conn, $sql);

if (!$result) {
    
    die("Erreur dans la requête : " . mysqli_error($conn));
}


if (mysqli_num_rows($result) > 0) {
    
    echo "<h2>Liste des agences</h2>";
    echo "<table border='1'><tr><th>Référence</th><th>Nom</th><th>Ville</th><th>Nombre d'employés</th><th>Nombre de clients</th><th>Action</th></tr>";

    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . htmlspecialchars($row["ref_agence"]) . "</td>
                <td>" . htmlspecialchars($row["nom_agence"]) . "</td>
                <td>" . htmlspecialchars($row["ville_agence"]) . "</td>
                <td>" . htmlspecialchars($row["nombre_employes"]) . "</td>
                <td>" . htmlspecialchars($row["nombre_clients"]) . "</td>
                <td><a href='delete_agency.php?ref_agence=" . urlencode($row["ref_agence"]) . "'>Supprimer</a></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Aucune agence trouvée.";
}


mysqli_close($conn);
?>
