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
        <a href="index.php">Accueil</a>
        <li>
          <a href="pointsRetrait.php" class="">Points de retrait</a>
        </li>
        <li>
          <a href="produits.php">Produits</a>
        </li>
        <li>
          <a href="connexion.php" class="actif">Connexion</a>
        </li>
      </li>
    </ul>
  </nav>
    <!-- en tete du site -->
    <header class="top-header">
      <div>
       <h1 class="">Connexion</h1>
     </div>
   </header>
   <section class="contenu">
     <form action="connexion_action.php" method="post">
      <fieldset>
        <legend>Veuillez saisir votre pseudo et votre mot de passe :</legend>
        <p>Votre pseudo :
          <input type="text" name="pseudo" placeholder="pseudo" required="required" />
        </p>
        <p>Votre mot de passe :
          <input type="text" name="mdp" placeholder="mot de passe" required="required" />
        </p>
        <p><input type="submit" value="Valider"></p>
      </fieldset>
    </form>
  </section>
  <header class="top-header">
      <div>
       <h1 class="">Inscription</h1>
     </div>
   </header>
   <section class="contenu">
     <form action="inscription_action.php" method="post">
      <fieldset>
        <legend>Veuillez renseigner tous les champs:</legend>
        <p>Votre prénom :
          <input type="text" name="prenom" placeholder="prenom" 
     required="required" />
        </p>
        <p>Votre nom :
          <input type="text" name="nom" placeholder="nom" required="required" />
        </p>
        <p>Votre adresse :
          <input type="text" name="adresse" placeholder="adresse"      
     required="required" />
        </p>
        <p>Votre numéro de téléphone :
          <input type="text" name="tel" placeholder="telephone" 
     required="required" />
        </p>
        <p>Votre pseudo :
        <input type="text" name="pseudo" placeholder="pseudo" 
     required="required" />
        </p>
        <p>Votre mot de passe :
          <input type="text" name="mdp" placeholder="mot de passe" 
     required="required" />
        </p>
        <p>Confirmer mot de passe :
          <input type="text" name="mdp2" placeholder="mot de passe" 
     required="required" />
        </p>
        <p>
          Quel est votre statut?
        </p>
      <select name="statut">
        <option value="A">Acheteur</option>
        <option value="V">Vendeur</option>
        <option value="R">Responsable</option>
       
      </select>
        <p><input type="submit" value="Valider"></p>
      </fieldset>
    </form>
  </section>

</body>
</html>

