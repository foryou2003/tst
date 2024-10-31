<?php
$conn = mysqli_connect("localhost", "root", "", "banque_db");

if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $prenom = mysqli_real_escape_string($conn, $_POST["first_name"]);
    $nom = mysqli_real_escape_string($conn, $_POST["last_name"]);
    $type_client = mysqli_real_escape_string($conn, $_POST["client_type"]); 
    $type_compte = mysqli_real_escape_string($conn, $_POST["account_type"]); 
    $solde = mysqli_real_escape_string($conn, $_POST["balance"]);

 
    $sql = "INSERT INTO client (prenom, nom, type_client, type_compte, solde) VALUES ('$prenom', '$nom', '$type_client', '$type_compte', '$solde')";

  
    echo mysqli_query($conn, $sql) ? "Client ajouté avec succès !" : "Erreur : " . mysqli_error($conn);
}

mysqli_close($conn);
?>
