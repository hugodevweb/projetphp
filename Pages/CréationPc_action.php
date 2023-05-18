<?php   
session_start();

$id_cpu=$_GET['id_cpu'];
$_SESSION['cpu'] = $id_cpu;

$id_ram=$_GET['id_ram'];
$_SESSION['ram'] = $id_ram;


$id_gpu=$_GET['id_gpu'];
$_SESSION['gpu'] = $id_gpu;

$id_alim=$_GET['id_alim'];
$_SESSION['alim'] = $id_alim;
                   
$id_stockage=$_GET['id_stockage'];
$_SESSION['stockage'] = $id_stockage;

$id_board=$_GET['id_board'];
$_SESSION['board'] = $id_board;

$id_boitier=$_GET['id_boitier'];
$_SESSION['boitier'] = $id_boitier;

$id_cooler=$_GET['id_cooler'];
$_SESSION['cooler'] = $id_cooler;

    header("location: ./CréationPc.php")
?>