<?php
   session_start();
  
?>
<!DOCTYPE html>
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
                <a href="index.php" class="">Accueil</a>
                <li>
                    <a href="pointsRetrait.php" class="">Points de retrait</a>
                </li>
                <li>
                    <a href="produit.php" class="actif">Produits</a>
                </li>
                <li>
                    <a href="connexion.php">Connexion</a>
                </li>
            </ul>
        </nav>
        <!-- en tete du site -->
        <header class="top-header">
          <div>
           <h1 class="">Produits</h1>
       </div>
       <div class="tri">
        <div class="txttri">
            <p class="tri-p">Afficher uniquement :</p>
        </div>
        <?php

        if(array_key_exists('fruit', $_POST)) {
            button1();
        }
         else if(array_key_exists('button2', $_POST)) {
             button2();
         }
        function button1() {
           $aff="fruit";
        }
         function button2() {
            unset($aff);;
         }
    ?>
        <form action="produits.php" method="post">
        <input type="submit" name="aff"
                class="button" value="fruits" />
        <input type="submit" name="aff"
        class="button" value="tous" />
        </form>
       </div> 
      </header>
   <section class="contenu">
    <?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=panier_bio', 'root', '');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    if (isset($_POST['aff'])and $_POST['aff']=="fruits"){
        $req='SELECT * FROM produits where typ_id=2 ORDER BY typ_id;';
    }
    else $req='SELECT * FROM produits ORDER BY typ_id;';

   
    $reponse = $bdd->query($req) or die(print_r($bdd->errorInfo()));
                    // On affiche chaque entrée une à une
    $compteur = 0;
    while ($donnees = $reponse->fetch())
    {
        echo '<section class="colImgText">
        <img class="cellule-img" src="assets/img/'.$donnees['pro_image'].'" alt="'.$donnees['pro_image'].'" width=300px />
        <h5 class="">'.$donnees['pro_nom'].'</h5>
        '.$donnees['pro_prix'].'€ -- '.$donnees['pro_qte'].'
        </section>';
        $compteur += 1;
        if ($compteur == 3)
        {
            echo'</section>
            <section class="contenu">';
            $compteur = 0;
        }
    }
    $reponse->closeCursor(); // Termine le traitement de la requête
    ?>
    </section>
</body>
</html>