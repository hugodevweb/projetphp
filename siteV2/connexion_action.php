<?php
  //Ouverture d'une session
  session_start();
 
  /*Affectation dans des variables du pseudo/mot de passe s'ils existent, affichage d'un 
  message sinon*/
  if ($_POST['pseudo'] && $_POST['mdp'])
  {
    $id=$_POST['pseudo'];
    $mdp=$_POST['mdp'];
    // Connexion à la base
    try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=panier_bio', 'root', '');
    }
    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
 
    $sql = "SELECT user_pseudo, user_mdp, user_type FROM user WHERE user_pseudo='" . $id . "' AND user_mdp='".$mdp."';";
 
    /* Exécution de la requête pour vérifier si le compte (=pseudo+mdp) existe !*/
    if (!$resultat = $bdd->query($sql)) 
    {
      // La requête a échoué
      echo "Error: Problème d'accès à la base \n";
      exit();
    } 
    else 
    {
      // Dans le cas de la requête simple, on teste si une ligne de résultat a été 
      // renvoyée, c'est à dire si le compte existe bien :
      $req = $bdd->prepare($sql); 
      $req->execute(); // on exécute la requête
      $nbRes = $req->rowCount(); // on compte le nb de résultat
 
      // normalement il doit exister qu’une seule combinaison pseudo+mdp
      if($nbRes == 1) 
      {
        //Mise à jour des données de la session
        $_SESSION['login']=$id;
       
        
        while($donne=$req->fetch())
					{ $_SESSION['pseudo']=$donne['user_pseudo']; 
            $_SESSION['statut']=$donne['user_type'];
					}

        if($_SESSION['statut']=='V'){
          header("Location:vendeur_accueil.php");
        }  
        else if($_SESSION['statut']=='R'){
          header("Location:Responsable_accueil.php");
        }
        else if($_SESSION['statut']=='A'){
          header("Location:acheteur_accueil.php");
        }
        else{
          echo "Error: Problème d'accès à la base \n";
          exit();
        }
 
        /*Redirection vers la page autorisée à cet utilisateur
        ATTENTION !! Ne pas mettre d'appel d'echo() ni de balise HTML
        au-dessus de header() dans cette condition*/

 
        /* A prévoir et finaliser : récupérer puis vérifier le statut du profil dans la 
        base MariaDB,puis affecter la valeur du statut dans $_SESSION['statut'] et enfin 
        faire une redirection vers une page en fonction du statut vendeur_accueil.php si
        le statut est 'V' ou responsable_accueil.php si le statut est 'R'...  */
 
      } else {
        // aucune ligne retournée
        // => le compte n'existe pas ou n'est pas valide
 
        echo "pseudo/mot de passe incorrect(s) ou profil inconnu !";
        echo "<br /><a href=\"./connexion.php\">Cliquez ici pour réafficher le formulaire</a>";
      }
    }
  } else {
    echo("Veuillez saisir votre identifiant et votre mot de passe !");
    echo "<br /><a href=\"./connexion.php\">Cliquez ici pour réafficher le formulaire</a>";
  }
 
    //Fermeture de la communication avec la base MariaDB
    $mysqli->close();
?>
