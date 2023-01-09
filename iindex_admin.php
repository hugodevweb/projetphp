<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link href="./style/main.css" rel="stylesheet">
    <link href="./style/fondsvg.css" rel="stylesheet">
    <link href="./style/index.css" rel="stylesheet">
    <link rel="icon" href="./images/logo_diggit.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>DIGGIT.ME- Acceuil</title>
</head>

<body>
    <!-- -----------Premiere ligne du navbar------ -->
    <header>
        <div class="header-main">
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item" href="#">
                        <img id="logo" src="./images/diggit.png" width="200px" height="auto" alt="Bulma logo">
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
                            <div class="field has-addons">
                                <div class="control">
                                    <input id="rech" class="input" type="text" placeholder="Chercher un composant ">
                                </div>
                                <div class="control">
                                    <button class="button" type="submit"><img type="sub" class="loupe"
                                            src="./images/loupe.png" alt="loupe"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="navbar-end">
                        <div class="navbar-item has-text-centered">

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

                                            <form class="form_compte" action="connexion_action.php" method="POST">
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
                                    <p>S'inscrire</p>
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
                  <input type="submit"  name="envoi" class="bouton_inscription_suite" value=" S'inscrire">
                </form>
                
        </div>
                                    </div>
                                <button class="modal-close is-large" aria-label="close"></button>
                            </div>
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
                            <a class="navbar-item" href="#" style="border-left: 1px solid white;">
                                Acceuil
                            </a>

                            <a class="navbar-item" href="./Pages/CréationPc.php">
                                Creer une configuration
                            </a>

                            <a class="navbar-item" href="#">
                                Communauté
                            </a>

                            <a class="navbar-item" href="#">
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

                <div class="columns">
                    <div class="column"></div>
                    <div class="column is-three-fifths">
                        <article id="article" class="message is-dark">

                            <div class="message-body">
                                <div class="columns">
                                    <div class="column">
                                            <img style="height:150px; width:auto;" src="./images/welcome.gif">
                                    </div>
                                    <div class="column is-four-fifths">
                                        <h1 class="title" style="margin-top:3%">
                                            Bienvenu sur DIGIT.ME
                                        </h1>
                                        <h2 class="subtitle ">
                                            Votre configurateur de PC personnalisés
                                        </h2>
                                    </div>
                                </div>
                        </article>
                    </div>
                
                <div class="column is-half"></div>
                </div>
            </div>
            

        </section>

        <div id="pres" class="box has-text-centered has-background-white ">
            <div class="title-1">Les configurations recommandées:</div>
            <div class="columns">
                <div class="column">
                    <img class="itemImage"
                        src=" https://drive.google.com/uc?export=view&id=1yISIheYIGKs0QExWuAExO9-UMVv33fPc">
                    <span>
                        <span>
                            <p> <img class="icon" src="./images/icons/desktop.png">composant 1</p>
                        </span>
                        <span>
                            <p> <img class="icon" src="./images/icons/cpu.png">composant 2</p>
                        </span>
                        <span>
                            <p> <img class="icon" src="./images/icons/video-card.png">composant 3</p>
                        </span>

                    </span>
                    <button class="prebuild">Voir ></button>
                </div>
                <div class="column">
                    <img class="itemImage" src="https://media.ldlc.com/r150/ld/products/00/05/55/02/LD0005550244_2.jpg">
                    <span>
                        <span>
                            <p> <img class="icon" src="./images/icons/desktop.png">composant 1</p>
                        </span>
                        <span>
                            <p> <img class="icon" src="./images/icons/cpu.png">composant 2</p>
                        </span>
                        <span>
                            <p> <img class="icon" src="./images/icons/video-card.png">composant 3</p>
                        </span>

                    </span>

                    </span>
                    <button class="prebuild">Voir ></button>
                </div>
                <div class="column">
                    <img class="itemImage" src="https://media.ldlc.com/r150/ld/products/00/05/55/02/LD0005550244_2.jpg">
                    <span>
                        <span>
                            <p> <img class="icon" src="./images/icons/desktop.png">composant 1</p>
                        </span>
                        <span>
                            <p> <img class="icon" src="./images/icons/cpu.png">composant 2</p>
                        </span>
                        <span>
                            <p> <img class="icon" src="./images/icons/video-card.png">composant 3</p>
                        </span>

                    </span>
                    <button class="prebuild">Voir ></button>
                </div>
            </div>
        </div>
        <div id="pres" class="box has-text-centered has-background-white ">
            <div class="title-1">Les composants populaires:</div>
            <ul class="composants">
                <li>
                    <div class="title-3">Processeur</div>
                    <img class="composant-child" src="./images/icons/cpu.png">
                    <ol>
                    <?php
                        // Connexion à la base de données
                        $host = "localhost";
                        $user = "root";
                        $password = "";
                        $dbname = "digit.me";

                        $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                        $stmt = $pdo->prepare("SELECT NAME,brand FROM composants_cpu WHERE is_selected=1;");

                        $stmt->execute();
                        
                        
                        while ($row = $stmt->fetch()) {
                          
                           echo "<form class=\"form_compte\" action=\"./Pages/selection.php?type=cpu\" method=\"POST\">";
                            echo "<div class=\"select\">
                            <select id=\"mySelect\" name=\"selectedOption\"><option class=\"is-size-8\"><b>".$row['NAME']."</option>";

                            $stmt2 = $pdo->prepare("SELECT NAME,brand FROM composants_cpu");

                            $stmt2->execute();
                            while ($row2 = $stmt2->fetch()) {
                                echo"
                                <option class=\"is-size-8\"><b>".$row2['NAME']."</option>";
 }                       
                            echo"                     
                              
                            </select>          
                            </div>
                            "
                            ; 
                            echo "<div class=\"control\">
                        <button class=\"button is-primary\" onclick=\"displaySelectedIndex()\">Submit</button>
                        <div class=\"control\">
                        <label class=\"radio\">
                            <input type=\"radio\" name=\"answer\" value=\"supprimer\">
                            Supprimer
                        </label>
                        <label class=\"radio\">
                            <input type=\"radio\" name=\"answer\" value=\"ajouter\">
                            Ajouter
                        </label>
                        </div>
                        </div></form> ";
                        }
                        ?>
                       
                    </ol>

                </li>
                <li>
                    <div class="title-3">Carte Mere</div>
                    <img class="composant-child" src="./images/icons/motherboard.png">
                    <ol>
                    <?php
                        // Connexion à la base de données
                        $host = "localhost";
                        $user = "root";
                        $password = "";
                        $dbname = "digit.me";

                        $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                        $stmt = $pdo->prepare("SELECT NAME,brand FROM composants_board WHERE is_selected=1;");

                        $stmt->execute();
                        
                        
                        while ($row = $stmt->fetch()) {
                          
                           echo "<form class=\"form_compte\" action=\"./Pages/selection.php?type=board\" method=\"POST\">";
                            echo "<div class=\"select\">
                            <select id=\"mySelect\" name=\"selectedOption\"><option class=\"is-size-8\"><b>".$row['NAME']."</option>";

                            $stmt2 = $pdo->prepare("SELECT NAME,brand FROM composants_board");

                            $stmt2->execute();
                            while ($row2 = $stmt2->fetch()) {
                                echo"
                                <option class=\"is-size-8\"><b>".$row2['NAME']."</option>";
 }                       
                            echo"                     
                              
                            </select>          
                            </div>
                            "
                            ; 
                            echo "<div class=\"control\">
                        <button class=\"button is-primary\" onclick=\"displaySelectedIndex()\">Submit</button>
                        <div class=\"control\">
                        <label class=\"radio\">
                            <input type=\"radio\" name=\"answer\" value=\"supprimer\">
                            Supprimer
                        </label>
                        <label class=\"radio\">
                            <input type=\"radio\" name=\"answer\" value=\"ajouter\">
                            Ajouter
                        </label>
                        </div>
                        </div></form> ";
                        }
                        ?>
                       
                    </ol>

                </li>
                <li>
                    <div class="title-3">RAM</div>
                    <img class="composant-child" src="./images/icons/ram-memory.png">
                    <ol>
                    <?php
                        // Connexion à la base de données
                        $host = "localhost";
                        $user = "root";
                        $password = "";
                        $dbname = "digit.me";

                        $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                        $stmt = $pdo->prepare("SELECT NAME,brand FROM composants_ram WHERE is_selected=1;");

                        $stmt->execute();
                        
                        
                        while ($row = $stmt->fetch()) {
                          
                           echo "<form class=\"form_compte\" action=\"./Pages/selection.php?type=ram\" method=\"POST\">";
                            echo "<div class=\"select\">
                            <select id=\"mySelect\" name=\"selectedOption\"><option class=\"is-size-8\"><b>".$row['NAME']."</option>";

                            $stmt2 = $pdo->prepare("SELECT NAME,brand FROM composants_ram");

                            $stmt2->execute();
                            while ($row2 = $stmt2->fetch()) {
                                echo"
                                <option class=\"is-size-8\"><b>".$row2['NAME']."</option>";
 }                       
                            echo"                     
                              
                            </select>          
                            </div>
                            "
                            ; 
                            echo "<div class=\"control\">
                        <button class=\"button is-primary\" onclick=\"displaySelectedIndex()\">Submit</button>
                        <div class=\"control\">
                        <label class=\"radio\">
                            <input type=\"radio\" name=\"answer\" value=\"supprimer\">
                            Supprimer
                        </label>
                        <label class=\"radio\">
                            <input type=\"radio\" name=\"answer\" value=\"ajouter\">
                            Ajouter
                        </label>
                        </div>
                        </div></form> ";
                        }
                        ?>
                       
                    </ol>

                </li>
                <li>
                    <div class="title-3">Carte Graphique</div>
                    <img class="composant-child" src="./images/icons/video-card.png">
                    <ol>
                    <?php
                        // Connexion à la base de données
                        $host = "localhost";
                        $user = "root";
                        $password = "";
                        $dbname = "digit.me";

                        $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                        $stmt = $pdo->prepare("SELECT NAME,brand FROM composants_gpu WHERE is_selected=1;");

                        $stmt->execute();
                        
                        
                        while ($row = $stmt->fetch()) {
                          
                           echo "<form class=\"form_compte\" action=\"./Pages/selection.php?type=gpu\" method=\"POST\">";
                            echo "<div class=\"select\">
                            <select id=\"mySelect\" name=\"selectedOption\"><option class=\"is-size-8\"><b>".$row['NAME']."</option>";

                            $stmt2 = $pdo->prepare("SELECT NAME,brand FROM composants_gpu");

                            $stmt2->execute();
                            while ($row2 = $stmt2->fetch()) {
                                echo"
                                <option class=\"is-size-8\"><b>".$row2['NAME']."</option>";
 }                       
                            echo"                     
                              
                            </select>          
                            </div>
                            "
                            ; 
                            echo "<div class=\"control\">
                        <button class=\"button is-primary\" onclick=\"displaySelectedIndex()\">Submit</button>
                        <div class=\"control\">
                        <label class=\"radio\">
                            <input type=\"radio\" name=\"answer\" value=\"supprimer\">
                            Supprimer
                        </label>
                        <label class=\"radio\">
                            <input type=\"radio\" name=\"answer\" value=\"ajouter\">
                            Ajouter
                        </label>
                        </div>
                        </div></form> ";
                        }
                        ?>
                       
                    </ol>

                </li>
                <li>
                    <div class="title-3">Alimentation</div>
                    <img class="composant-child" src="./images/icons/supply.png">
                    <ol>
                    <?php
                        // Connexion à la base de données
                        $host = "localhost";
                        $user = "root";
                        $password = "";
                        $dbname = "digit.me";

                        $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                        $stmt = $pdo->prepare("SELECT NAME,brand FROM composants_alim WHERE is_selected=1;");

                        $stmt->execute();
                        
                        
                        while ($row = $stmt->fetch()) {
                          
                           echo "<form class=\"form_compte\" action=\"./Pages/selection.php?type=alim\" method=\"POST\">";
                            echo "<div class=\"select\">
                            <select id=\"mySelect\" name=\"selectedOption\"><option class=\"is-size-8\"><b>".$row['NAME']."</option>";

                            $stmt2 = $pdo->prepare("SELECT NAME,brand FROM composants_gpu");

                            $stmt2->execute();
                            while ($row2 = $stmt2->fetch()) {
                                echo"
                                <option class=\"is-size-8\"><b>".$row2['NAME']."</option>";
 }                       
                            echo"                     
                              
                            </select>          
                            </div>
                            "
                            ; 
                            echo "<div class=\"control\">
                        <button class=\"button is-primary\" onclick=\"displaySelectedIndex()\">Submit</button>
                        <div class=\"control\">
                        <label class=\"radio\">
                            <input type=\"radio\" name=\"answer\" value=\"supprimer\">
                            Supprimer
                        </label>
                        <label class=\"radio\">
                            <input type=\"radio\" name=\"answer\" value=\"ajouter\">
                            Ajouter
                        </label>
                        </div>
                        </div></form> ";
                        }
                        ?>
                       
                    </ol>
                </li>
                <li>
                    <div class="title-3">Boitier</div>
                    <img class="composant-child" src="./images/icons/desktop.png">
                    <ol>
                    <?php
                        // Connexion à la base de données
                        $host = "localhost";
                        $user = "root";
                        $password = "";
                        $dbname = "digit.me";

                        $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                        $stmt = $pdo->prepare("SELECT NAME,brand FROM composants_gpu WHERE is_selected=1;");

                        $stmt->execute();
                        
                        
                        while ($row = $stmt->fetch()) {
                          
                           echo "<form class=\"form_compte\" action=\"./Pages/selection.php?type=case\" method=\"POST\">";
                            echo "<div class=\"select\">
                            <select id=\"mySelect\" name=\"selectedOption\"><option class=\"is-size-8\"><b>".$row['NAME']."</option>";

                            $stmt2 = $pdo->prepare("SELECT NAME,brand FROM composants_case");

                            $stmt2->execute();
                            while ($row2 = $stmt2->fetch()) {
                                echo"
                                <option class=\"is-size-8\"><b>".$row2['NAME']."</option>";
 }                       
                            echo"                     
                              
                            </select>          
                            </div>
                            "
                            ; 
                            echo "<div class=\"control\">
                        <button class=\"button is-primary\" onclick=\"displaySelectedIndex()\">Submit</button>
                        <div class=\"control\">
                        <label class=\"radio\">
                            <input type=\"radio\" name=\"answer\" value=\"supprimer\">
                            Supprimer
                        </label>
                        <label class=\"radio\">
                            <input type=\"radio\" name=\"answer\" value=\"ajouter\">
                            Ajouter
                        </label>
                        </div>
                        </div></form> ";
                        }
                        ?>
                       
                    </ol>

                </li>
                <li>
                    <div class="title-3">stockage</div>
                    <img class="composant-child" src="./images/icons/hdd.png">
                    <ol>
                       <?php
                        // Connexion à la base de données
                        $host = "localhost";
                        $user = "root";
                        $password = "";
                        $dbname = "digit.me";

                        $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                        $stmt = $pdo->prepare("SELECT NAME,brand,brand FROM composants_stockage WHERE is_selected=1;");

                        $stmt->execute();

                        while ($row = $stmt->fetch()) {
                          
                            echo "<form class=\"form_compte\" action=\"./Pages/selection.php?type=case\" method=\"POST\">";
                             echo "<div class=\"select\">
                             <select id=\"mySelect\" name=\"selectedOption\"><option class=\"is-size-8\"><b>".$row['NAME']."</option>";
 
                             $stmt2 = $pdo->prepare("SELECT NAME,brand FROM composants_case");
 
                             $stmt2->execute();
                             while ($row2 = $stmt2->fetch()) {
                                 echo"
                                 <option class=\"is-size-8\"><b>".$row2['NAME']."</option>";
  }                       
                             echo"                     
                               
                             </select>          
                             </div>
                             "
                             ; 
                             echo "<div class=\"control\">
                         <button class=\"button is-primary\" onclick=\"displaySelectedIndex()\">Submit</button>
                         <div class=\"control\">
                         <label class=\"radio\">
                             <input type=\"radio\" name=\"answer\" value=\"supprimer\">
                             Supprimer
                         </label>
                         <label class=\"radio\">
                             <input type=\"radio\" name=\"answer\" value=\"ajouter\">
                             Ajouter
                         </label>
                         </div>
                         </div></form> ";
                         }
                         ?>
                        
                     </ol>

                </li>
                <li>
                    <div class="title-3">Refroidissement</div>
                    <img class="composant-child" src="./images/icons/cooling-fan.png">
                    <ol>
                       <?php
                        // Connexion à la base de données
                        $host = "localhost";
                        $user = "root";
                        $password = "";
                        $dbname = "digit.me";

                        $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                        $stmt = $pdo->prepare("SELECT NAME,brand FROM composants_cooler WHERE is_selected=1;");

                        $stmt->execute();

                        while ($row = $stmt->fetch()) {
                            echo "<li class=\"is-size-8\"><b>".$row['brand']."</b> - ".$row['NAME']."</li>";
                        }             
                        ?>                    </ol>

                </li>
            </ul>

        </div>
        </div>
    
   

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
                                src="./images/playstore.png"></a>
                        <a href="https://www.apple.com/fr/ios/app-store/"><img class="appstr"
                                src="./images/appstore.png"></a>
                    </div>
                </div>
                <div class="footer_col2">
                    <img src="./images/diggit.png">
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
            <p class="copyright">Copyright 2022 - DIGIT.ME</p>
        </div>
    </div>
    <form>
  

    <script src="./scripts/index.js"></script>
    <script>
function displaySelectedIndex() {
  var select = document.getElementById("mySelect");
  var selectedIndex = select.selectedIndex;
}
</script>
</body>

</html>