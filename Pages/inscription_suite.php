<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma-rtl.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="../style/main.css" rel="stylesheet">
 </head>
    <title>Création de mon compte</title>
</head>
<body>
<<<<<<< Updated upstream
    <div class ="container_inscription">
        <h1>Finaliser mon inscription</h1>
            <form class = "form_inscription_suite" action="inscription_suite_action.php" method="POST">
                  <div class="field">
                  <label class="label">Nom</label>
                      <div class="control">
                        <input class="input" name="nom" type="text" placeholder="Votre email">
                      </div>
                  </div>

                  <div class="field">
                    <label class="label">Prénom</label>
                      <div class="control">
                        <input class="input" name="prenom" type="text" placeholder="Votre mot de passe">
                      </div>
                  </div>

                  <div class="field">
                    <label class="label">Numéro de télephone</label>
                      <div class="control">
                        <input class="input" name="tel" type="tel" placeholder="Votre mot de passe">
                      </div>
                  </div>

                  <div class="field">
                    <label class="label">Adresse</label>
                      <div class="control">
                        <input class="input" name="adresse" type="text" placeholder="Votre mot de passe">
                      </div>
                  </div> 
=======
    <div class ="container_inscription_suite">
            <h1>Finaliser mon inscription</h1>
            <form class ="form_inscription_suite "action="inscription_action.php" method="POST">

                <div class="field">
                <label class="label">Votre prénom</label>
                    <div class="control">
                      <input class="input" type="text" placeholder="Votre prénom">
                    </div>
                </div>

                <div class="field">
                  <label class="label">Votre nom</label>
                    <div class="control">
                      <input class="input" type="text" placeholder="Votre nom">
                    </div>
                </div>

                <div class="field">
                  <label class="label">Votre numéro de téléphone</label>
                    <div class="control">
                      <input class="input" type="tel" placeholder="Votre numéro de télephone">
                    </div>
                </div>
>>>>>>> Stashed changes

                <div class="field">
                  <label class="label">Votre adresse</label>
                    <div class="control">
                      <input class="input" type="text" placeholder="Votre adresse">
                    </div>
                </div>

<<<<<<< Updated upstream
                  <div class="field is-grouped is-grouped-centered">
                    <div class="field mr-6">
                      <label class="label">Code postal</label>
                        <div class="control">
                          <input class="input" name="codepostal" type="text" placeholder="Code postal">
                        </div>
                    </div>
                    <div class="field mr-6">
                      <label class="label">Ville</label>
                        <div class="control">
                          <input class="input" name="ville" type="text" placeholder="Ville">
                        </div>
                    </div>
                  </div>

                  <input type="submit" name="envoi" class="bouton_inscription_valider" value="Valider mon inscription">


              </form>
      </div>
=======
                            <!--Mettre ville et code postal -->

                </form>
            </div>   
            
            <a href="../Pages/inscription.php">
        <input type="button" class="bouton_inscription_finale" value="Valider mon inscription">
    </a>
>>>>>>> Stashed changes
</body>
</html>