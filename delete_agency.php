<?php
$conn = mysqli_connect("localhost", "root", "", "banque_db");

if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

if (isset($_GET["ref_agence"])) {
    $ref_agence = $_GET["ref_agence"];

    
    $stmt = $conn->prepare("DELETE FROM agence WHERE ref_agence = ?");
    $stmt->bind_param("s", $ref_agence); 

    
    if ($stmt->execute()) {
        echo "Agence supprimée avec succès !";
    } else {
        echo "Erreur : " . $stmt->error;
    }

   
    $stmt->close();
} else {
    echo "Référence d'agence non spécifiée.";
}

mysqli_close($conn);
?>
