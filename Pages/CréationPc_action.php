<?php   
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=diggit.me;charset=utf8;', "root", "");
    $insert = $bdd->prepare("INSERT INTO tj_config_comp VALUES('10','1','1','1','1','1','1','1','1','1')");
    $insert -> execute();
                            
    header("location: ./CréationPc.php")
?>