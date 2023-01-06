<?php
// Connexion à la base de données
$host = "localhost";
$user = "root";
$password = "";
$dbname = "digit.me";

$pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

// Vérifie si le formulaire a été soumis
if (isset($_POST['submit'])) {
    // Récupère la valeur sélectionnée dans le <select>
    $selected = $_POST['select'];

    // Prépare une requête SQL pour mettre à jour la valeur de l'attribut is_selected du composant
    $stmt = $pdo->prepare("UPDATE composants_stockage SET is_selected = 1 WHERE NAME = :selected");
    // Lie les paramètres de la requête à des variables
    $stmt->bindParam(':selected', $selected);
    // Exécute la requête
    $stmt->execute();
}

// Prépare une requête SQL pour récupérer les composants qui n'ont pas l'attribut is_selected défini sur 1
$stmt = $pdo->prepare("SELECT NAME FROM composants_stockage WHERE is_selected = 0");

$stmt->execute();

while ($row = $stmt->fetch()) {
    echo "<option class=\"is-size-8\"><b>".$row['brand']."</b> - ".$row['NAME']."</option>";
}
?>
