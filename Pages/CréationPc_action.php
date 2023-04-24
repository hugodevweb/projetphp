<?php   
session_start();

$id_cpu=$_GET['id_cpu'];
$bdd = new PDO('mysql:host=localhost;dbname=diggit.me;charset=utf8;', "root", "");
    $insert = $bdd->prepare("INSERT INTO tj_config_comp (id_alim,id_board,id_boitier,id_cooler,id_cpu,id_gpu,id_stockage,id_ram,is_selected) VALUES('1','19','1','1','$id_cpu','1','1','1','1')");
    $insert -> execute();
                            
    header("location: ./CréationPc.php")
?>