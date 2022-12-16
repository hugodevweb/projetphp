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
            <h1>Mon inscription</h1>
            <form class = "form_inscription" action="inscription_action.php" method="POST">

                <div class="field">
                <label class="label">Votre Email</label>
                    <div class="control">
                      <input class="input" name="mail" type="email" placeholder="Votre email">
                    </div>
                </div>

                <div class="field">
                  <label class="label">Votre mot de passe</label>
                    <div class="control">
                      <input class="input"  name="mdp" type="password" placeholder="Votre mot de passe">
                    </div>
                </div>

                <div class="field">
                  <label class="label">Confirmer votre mot de passe</label>
                    <div class="control">
                      <input class="input"  name="confirm_mdp" type="password" placeholder="Votre mot de passe">
                    </div>
                </div>
                  
                
                  <input type="submit"  name="envoi" class="bouton_inscription_suite" value=" S'inscrire">
                
                </form>
        </div>
        
        <h2 class="deja_un_compte"> J'ai dejà un <a href="./compte.php"> compte  </a><h2>

    </div>
</body>
</html>