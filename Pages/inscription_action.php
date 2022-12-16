<?php

$bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
if (isset($_POST['envoi'])) {
  $mail = htmlspecialchars($_POST['mail']);
  $mdp = sha1($_POST['mdp']);

  $insertClient = $bdd -> prepare('INSERT INTO baseclienttest(mail,mdp) VALUES( ? , ?) ');
  $insertClient -> execute(array($mail, $mdp ));
  header("Location: inscription_suite.php");


	if (!empty($_POST['mail']) AND !empty($_POST['mdp']) AND !empty($_POST['confirm_mdp']) ){


  }else{
  echo"remplir les champs";
  }
}
?>