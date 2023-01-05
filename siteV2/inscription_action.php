<?php
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$adresse=$_POST['adresse'];
$tel=$_POST['tel'];
$pseudo=$_POST['pseudo'];
$mdp= $_POST['mdp'];
$mdp2= $_POST['mdp2'];

if (isset($_POST['statut']))$statut=$_POST['statut'];
else $name_type="no";

  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=panier_bio', 'root', '');
  }
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }
  if($mdp==$mdp2){

      $Req="insert into user VALUES ('$pseudo','$mdp','$statut'); INSERT INTO profil
      VALUES ((SELECT user_pseudo FROM user WHERE user_pseudo='$pseudo'),'$prenom','$nom','$adresse','$tel');
     "  ;
      $req = $bdd->prepare($Req); 
      $req->execute()
      or die("Inscription annulée");
      session_start();
      header("Location:acheteur_accueil.php");
}
	
	?>
