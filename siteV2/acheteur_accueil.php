<?php
  /* A faire sur toutes les pages dont l'accès est autorisé à un utilisateur connecté. 
  Possibilité de vérifier aussi le contenu de $_SESSION['statut'], si le statut est pris 
  en charge, */
  session_start();
  if(!isset($_SESSION['login']))
  {
    //Si la session n'est pas ouverte, redirection vers la page du formulaire
    header("Location:connexion.php");
    exit();
  }
?>
<html lang="fr">
<head>
  <meta charset="utf-8-general-ci" />
  <title>Mon P'tit Primeur</title>
  <link href="css/style.css" rel="stylesheet" />
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/logo_juste_carotte.png">
</head>
<body>
  <nav> <!-- zone de navigation -->
    <ul class="menu">
      <li>
        <a href="index.php">Accueil</a>
        <li>
          <a href="pointsRetrait.php" class="">Points de retrait</a>
        </li>
        <li>
          <a href="produits.php">Produits</a>
        </li>
        <li>
          <a href="connexion.php">Connexion</a>
        </li>
      </li>
    </ul>
  </nav>
    <!-- en tete du site -->
    <header class="top-header">
      <div>
       <h1 class="">bonjour ! </h1>
     </div>
   </header>
   <?php
          $bdd = new PDO('mysql:host=localhost;dbname=panier_bio','root', '');
          $reqcomptestxt= "SELECT com_num  from tj_cpt_com where user_pseudo='".$_SESSION['pseudo']."';";
          $reqcompte = $bdd->prepare($reqcomptestxt);
          $reqcompte->execute();
          
          while($commandescpt=$reqcompte->fetch())
          { 
                $Reqtext = "SELECT com_num,com_date,com_etat,com_date_retrait,prix FROM commande where com_num='".$commandescpt["com_num"]."' ;";

                $req = $bdd->prepare($Reqtext);
                $req->execute();
                

                while($donne=$req->fetch())
                { 
              $reqpaniertxt = "SELECT pro_id,quantite FROM tj_com_pro where com_num='".$donne["com_num"]."';";
              $reqpanier = $bdd->prepare($reqpaniertxt);
              $reqpanier->execute();
              echo "<div class=\"commande\">";
                echo "<div class=\"IdCom\">";
                  echo"<h2> Commande du ".$donne["com_date"]."</h2>";
                echo "</div>";
                echo"<h4> Etat de la commande: ".$donne["com_etat"]."</h4>";
                if($donne["com_etat"]=='Retirée')
                  echo"<h4 retirée le>".$donne["com_date_retrait"] ."</h4>";
                while($produitscom=$reqpanier->fetch()){
                  $Reqproduits = "SELECT * From produits where pro_id='".$produitscom["pro_id"]."';";
                  $reqprod = $bdd->prepare($Reqproduits);
                  $reqprod->execute();
                  while($produits=$reqprod->fetch()){
                    echo"<tr>
                    <td><h4> Produit: ".$produits['pro_nom']."</h4></td>  
                    <td><h4> Quantité".$produitscom['quantite']."</h4></td></tr>";
                }
              }  
              } 
              
              echo "</div>";
         }
        ?>
  </body>
</html>
