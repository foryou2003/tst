<?php
$conn = mysqli_connect("localhost", "root", "", "banque_db");

if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ref_compte = mysqli_real_escape_string($conn, $_POST["ref_compte"]);
    $date_creation = mysqli_real_escape_string($conn, $_POST["date_creation"]);
    $nom_porteur = mysqli_real_escape_string($conn, $_POST["nom_porteur"]);
    $type_compte = mysqli_real_escape_string($conn, $_POST["type_compte"]);
    $carte_bancaire = mysqli_real_escape_string($conn, $_POST["carte_bancaire"]);
    $type_contrat = mysqli_real_escape_string($conn, $_POST["type_contrat"]);

   
    $sql = "INSERT INTO compte_bancaire (ref_compte, date_creation, nom_porteur, type_compte, carte_bancaire, type_contrat) 
            VALUES ('$ref_compte', '$date_creation', '$nom_porteur', '$type_compte', '$carte_bancaire', '$type_contrat')";

   
    if (mysqli_query($conn, $sql)) {
        echo "Compte ajouté avec succès !";
    } else {
        echo "Erreur : " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
