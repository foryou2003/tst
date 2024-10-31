<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banque_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $ref_agence = $_POST["ref_agence"];
    $nom_agence = $_POST["nom_agence"]; 
    $ville_agence = $_POST["ville_agence"]; 
    $nombre_employes = $_POST["nombre_employes"];
    $nombre_clients = $_POST["nombre_clients"];

    
    $sql = "INSERT INTO agence (ref_agence, nom_agence, ville_agence, nombre_employes, nombre_clients) VALUES ('$ref_agence', '$nom_agence', '$ville_agence', '$nombre_employes', '$nombre_clients')";
    
    
    echo mysqli_query($conn, $sql) ? "Agence ajoutée avec succès !" : "Erreur : " . mysqli_error($conn);
}

mysqli_close($conn);
?>
