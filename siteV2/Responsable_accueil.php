<?php
  /* A faire sur toutes les pages dont l'accès est autorisé à un utilisateur connecté. 
  Possibilité de vérifier aussi le contenu de $_SESSION['statut'], si le statut est pris 
  en charge, */
  session_start();
  if(!isset($_SESSION['login']))
  {
    //Si la session n'est pas ouverte, redirection vers la page du formulaire
    header("Location:session.php");
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
      
    ?>
  </body>
</html>
