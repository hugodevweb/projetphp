<?php
$bdd = new PDO('mysql:host=localhost;dbname=diggit.me;charset=utf8;', "root", "");

if (!empty($_POST['mail']) && !empty($_POST['mdp']) && !empty($_POST['confirm_mdp']) && !empty($_POST['pseudo']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['tel']) && !empty($_POST['adresse']) && !empty($_POST['codepostal']) && !empty($_POST['ville'])) {
  
  $email = ($_POST['mail']);
  $mdp = ($_POST['mdp']);
  $confirm_mdp = ($_POST['confirm_mdp']);
  $pseudo = ($_POST['pseudo']);
  $nom = ($_POST['nom']);
  $prenom = ($_POST['prenom']);
  $numero_tel = ($_POST['tel']);
  $adresse = ($_POST['adresse']);
  $ville = ($_POST['ville']);
  $code_postal = ($_POST['codepostal']);
  $statut= "A";
  if($mdp == $confirm_mdp)
  {
    $mdp= hash('sha256',$mdp);
    $insert1 = $bdd->prepare("INSERT INTO client(mailc,mdp,statut) VALUES(:email,:mdp,:statut)");

    $insert1->bindParam(':email', $email);
		$insert1->bindParam(':mdp', $mdp);
		$insert1->bindParam(':statut', $statut);
    $insert1 -> execute();


     $insert2 = $bdd -> prepare("INSERT INTO users(mailu,pseudo,prenom,nom,telephone) VALUES(:email,:pseudo,:prenom,:nom,:tel)"); 
     $insert2->bindParam(':email', $email);
    $insert2->bindParam(':pseudo', $pseudo);
    $insert2->bindParam(':prenom', $prenom);
    $insert2->bindParam(':nom', $nom);
    $insert2->bindParam(':tel', $numero_tel);

     $insert2 -> execute();

     $insert3 = $bdd -> prepare("INSERT INTO adresse(id_adresse,rue,codepostal,ville) VALUES(:email,:rue,:cp,:ville)"); 
     $insert3->bindParam(':email', $email);
    $insert3->bindParam(':rue', $adresse);
    $insert3->bindParam(':ville', $ville);
    $insert3->bindParam(':cp', $code_postal);
    

     $insert3 -> execute();
     session_start();
     $_SESSION['pseudo']=$pseudo;
     $_SESSION['statut']=$statut;
     
    header('Location: ../iindex.php');

  }
 
}

  
?> 
