<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <link href="../style/main.css" rel="stylesheet">
  <link href="../style/fondsvg.css" rel="stylesheet">
  <link href="../style/index.css" rel="stylesheet">
  <link href="../style/commu.css" rel="stylesheet">
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
        <div class="navbar-brand">
          <a class="navbar-item" href="../index.php">
            <img id="logo" src="../images/diggit.png" width="200px" height="auto" alt="Bulma logo">
          </a>

          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
        <div class="navbar-menu">
          <div class="navbar-start">
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
                                    <a href="../Pages/deconnexion.php" class="dropdown-item">
                                        Se Deconnecter
                                    </a>
                                </div>
                            </div>
                        </div>
                        <button style="margin-left:2%" id="btnpanier" class="button is-white">
                            <span class="icon has-text-dark">
                                <img src="../images/cart.gif" alt="cart">

                            </span>
                            <span href="">Panier</span>
                        </button>
                    
                </div>';
                        } else {
                            echo '
                            <div class="dropdown">
                                <div class="dropdown-trigger">
                                    <button id="btn" class="button is-dark" data-target="#modal-id" data-toggle="modal">
                                        <span class="icon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <p> Se Connecter</p>
                                    </button>
                                </div>
                                <div class="modal" id="modal-id">
                                    <div class="modal-background"></div>
                                    <div class="modal-content">

                                        <div id="container">

                                            <form class="form_compte" action="../Pages/connexion_action.php" method="POST">
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
            
            <form class = "form_inscription" action="../Pages/inscription_action.php" method="POST">
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
                  <input type="submit"  name="envoi" class="bouton_inscription_suite" value=" S\'inscrire">
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
            <div class="navbar-start" style="margin-left: 8vw;">
              <a class="navbar-item" href="../index.php" style="border-left: 1px solid white;">
                Acceuil
              </a>

              <a class="navbar-item" href="../Pages/CréationPc.php">
                Creer une configuration
              </a>

              <a class="navbar-item" href="#">
                Communauté
              </a>

              <a class="navbar-item" href="../Pages/a_propos.php">
                A propos
              </a>
            </div>
          </div>

        </div>
    </div>
    </nav>
  </header>
  <!----header---->



  <!---------------------config prefaites--------------------------------->

  <div class="background--custom">
    <section class="hero">
      <div class="hero-body">
             <div id="pres" class="box has-text-centered has-background-white ">
                <div class="title-1">Les configurations de la Communauté:</div>
                <hr class="dropdown-divider">
                <div style ="margin-top:2vh;" class="columns">
                  <div class="column is-one-fifth" >alalla</div> 
                  <div class="is-divider-vertical" ></div>
                  <div class="column" >
                    <div class="columns">
                      <div id="config" class="column" >
                        <div class="head">
                          <span class="user">
                              <img  class="icon" src="../images/avatar.png">
                             <p class="has-text-white" >Hugo</p>
                          </span>  
                      
                      </div>
                        <div class="img">
                        <ul class="grille">
                          <li  class="g1"> <img  src="https://drive.google.com/uc?export=view&id=1aTG6fzOgvXkfLwUKuu_iKayreqiaUwsd"></li>
                         

                          

                        
                          <li class="g2"><img  src="https://drive.google.com/uc?export=view&id=1Ok1FoNKMwdzJQYy9tU9fqr6Co9nI6vPX"></li>
                          <li class="g3"><img   src=" https://drive.google.com/uc?export=view&id=1G15uq7aSegWRMeY3IEesiv-Kkf7nUddY"></li>
                          
                        </ul>
                      </div>
                        <div class="body"> lalala</div>
                        <div class="foot"> lalala</div>
                        </div>
                        <div id="config" class="column" >
                        <div class="head"> lalala</div>
                        <div class="img">lalala </div>
                        <div class="body"> lalala</div>
                        <div class="foot"> lalala</div>
                        </div>
                        <div id="config" class="column" >
                        <div class="head"> lalala</div>
                        <div class="img">lalala </div>
                        <div class="body"> lalala</div>
                        <div class="foot"> lalala</div>
                        </div>
                        <div id="config" class="column" >
                        <div class="head"> lalala</div>
                        <div class="img">lalala </div>
                        <div class="body"> lalala</div>
                        <div class="foot"> lalala</div>
                        </div>
                        

                  </div>
                </div>
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
            <a href="https://www.apple.com/fr/ios/app-store/"><img class="appstr" src="../images/appstore.png"></a>
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
  <script src="../scripts/recherche.js"></script>
</body>

</html>