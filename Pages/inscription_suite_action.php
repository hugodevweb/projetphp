<?php

$bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
if (isset($_POST['envoi'])) {
  $nom = htmlspecialchars($_POST['nom']);
  $prenom = htmlspecialchars($_POST['prenom']);
  $adresse = htmlspecialchars($_POST['adresse']);
  $codepostal = htmlspecialchars($_POST['codepostal']);
  $ville = htmlspecialchars($_POST['ville']);

  $insertClient_coord = $bdd -> prepare('INSERT INTO client_coordonee(nom,prenom,adresse,code_postal,ville) VALUES( ? , ? , ? , ?, ? ) ');
  $insertClient_coord -> execute(array($nom, $prenom, $adresse, $codepostal, $ville ));
  header("Location:../iindex.php");


	if (!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['adresse']) AND !empty($_POST['codepostal'])AND !empty($_POST['ville']) ){


  }else{
  echo"remplir les champs";
  }
}
?>