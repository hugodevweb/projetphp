<?php
$bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
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
  if($mdp == $confirm_mdp)
  {

     $insert1 = $bdd -> prepare('INSERT INTO client(mail,mdp,statut) VALUES( ? , ? , "C") '); 
     $insert1 -> execute(array($email, $mdp ));

     if(!$res1 = $bdd -> query($insert1)){
      echo "error pb acces base";
      exit();
     }else{
      echo "insert1 reussi";
     }

     $insert2 = $bdd -> prepare('INSERT INTO users(mail,pseudo,prenom) VALUES( ? , ? , ? )'); 
     $insert2 -> execute(array($email, $pseudo, $prenom));
     if(!$res2 = $bdd -> query($insert2)){
      echo "error pb acces base";
      exit();
     }else{
      echo "insert1 reussi";
     }
    //  $insert2 = $bdd -> prepare('INSERT INTO users(mail,pseudo,nom,prenom,numero_tel,adresse,ville,code_postal) VALUES( ? , ? , ?, ?, ?, ?) '); 
    //  $insert2 -> execute(array($email, $pseudo, $nom, $prenom, $numero_tel , $adresse , $ville , $code_postal));
    header('Location: iindex.php');
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
