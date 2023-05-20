<?php 
session_start();
$id_config = $_SESSION['id_config'];
$cpu = $_GET['cpu'];
$cooler = $_GET['cooler'];
$alim = $_GET['alim'];
$board = $_GET['board'];
$gpu = $_GET['gpu'];
$stockage = $_GET['stockage'];
$ram = $_GET['ram'];
$boitier = $_GET['boitier'];


$bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
$req = $bdd->prepare("UPDATE tj_config_comp SET id_alim = $alim , id_board = $board , id_boitier = $boitier , id_cooler = $cooler, id_cpu = $cpu , id_gpu = $gpu , id_stockage = $stockage, id_ram = $ram  WHERE id_config = $id_config");
$req->execute();

header("location: ./CréationPc.php")
?>