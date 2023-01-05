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
                    <a href="pointsRetrait.php" class="actif">Points de retrait</a>
                </li>
                <li>
                    <a href="produits.php">Produits</a>
                </li>
                <li>
                    <a href="connexion.php">Connexion</a>
                </li>
            </ul>
        </nav>
        <!-- en tete du site -->
        <header class="top-header">
          <div>
           <h1 class="">Points de retrait</h1>
       </div>
       <div class="tri">
        <div class="txttri">
            <p class="tri-p">Afficher uniquement :</p>
        </div>
        <?php
        unset($aff);
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
         else if(array_key_exists('button2', $_POST)) {
             button2();
         }
        function button1() {
            

        }
         function button2() {
            unset($aff);
         }
    ?>
        <form action="pointsRetrait.php" method="post">
            <input type="text" name="aff" placeholder="entrez nom de ville"/>
            <input type="submit" class="button" value="Valider" />
            
        </form>
        <form>
        <input type="submit" name="aff"class="button" value="tous" />
        </form>
       </div> 
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
        
        
        if (isset($_POST['aff']) ){
            $req="SELECT * FROM point_retrait where ptr_adresse LIKE '%".$_POST['aff']."%';";
        }
        else $req='SELECT * FROM point_retrait';
       
        $reponse = $bdd->query($req) or die(print_r($bdd->errorInfo()));
        // On affiche chaque entrée une à une
        $compteur = 0;
        while ($donnees = $reponse->fetch())
        {
            echo '<section class="colImgText">
                <h3 class="">'.$donnees['ptr_nom'].'</h5>
                '.$donnees['ptr_adresse'].'<br/>'.$donnees['ptr_horaire'].'
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
</header>