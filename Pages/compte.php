<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link href="./style/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon compte</title>
</head>
<body>
    <h1>Indentifiez Vous :</h1>

    <div class="section">
        <div class="container">
            <h2>Se connecter</h2>
                <form action="connexion_action.php" method="get" class="connexion">
                    <div class="connexion_email">
                        <input type="email" name="email" placeholder="Votre Email">
                    </div>
                    <div class="connexion_motdepasse">
                        <input type="password" name="passeword" placeholder="Votre mot de passe">
                    </div>
                        <a href="./mdp_oublie.html">Mot de passe oublié</a>
                    <div class="bouton_connexion">
                        <input type="submit" value="Connexion">
                    </div>
                    <br>
                    <h2>Nouveau client ?</h2>
                    <div class="bouton_inscription">
                        <input type="submit" value="Créez un compte">
                    </div>
                </form>
        </div>
    </div>

</body>
</html>