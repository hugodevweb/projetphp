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
                <a href="index.php" class="actif">Accueil</a>
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
         <h1 class="">Accueil</h1>
     </div>
 </header>
 <section class="contenu">
     Qui sommes nous ?
 </section>
 <h2>Nos produits</h2>
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

                    // Si tout va bien, on peut continuer
                    // On récupère le nom des jeux de la table jeux_video
    $req='SELECT * FROM produits LIMIT 6;';
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