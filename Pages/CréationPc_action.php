<?php   
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=diggit.me;charset=utf8;', "root", "");
    $insert = $bdd->prepare("INSERT INTO configurationsuser(nom,prix) VALUES('test',1)");
    $insert -> execute();
                            
    header("location: ./CréationPc.php")
?>