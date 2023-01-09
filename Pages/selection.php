<?php
// Connexion à la base de données
$host = "localhost";
$user = "root";
$password = "";
$dbname = "digit.me";

$pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

if(isset($_POST['answer'])) {
    $answer = $_POST['answer'];

// Récupération des données du formulaire
$selectedOption = $_POST['selectedOption'];
$type=$_GET['type'];
switch($answer) {
    case 'supprimer':
        $stmt = $pdo->prepare("UPDATE composants_".$type." SET is_selected = 0 WHERE NAME = ?");

         break;
    case 'ajouter':
        $stmt = $pdo->prepare("UPDATE composants_".$type." SET is_selected = 1 WHERE NAME = ?");

                break;
}
header('Location: ../iindex.php');

$stmt->execute([$selectedOption]);
}
?>
