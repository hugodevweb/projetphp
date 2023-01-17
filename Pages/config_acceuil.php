<?php
$pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

if(isset($_POST['config'])) {
    $config = $_POST['config'];

    $id_config=$_GET['id_config'];
// Récupération des données du formulaire

$stmt = $pdo->prepare("UPDATE tj_config_comp SET is_selected = 0 WHERE tj_config_comp.is_selected=".$id_config."");
$stmt->execute();

$stmt2 = $pdo->prepare("UPDATE tj_config_comp SET is_selected = ".$id_config."  WHERE id_config=".$config."");
$stmt2->execute();
header('Location: ../index.php');

}
?>
