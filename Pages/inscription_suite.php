<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma-rtl.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="../style/main.css" rel="stylesheet">
 </head>
    <title>Création d'un compte</title>
</head>
<body>
    <div class ="container_inscription">
        <h1>Finaliser mon inscription</h1>
            <form class = "form_inscription_suite" action="inscription_action.php" method="POST">
                  <div class="field">
                  <label class="label">Nom</label>
                      <div class="control">
                        <input class="input" type="text" placeholder="Votre email">
                      </div>
                  </div>

                  <div class="field">
                    <label class="label">Prénom</label>
                      <div class="control">
                        <input class="input" type="text" placeholder="Votre mot de passe">
                      </div>
                  </div>

                  <div class="field">
                    <label class="label">Numéro de télephone</label>
                      <div class="control">
                        <input class="input" type="tel" placeholder="Votre mot de passe">
                      </div>
                  </div>

                  <div class="field">
                    <label class="label">Adresse</label>
                      <div class="control">
                        <input class="input" type="text" placeholder="Votre mot de passe">
                      </div>
                  </div> 


                  <div class="field is-grouped is-grouped-centered">
                    <div class="field">
                      <label class="label">Code postal</label>
                        <div class="control">
                          <input class="input" type="text" placeholder="Code postal">
                        </div>
                    </div>
                    <div class="field">
                      <label class="label">Ville</label>
                        <div class="control">
                          <input class="input" type="text" placeholder="Ville">
                        </div>
                    </div>
                  </div>

                  <a href="../Pages/inscription_suite.php">
                  <input type="button" class="bouton_inscription_valider" value="Valider mon inscription">
                </a>

              </form>
      </div>
</body>
</html>