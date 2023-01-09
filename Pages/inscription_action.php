<?php

$bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

if (isset($_POST['mail']) && isset($_POST['mdp']) && isset($_POST['confirm_mdp']) && isset($_POST['pseudo']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['tel']) && isset($_POST['adresse']) && isset($_POST['codepostal']) && isset($_POST['ville'])) {ND !empty($_POST['numero_tel']) AND !empty($_POST['adresse']) AND !empty($_POST['ville']) AND !empty($_POST['code_postal']))
    {
      $email = ($_POST['mail']);
      $mdp = ($_POST['mdp']);
      $confirm_mdp = ($_POST['confirm_mdp']);
      $pseudo = ($_POST['pseudo']);
      $nom = ($_POST['nom']);
      $prenom = ($_POST['prenom']);
      $numero_tel = ($_POST['numero_tel']);
      $adresse = ($_POST['adresse']);
      $ville = ($_POST['ville']);
      $code_postal = ($_POST['code_postal']);
      $statut=($_POST['statut']);
      echo "form";
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
     
    else{
      echo"champs vide";
    } echo "je suis ici ";
    }
    else{
      echo"bonjour";
    }

  
?>