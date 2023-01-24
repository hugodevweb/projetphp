<?php
session_start();
if (isset($_POST['like_button'])) {
    // Récupération des données du formulaire
    $id_config = $_GET['id_config'];
    $id_client = $_GET['id_client'];

    // Vérification de l'existence de l'enregistrement
    $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');


    $stmt = $pdo->prepare("SELECT * FROM likes WHERE id_config = $id_config AND id_client = '$id_client'");

    $stmt->execute();



    if($stmt->rowCount()==0 ){ 
        // Suppression de l'enregistrement
        $stmt2 = $pdo->prepare("INSERT INTO likes (id_config, id_client) VALUES ($id_config, '$id_client')");
        $stmt2->execute();
        

    } else {
        // Ajout de l'enregistrement
        $stmt2   = $pdo->prepare("DELETE FROM likes WHERE id_config = $id_config AND id_client = '$id_client'");
        $stmt2->execute();
    }
    header('Location: ./commu.php');
}
else {
    echo'probleme';
}


?>