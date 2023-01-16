<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=diggit.me;charset=utf8;', "root", "");

if (isset($_POST['envoi'])) {
    if (!empty($_POST['mail']) AND !empty($_POST['mdp']) ){
        $mail = htmlspecialchars($_POST['mail']);
        $mdp= hash('sha256',$_POST['mdp']);

        $recupClient = $bdd -> prepare('SELECT * FROM  client WHERE mailc = ? AND mdp = ?');
        $recupClient->execute(array($mail,$mdp));

        if($recupClient->rowCount()==1 ){

            
            $_SESSION['mail'] = $mail;
            $_SESSION['mdp'] = $mdp; 
            while($donne=$recupClient->fetch())
					{ 
                        $_SESSION['statut'] = $donne['statut'];
					}
            
            
            header("Location:../index.php");

        }else{
            
            echo "Mauvais identifiant";

        }


    }else{
    echo "remplir les champs";
    }
}


?>