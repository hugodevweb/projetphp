<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link href="../style/main.css" rel="stylesheet">
    <link href="../style/fondsvg.css" rel="stylesheet">
    <link href="../style/index.css" rel="stylesheet">
    <link rel="icon" href="../images/logo_diggit.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>DIGGIT.ME- Acceuil</title>
</head>

<body>
  <?php
    session_start();
   
    
    ?>
  <!-- -----------Premiere ligne du navbar------ -->
  <header>
    
    <div class="header-main">
      <nav class="navbar" role="navigation" aria-label="main navigation">
        
        <div id="nav_menu1" class="navbar-menu">

       
          <div class="navbar-brand">
          <a class="navbar-item" href="./index.php">
            <img id="logo" src="../images/diggit.png" width="200px" height="auto" alt="Bulma logo">
          </a>
</div>   <div class="navbar-start">
            <div class="navbar-item has-text-centered">
            
              <form>
                <div class="field has-addons">
                  <div class="dropdown-trigger">
                    <div class="cont">
                      <div class="control">
                        <input id="rech" class="input" type="text" placeholder="Chercher un composant">
                      </div>
                      <div class="control">
                        <button id="rechbtn" class="button" type="submit"><img type="sub" class="loupe"
                            src="../images/loupe.png" alt="loupe"></button>
                      </div>
                      <div class="dropdown" id="search-results-dropdown">
                        <div class="dropdown-menu2" id="dropdown-menu" role="menu">
                          <div class="dropdown-content2" id="search-results">
                            <!-- Les résultats de la requête seront ajoutés ici -->
                          </div>
                        </div>
                      </div>
                    </div>
              </form>
            </div>

          </div>


        </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item has-text-centered">
        <?php
                        if(isset($_SESSION['mail'])) {
                            echo'<div class="dropdown">
                            <div class="dropdown-trigger">
                                <button id="btn" class="button is-dark">
                                    <span class="icon">
                                        <i class="fa fa-user"></i>

                                    </span>
                                    <span>Mon compte</span>
                                </button>
                            </div>
                            <div class="dropdown-menu is-dark" id="dropdown-menu3" role="menu">
                                <div class="dropdown-content">
                                    
                                    <a href="#" class="dropdown-item">
                                        Mon compte
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Mes configurations
                                    </a>
                                    
                                    <hr class="dropdown-divider">
                                    <a href="./Pages/deconnexion.php" class="dropdown-item">
                                        Se Deconnecter
                                    </a>
                                </div>
                            </div>
                        </div>
                        <button style="margin-left:2%" id="btnpanier" class="button is-white">
                            <span class="icon has-text-dark">
                                <img src="./images/cart.gif" alt="cart">

                            </span>
                            <span href="">Panier</span>
                        </button>
                    
                </div>';
                        } else {
                            echo '
                            <div class="dropdown">
                                <div class="dropdown-trigger">
                                    <button id="btn" class="button is-dark" data-target="#modal-id" data-toggle="modal">
                                        <span  class="icon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <p> Se Connecter</p>
                                    </button>
                                </div>
                                <div class="modal" id="modal-id">
                                    <div class="modal-background"></div>
                                    <div class="modal-content">

                                        <div id="container">

                                            <form class="form_compte" action="./Pages/connexion_action.php" method="POST">
                                                <h1>Se connecter</h1>

                                                <div class="field">
                                                    <label class="label">Votre Email</label>
                                                    <div class="control">
                                                        <input class="input" name="mail" type="email"
                                                            placeholder="Votre email">
                                                    </div>
                                                </div>

                                                <div class="field">
                                                    <label class="label">Votre mot de passe</label>
                                                    <div class="control">
                                                        <input class="input" name="mdp" type="password"
                                                            placeholder="Votre mot de passe">
                                                    </div>
                                                </div>



                                                <p><a href="https://www.google.com">Mot de passe oublié ?</a></p>

                                                <input type="submit" name="envoi" class="bouton_connexion"
                                                    value=" Connexion">
                                            </form>
                                        </div>

                                        
                                        <button class="modal-close is-large" aria-label="close"></button>
                                    </div>

                                </div>
                                <button id="btn2" class="button is-white" style="margin-left:2%" data-target="#modal-id-2" data-toggle="modal">
                                    <span class="icon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    <p>S\'inscrire</p>
                                </button>
                            </div>
                            <div class="modal" id="modal-id-2">
                                <div class="modal-background"></div>
                                    <div class="modal-content">
                                    <div class ="container_inscription">
            
            <form class = "form_inscription" action="./Pages/inscription_action.php" method="POST">
            <h1>Mon inscription</h1>
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

                <div class="field">
                  <label class="label">Pseudo</label>
                      <div class="control">
                        <input class="input" name="pseudo" type="text" placeholder="Votre pseudo">
                      </div>
                  </div>
                  
                 
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
                       
                        <div class="control">
                            <label class="radio">
                                <input type="radio" name="genre" value="Homme">
                                Homme
                            </label>
                            <label class="radio">
                                <input type="radio" name="genre" value="Femme">
                                Femme
                            </label>
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


                  
                  <div class="columns">
                    <div class="column is-two-fifths">
                        <label class="label">Code postal</label>
                        <div class="control">
                          <input class="input" name="codepostal" type="text" placeholder="Code postal">
                        </div>
                    </div>
                    <div class="column"></div>
                    <div class="column is-two-fifths"><label class="label">Ville</label>
                        <div class="control">
                          <input class="input" name="ville" type="text" placeholder="Ville">
                        </div>
                    </div>
                    
                 
            </div>
    
    </button>
      
    <div id="btn_inscription" class="field">
    <a class="fancy" href="#">
    <span class="top-key"></span>
    <span class="text">S\'inscrire</span>
    <span class="bottom-key-1"></span>
    <span class="bottom-key-2"></span>
  </a>      </div>
  </div> 
                </form>
                
    
                                    </div>
                                <button class="modal-close is-large" aria-label="close"></button>
                            </div>';
                        }
                        ?>
      </div>

    </div>
    </nav>
    </div>
    <!-- -----------Deuxieme ligne du navbar------ -->

    <div class="header-secondary">
      <nav class="secondary-navbar">
        <div class="container">


          <div id="secondaryNavbar" class="navbar-menu">
            <div class="navbar-start" >
              <a class="navbar-item" href="../index.php" style="border-left: 1px solid white;">
                Accueil
              </a>

              <a class="navbar-item" href="./CréationPc.php">
                Creer une configuration
              </a>

              <a class="navbar-item" href="./commu.php">
                Communauté
              </a>

              <a class="navbar-item" href="./a_propos.php">
                A propos
              </a>
            </div>
          </div>

        </div>
    </div>
    </nav>
  </header>
    <!----header---->



    <!---------------------container--------------------------------->
    <div class="background--custom">
        <section class="hero">
            <div class="hero-body">
            <div id="pres" class="box has-text-centered has-background-white ">
            <h1 style="font-family: 'Montserrat', sans-serif;" class="title is-2">A propos de Diggit.me
            </h1>
            <p>Diggit.me est un site qui vous permet de créer facilement des configurations de PC personnalisées en sélectionnant les composants de votre choix.  Vous pouvez sélectionner les composants de votre choix tels que la carte mère, le processeur, la mémoire vive, la carte graphique, le stockage, etc. et voir le coût total de la configuration. <br><br>

En utilisant Diggit.me, vous pouvez également comparer les caractéristiques des différents composants pour faire des choix éclairés . Vous pouvez également sauvegarder vos configurations pour les consulter plus tard ou les partager avec des amis. <br><br>

Le site est très facile à utiliser, avec une interface utilisateur intuitive et une recherche rapide pour trouver les composants que vous recherchez. Il est également mis à jour régulièrement avec les derniers composants disponibles sur le marché, ce qui vous garantit de toujours avoir accès aux dernières technologies. <br><br>

En somme, Diggit.me est un outil idéal pour les amateurs de PC qui cherchent à construire leur propre ordinateur personnalisé en choisissant les composants qui leur conviennent le mieux. Il est facile à utiliser, à jour et vous permet de faire des économies en comparant les prix des composants.</p>
            </div>
            </div>
        </section>
    </div>

    <!-------------Footer-------------->
    <div class="footer">
        <div class="container">
            <div class="rang">
                <div class="footer_col1">
                    <h3>Télécharger notre application</h3>
                    <p>Télécharger notre application maintenant sur Android et IOS</p>
                    <div class="app_logo">
                        <a href="https://play.google.com/store/search?q=footprint"><img class="playstr"
                                src="../images/playstore.png"></a>
                        <a href="https://www.apple.com/fr/ios/app-store/"><img class="appstr"
                                src="../images/appstore.png"></a>
                    </div>
                </div>
                <div class="footer_col2">
                    <img src="../images/diggit.png">
                    <p>Notre objectif est de rendre agréable et accessible l'achat et le montage d'ordinateurs
                    </p>
                </div>
                <div class="footer_col3">
                    <h3>Suivez-nous</h3>
                    <ul>
                        <li><a href="https://www.instagram.com/">Instagram</a></li>
                        <li><a href="https://www.twitter.com/">Twitter</a></li>
                        <li><a href="https://www.Facebook.com/">Facebook</a></li>
                        <li><a href="https://www.youtube.com/">youtube</a></li>




                    </ul>

                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2022 - DIGGIT.ME</p>
        </div>
    </div>


    <script src="../scripts/index.js"></script>
    <script src="../scripts/main.js"></script>
    <script src="../scripts/recherche2.js"></script>
</body>

</html>