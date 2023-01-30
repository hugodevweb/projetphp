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

            while($donne=$recupClient->fetch())
					{ 
                        $_SESSION['statut'] = $donne['statut'];
 
					}
            $stmt = $bdd -> prepare('SELECT * FROM  users WHERE mailu= ? ' );
            $stmt->execute(array($mail));
            $_SESSION['mail'] = $mail;
            $_SESSION['mdp'] = $mdp; 
            while($donne=$stmt->fetch())
            { 
                $_SESSION['pseudo']=$donne['pseudo'];

            }

            
            
            
            
            header("Location:../index.php");

        }else{
            
            header("Location:../index.php?connexion=false");

        }


    }else{
    echo "remplir les champs";
    }
}


?>