<?php
$bdd = new PDO('mysql:host=localhost;dbname=diggit.me;charset=utf8;', "root", "");
if (isset($_POST['envoi'])) {
    if (!empty($_POST['mail']) AND !empty($_POST['mdp']) ){
        $mail = htmlspecialchars($_POST['mail']);
        $mdp = sha1($_POST['mdp']);

        $recupClient = $bdd -> prepare('SELECT * FROM baseclienttest WHERE mail = ? AND mdp = ?');
        $recupClient->execute(array($mail,$mdp));

        if($recupClient->rowCount() > 0 ){

            $_SESSION['mail'] = $mail;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupClient -> fetch()['id'];
            header("Location:../iindex.php");

        }else{
            
            echo "<script> alert('Mauvais identifiant');window.location='compte.php' </script>";

        }


    }else{
    echo "remplir les champs";
    }
}


?>