<?php
$bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
if (isset($_POST['envoi'])) 
  {
    if(!empty($_POST['mail']) AND !empty($_POST['mdp']) AND !empty($_POST['confirm_mdp']AND !empty($_POST['nom'] ) )
    {
      $email = ($_POST['mail']);
      $mdp = ($_POST['mdp']);
      $confirm_mdp = ($_POST['confirm_mdp']);

      if($mdp == $confirm_mdp)
      {
        $insert = $bdd -> prepare('INSERT INTO baseclienttest(mail,mdp) VALUES( ? , ? ) ');
        $insert -> execute(array($email, $mdp ));
        header('Location: inscription_suite.php');
      }
      else
      {
        echo 'mdp non identique';
      }
    }
    else
    {
      echo 'remplir champr';
    }
  }
?>
