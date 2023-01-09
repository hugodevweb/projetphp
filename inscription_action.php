<?php
$bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
if (isset($_POST['envoi'])) 
  {
    if(!empty($_POST['mail']) AND !empty($_POST['mdp']) AND !empty($_POST['confirm_mdp']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) 
    AND !empty($_POST['numero_tel']) AND !empty($_POST['adresse']) AND !empty($_POST['ville']) AND !empty($_POST['code_postal']))
    {
      $email = ($_POST['mail']);
      $mdp = ($_POST['mdp']);
      $confirm_mdp = ($_POST['confirm_mdp']);
      $nom = ($_POST['nom']);
      $prenom = ($_POST['prenom']);
      $numero_tel = ($_POST['numero_tel']);
      $adresse = ($_POST['adresse']);
      $ville = ($_POST['ville']);
      $code_postal = ($_POST['code_postal']);
      $statut=($_POST['statut']);

      if($mdp == $confirm_mdp)
      {

         $insert1 = $bdd -> prepare('INSERT INTO client(mail,mdp,statut) VALUES( ? , ? , "C") '); 
         $insert1 -> execute(array($email, $mdp ));

         $insert2 = $bdd -> prepare('INSERT INTO users(nom,prenom,numero_tel,adresse,ville,code_postal) VALUES( ? , ? , ?, ?, ?, ?) '); 

        header('Location: iindex.php');

      }
      else
      {
        echo 'mdp non identique';
      }
    }
    else
    {
      echo 'remplir champs';
    }
  }
?>
