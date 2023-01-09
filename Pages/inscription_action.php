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
  $statut= "C";
  if($mdp == $confirm_mdp)
  {
    $mdp= hash('sha256',$mdp);
    $insert1 = $bdd->prepare("INSERT INTO client(mail,mdp,statut) VALUES(:email,:mdp,:statut)");

    $insert1->bindParam(':email', $email);
		$insert1->bindParam(':mdp', $mdp);
		$insert1->bindParam(':statut', $statut);
    $insert1 -> execute();


     $insert2 = $bdd -> prepare('INSERT INTO users(mail,pseudo,prenom,nom,adresse,tel,ville,codepostal) VALUES( "'.$email.' , '.$pseudo.' , '.$prenom.', '.$nom.', '.$numero_tel.', '.$adresse.', '.$ville.', '.$code_postal.'" )'); 
     $insert2 -> execute(array($email, $pseudo, $prenom,$nom,$adresse,$numero_tel ,$ville,$code_postal));

    header('Location: ../iindex.php');
    echo "je suis ici 1 ";
  }
  else
  {
    echo 'mdp non identique';
  }
  echo "je suis ici ";
}
else{
      echo"hello";
    }

  
?> 
