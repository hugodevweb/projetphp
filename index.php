<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <link href="./style/main.css" rel="stylesheet">
  <link href="./style/fondsvg.css" rel="stylesheet">
  <link href="./style/index.css" rel="stylesheet">
<link href="./style/btn.css" rel="stylesheet">
  <link rel="icon" href="./images/logo_diggit.png" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <title>DIGGIT.ME- Accueil</title>
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
            <img id="logo" src="./images/diggit.png" width="200px" height="auto" alt="Bulma logo">
          </a>
</div>   <div class="navbar-start">
            <div class="navbar-item has-text-centered" style="
    height: 9vh;
">
            
              <form>
                <div class="field has-addons">
                  <div class="dropdown-trigger">
                    <div class="cont">
                      <div class="control">
                        <input id="rech" class="input" type="text" placeholder="Chercher un composant">
                      </div>
                      <div class="control">
                        <button id="rechbtn" class="button" type="submit"><img type="sub" class="loupe"
                            src="./images/loupe.png" alt="loupe"></button>
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
                            <div class="dropdown-menu is-dark" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content">
                                    
                                    <a href="#" class="dropdown-item">
                                        Mon compte
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Mes configurations
                                    </a>';

                                    if($_SESSION['statut']=='A'){
                                      echo'<a href="#" class="dropdown-item">+ Composants 
                                  </a>';}
                                  echo'
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
    
    
      
    <div id="btn_inscription" class="field">
    <button style="all: unset;"type="submit"><a class="fancy" >
    <span class="top-key"></span>
    <span class="text">S\'inscrire</span>
    <span class="bottom-key-1"></span>
    <span class="bottom-key-2"></span>
  </a>   </button>
       </div>
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
            <a class="navbar-item" href="./index.php" style="border-left: 1px solid white;">
                Accueil
              </a>

              <a class="navbar-item" href="./Pages/CréationPc.php">
                Creer une configuration
              </a>

              <a class="navbar-item" href="./Pages/commu.php">
                Communauté
              </a>

              <a class="navbar-item" href="./Pages/a_propos.php">
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
                    <img style="height:auto; width:auto;" src="./images/welcome.gif">
                  </div>
                  <div class="column is-four-fifths">
                    <?php 
                      if (isset($_SESSION['mail'])) {
                        echo'<h1 class="title" style="margin-top:3%">
                        Salut <b style="color:blue;" >'.$_SESSION['pseudo'].'</b>👋 bienvenu sur DIGGIT.ME
                      </h1><h2 class="subtitle ">
                      Ton configurateur de PC personnalisés
                    </h2>'; 
                      }
                      else{
                        echo'<h1 class="title" style="margin-top:3%">
                         Bienvenu sur DIGGIT.ME 👋
                      </h1><h2 class="subtitle ">
                      Votre configurateur de PC personnalisés
                    </h2>';
                      }
                    
                    ?>
                    
                    
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
      <hr id="border" class="dropdown-divider">
      
      


        <?php if(isset($_SESSION['mail'])){
                            if($_SESSION['statut']=='A'){
                                $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
                                $stmt = $pdo->prepare("SELECT composants_cpu.name AS cpu, composants_gpu.name AS gpu,composants_boitier.name as boitier,composants_boitier.img as boitierimg, configurations.nomconfig AS nom
                                FROM composants_cpu
                                JOIN tj_config_comp ON composants_cpu.id_comp = tj_config_comp.id_cpu
                                JOIN composants_gpu ON composants_gpu.id_comp = tj_config_comp.id_gpu
                                JOIN composants_boitier ON composants_boitier.id_comp = tj_config_comp.id_boitier
                                JOIN configurations ON configurations.id_config = tj_config_comp.id_config
                                WHERE tj_config_comp.is_selected = 1 or tj_config_comp.is_selected = 2 or tj_config_comp.is_selected = 3 order by tj_config_comp.is_selected ;");
   
                               $stmt->execute();
                             $index = 1;
                             echo'<button id="config-btn" class="button is-primary is-fullwidth">
                                    <span class="icon">
                                    <img style="-webkit-filter: invert(100%); /* Safari/Chrome * filter: invert(100%);" src="./images/crayon.png">
                                    </span>
                                    <span>Modifier les configurations</span>
                                </button>
                                <hr id="border" class="dropdown-divider"><div class="columns">';
                                while ($row = $stmt->fetch()) {
                                    
                                    echo '<div class="column" id="config_admin" >';
                                  
                                            echo '<div class="title-3"><b>'.$row['nom'].'</b></div>';
                                            echo '<figure class="image is-256x256">
                                                    <img src="'.$row['boitierimg'].'">
                                                  </figure>
                                                  <span>
                                                  <span>
                                                  <div id="col_compo" class="columns">
                                                  <div class="column"> <img class="icon_compo" src="./images/icons/desktop.png">  </div>
                                                  <div class="column is-four-fifths">  <p class="text_compo">'.$row['boitier'].'</p></div>
                                                    </div>
                                                  </span>
                                                  <span>
                                                  <div id="col_compo" class="columns">
                                                  <div class="column">  <img class="icon_compo" src="./images/icons/cpu.png"> </div>
                                                  <div class="column is-four-fifths">   <p class="text_compo"> '.$row['cpu'].'</p></div>
                                                    </div>
                                                     
                                                         
                                                  </span>
                                                  <span >
                                                  <div id="col_compo" class="columns">
                                                  <div class="column"> <img class="icon_compo" src="./images/icons/video-card.png">  </div>
                                                  <div class="column is-four-fifths">  <p class="text_compo"> '.$row['gpu'].'</p></div>
                                                    </div>                                                
                                                          
                                                  </span>
                                              </span>
                                        
                                        <div class="config-div" style="display: none;">
                                            

                                        <form method="POST" action="./Pages/config_acceuil.php?id_config='.$index.'">
                                        <div class="select">
                                        <select id="select_config" name="config" onchange="this.form.submit()">
                                        <option class="is-size-8"><b>'.$row['nom'].'</b></option>
                                       ';
    
                                       $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
                                       $stmt2 = $pdo->prepare("SELECT configurations.nomconfig AS nom,tj_config_comp.id_config AS id_config
                                       FROM composants_cpu
                                       JOIN tj_config_comp ON composants_cpu.id_comp = tj_config_comp.id_cpu
                                       JOIN composants_gpu ON composants_gpu.id_comp = tj_config_comp.id_gpu
                                       JOIN composants_boitier ON composants_boitier.id_comp = tj_config_comp.id_boitier
                                       JOIN configurations ON configurations.id_config = tj_config_comp.id_config where tj_config_comp.is_selected=0 order by tj_config_comp.is_selected ");
                                        
                                      $stmt2->execute();
                                      while ($row = $stmt2->fetch()) {
                                        echo'<option class="is-size-8" value="'.$row['id_config'].'"><b>'.$row['nom'].'</b></option>';
    
                                      }
                                 
                                    echo'</select></div></form>




                                        </div>
                                   </div>';
                                   $index++;
                                }
                                  
                                   
                               
                                                       
                              } 
                        else {
                             $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
                             $stmt = $pdo->prepare("SELECT composants_cpu.name AS cpu, composants_gpu.name AS gpu,composants_boitier.name as boitier,composants_boitier.img as boitierimg, configurations.nomconfig AS nom
                             FROM composants_cpu
                             JOIN tj_config_comp ON composants_cpu.id_comp = tj_config_comp.id_cpu
                             JOIN composants_gpu ON composants_gpu.id_comp = tj_config_comp.id_gpu
                             JOIN composants_boitier ON composants_boitier.id_comp = tj_config_comp.id_boitier
                             JOIN configurations ON configurations.id_config = tj_config_comp.id_config
                             WHERE tj_config_comp.is_selected = 1 or tj_config_comp.is_selected = 2 or tj_config_comp.is_selected = 3 order by tj_config_comp.is_selected ;");
                            echo'<div class="columns" style="margin:15px;gap:3vh">';
                            $stmt->execute();
                            while ($row = $stmt->fetch()) {
                              
                                echo'
                                <div class="column" id="card">
                                  <div class="card-details">
                                    
                                  
                                <div id="config_acc" >
                                <div class="title-3"><b>'.$row['nom'].'</b></div>

                               

                                <img class="img_boitier" style="mix-blend-mode: multiply;"
                                    src="'.$row['boitierimg'].'">
                                    
                               
                                  <span>
                                      <span class="liste">
                                      <img class="icon" src="./images/icons/desktop.png">  <p>'.$row['boitier'].'</p>
                                      </span>
                                      <span class="liste">
                                      <img class="icon" src="./images/icons/cpu.png">
                                          <p> '.$row['cpu'].'</p>
                                      </span>
                                      <span class="liste">
                                      <img class="icon" src="./images/icons/video-card.png">  <p> '.$row['gpu'].'</p>
                                      </span>
              
                                  </span>
                            </div>
                            </div>
                                  <button class="card-button">+ Ajouter</button>
                                </div>
                            
                            ';

                            }
                        }} else {
                          $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
                          $stmt = $pdo->prepare("SELECT composants_cpu.name AS cpu, composants_gpu.name AS gpu,composants_boitier.name as boitier,composants_boitier.img as boitierimg, configurations.nomconfig AS nom
                          FROM composants_cpu
                          JOIN tj_config_comp ON composants_cpu.id_comp = tj_config_comp.id_cpu
                          JOIN composants_gpu ON composants_gpu.id_comp = tj_config_comp.id_gpu
                          JOIN composants_boitier ON composants_boitier.id_comp = tj_config_comp.id_boitier
                          JOIN configurations ON configurations.id_config = tj_config_comp.id_config
                          WHERE tj_config_comp.is_selected = 1 or tj_config_comp.is_selected = 2 or tj_config_comp.is_selected = 3 order by tj_config_comp.is_selected ;");
                         echo'<div class="columns" style="margin:15px;gap:3vh">';
                         $stmt->execute();
                         while ($row = $stmt->fetch()) {
                           
                             echo'
                             <div class="column" id="card">
                               <div class="card-details">
                                 
                               
                             <div id="config_acc" >
                             <div class="title-3"><b>'.$row['nom'].'</b></div>

                            

                             <img class="img_boitier" style="mix-blend-mode: multiply;"
                                 src="'.$row['boitierimg'].'">
                                 
                            
                               <span>
                                   <span class="liste">
                                   <img class="icon" src="./images/icons/desktop.png">  <p>'.$row['boitier'].'</p>
                                   </span>
                                   <span class="liste">
                                   <img class="icon" src="./images/icons/cpu.png">
                                       <p> '.$row['cpu'].'</p>
                                   </span>
                                   <span class="liste">
                                   <img class="icon" src="./images/icons/video-card.png">  <p> '.$row['gpu'].'</p>
                                   </span>
           
                               </span>
                         </div>
                         </div>
                               <button class="card-button">+ Ajouter</button>
                             </div>
                         
                         ';

                         }
                     }
                             ?>
      </div>
      </div>
  

    <div id="pres" class="box has-text-centered has-background-white ">
      <div class="title-1">Les composants populaires:</div>
      <hr class="dropdown-divider">
      <ul class="composants">
        <li>
          <div class="title-3">Processeur
          </div>
          <img class="composant-child" src="./images/icons/cpu.png">
          <ol >
            <?php
                        if(isset($_SESSION['mail'])){
                            if($_SESSION['statut']=='A'){
                            // Connexion à la base de données
                           

                            $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                            $stmt = $pdo->prepare("SELECT NAME,brand FROM composants_cpu WHERE is_selected=1;");

                            $stmt->execute();
                            
                            
                            while ($row = $stmt->fetch()) {
                            
                            echo "<form class=\"form_compte\" action=\"./Pages/selection.php?type=cpu\" method=\"POST\">";
                                echo "<div class=\"select\">
                                <select id=\"mySelect\" name=\"selectedOption\"><option class=\"is-size-8\"><b>".$row['NAME']."</option>";

                                $stmt2 = $pdo->prepare("SELECT NAME,brand FROM composants_cpu WHERE is_selected=0");

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
                            <div class=\"control\">
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"answer\" value=\"supprimer\">
                                Supprimer
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"answer\" value=\"ajouter\">
                                Ajouter
                            </label>
                            <button class=\"button is-primary\" onclick=\"displaySelectedIndex()\">Submit</button>

                            </div>
                            </div></form> ";
                        }

                            }else{
                        

                            $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                            $stmt = $pdo->prepare("SELECT id_comp,NAME,brand,puissance FROM composants_cpu WHERE is_selected=1;");

                            $stmt->execute();

                            while ($row = $stmt->fetch()) {
                                echo "<li class=\"is-size-8\"><a href=\"./Pages/Composants.php?composant=".$row['id_comp']."&type=composants_cpu\"><b>".$row['brand']."</b> - ".$row['NAME']." - ".$row['puissance']."Ghz</a></li>";
                                
                            }   
                        } }
                    ?>
          </ol>

        </li>
        <li>
          <div class="title-3">Carte Mère</div>
          <img class="composant-child" src="./images/icons/motherboard.png">
          <ol>
            <?php
                        if(isset($_SESSION['mail'])){
                            if($_SESSION['statut']=='A'){
                            // Connexion à la base de données
                             

                            $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                            $stmt = $pdo->prepare("SELECT NAME,brand FROM composants_board WHERE is_selected=1;");

                            $stmt->execute();
                            
                            
                            while ($row = $stmt->fetch()) {
                            
                            echo "<form class=\"form_compte\" action=\"./Pages/selection.php?type=board\" method=\"POST\">";
                                echo "<div class=\"select\">
                                <select id=\"mySelect\" name=\"selectedOption\"><option class=\"is-size-8\"><b>".$row['NAME']."</option>";

                                $stmt2 = $pdo->prepare("SELECT NAME,brand FROM composants_board WHERE is_selected=0;");

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
                            <div class=\"control\">
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"answer\" value=\"supprimer\">
                                Supprimer
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"answer\" value=\"ajouter\">
                                Ajouter
                            </label>
                            <button class=\"button is-primary\" onclick=\"displaySelectedIndex()\">Submit</button>

                            </div>
                            </div></form> ";
                        }

                            }else{
                        

                            $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                            $stmt = $pdo->prepare("SELECT id_comp,NAME,brand FROM composants_board WHERE is_selected=1;");

                            $stmt->execute();

                            while ($row = $stmt->fetch()) {
                                echo "<li class=\"is-size-8\"><a href=\"./Pages/Composants.php?composant=".$row['id_comp']."&type=composants_board\"><b>".$row['brand']."</b> - ".$row['NAME']."</a></li>";
                                
                            }   
                        } }
                    ?>
          </ol>

        </li>
        <li>
          <div class="title-3">RAM</div>
          <img class="composant-child" src="./images/icons/ram-memory.png">
          <ol>
            <?php
                        if(isset($_SESSION['mail'])){
                            if($_SESSION['statut']=='A'){
                            // Connexion à la base de données
                             

                            $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                            $stmt = $pdo->prepare("SELECT NAME,brand FROM composants_ram WHERE is_selected=1;");

                            $stmt->execute();
                            
                            
                            while ($row = $stmt->fetch()) {
                            
                            echo "<form class=\"form_compte\" action=\"./Pages/selection.php?type=ram\" method=\"POST\">";
                                echo "<div class=\"select\">
                                <select id=\"mySelect\" name=\"selectedOption\"><option class=\"is-size-8\"><b>".$row['NAME']."</option>";

                                $stmt2 = $pdo->prepare("SELECT NAME,brand FROM composants_ram WHERE is_selected=0;");

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
                           
                            <div class=\"control\">
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"answer\" value=\"supprimer\">
                                Supprimer
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"answer\" value=\"ajouter\">
                                Ajouter
                            </label>
                            <button class=\"button is-primary\" onclick=\"displaySelectedIndex()\">Submit</button>
                            </div>
                            </div></form> ";
                        }

                            }else{
                        

                            $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                            $stmt = $pdo->prepare("SELECT id_comp,NAME,brand FROM composants_ram WHERE is_selected=1;");

                            $stmt->execute();

                            while ($row = $stmt->fetch()) {
                                echo "<li class=\"is-size-8\"><a href=\"./Pages/Composants.php?composant=".$row['id_comp']."&type=composants_ram\"><b>".$row['brand']."</b> - ".$row['NAME']."</a></li>";
                                
                            }   
                        } }
                    ?>
          </ol>

        </li>
        <li>
          <div class="title-3">Carte Graphique</div>
          <img class="composant-child" src="./images/icons/video-card.png">
          <ol>
            <?php
                       if(isset($_SESSION['mail'])){
                            if($_SESSION['statut']=='A'){
                            // Connexion à la base de données
                             

                            $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                            $stmt = $pdo->prepare("SELECT NAME,brand FROM composants_gpu WHERE is_selected=1;");

                            $stmt->execute();
                            
                            
                            while ($row = $stmt->fetch()) {
                            
                            echo "<form class=\"form_compte\" action=\"./Pages/selection.php?type=gpu\" method=\"POST\">";
                                echo "<div class=\"select\">
                                <select id=\"mySelect\" name=\"selectedOption\"><option class=\"is-size-8\"><b>".$row['NAME']."</option>";

                                $stmt2 = $pdo->prepare("SELECT NAME,brand FROM composants_gpu WHERE is_selected=0");

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
                            <div class=\"control\">
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"answer\" value=\"supprimer\">
                                Supprimer
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"answer\" value=\"ajouter\">
                                Ajouter
                            </label>
                            <button class=\"button is-primary\" onclick=\"displaySelectedIndex()\">Submit</button>

                            </div>
                            </div></form> ";
                        }

                            }else{
                        

                            $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                            $stmt = $pdo->prepare("SELECT id_comp,NAME,brand FROM composants_gpu WHERE is_selected=1;");

                            $stmt->execute();

                            while ($row = $stmt->fetch()) {
                                echo "<li class=\"is-size-8\"><a href=\"./Pages/Composants.php?composant=".$row['id_comp']."&type=composants_gpu\"><b>".$row['brand']."</b> - ".$row['NAME']."</a></li>";
                                
                            }   
                        } }
                    ?>
          </ol>
        </li>
        <li>
          <div class="title-3">Alimentation</div>
          <img class="composant-child" src="./images/icons/supply.png">
          <ol>
            <?php
                        if(isset($_SESSION['mail'])){
                            if($_SESSION['statut']=='A'){
                            // Connexion à la base de données
                             

                            $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                            $stmt = $pdo->prepare("SELECT NAME,brand FROM composants_alim WHERE is_selected=1;");

                            $stmt->execute();
                            
                            
                            while ($row = $stmt->fetch()) {
                            
                            echo "<form class=\"form_compte\" action=\"./Pages/selection.php?type=alim\" method=\"POST\">";
                                echo "<div class=\"select\">
                                <select id=\"mySelect\" name=\"selectedOption\"><option class=\"is-size-8\"><b>".$row['NAME']."</option>";

                                $stmt2 = $pdo->prepare("SELECT NAME,brand FROM composants_alim WHERE is_selected=0");

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
                            <div class=\"control\">
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"answer\" value=\"supprimer\">
                                Supprimer
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"answer\" value=\"ajouter\">
                                Ajouter
                            </label>
                            <button class=\"button is-primary\" onclick=\"displaySelectedIndex()\">Submit</button>

                            </div>
                            </div></form> ";
                        }

                            }else{
                        

                            $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                            $stmt = $pdo->prepare("SELECT id_comp,NAME,brand FROM composants_alim WHERE is_selected=1;");

                            $stmt->execute();

                            while ($row = $stmt->fetch()) {
                                echo "<li class=\"is-size-8\"><a href=\"./Pages/Composants.php?composant=".$row['id_comp']."&type=composants_alim\"><b>".$row['brand']."</b> - ".$row['NAME']."</a></li>";
                                
                            }   
                        } }
                    ?>
          </ol>

        </li>
        <li>
          <div class="title-3">Boitier</div>
          <img class="composant-child" src="./images/icons/desktop.png">
          <ol>
            <?php
                        if(isset($_SESSION['mail'])){
                            if($_SESSION['statut']=='A'){
                            // Connexion à la base de données
                             

                            $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                            $stmt = $pdo->prepare("SELECT NAME,brand FROM composants_boitier WHERE is_selected=1;");

                            $stmt->execute();
                            
                            
                            while ($row = $stmt->fetch()) {
                            
                            echo "<form class=\"form_compte\" action=\"./Pages/selection.php?type=boitier\" method=\"POST\">";
                                echo "<div class=\"select\">
                                <select id=\"mySelect\" name=\"selectedOption\"><option class=\"is-size-8\"><b>".$row['NAME']."</option>";

                                $stmt2 = $pdo->prepare("SELECT NAME,brand FROM composants_boitier WHERE is_selected=0");

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
                            <div class=\"control\">
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"answer\" value=\"supprimer\">
                                Supprimer
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"answer\" value=\"ajouter\">
                                Ajouter
                            </label>
                            <button class=\"button is-primary\" onclick=\"displaySelectedIndex()\">Submit</button>

                            </div>
                            </div></form> ";
                        }

                            }else{
                        

                            $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                            $stmt = $pdo->prepare("SELECT id_comp,NAME,brand,type FROM composants_boitier WHERE is_selected=1;");

                            $stmt->execute();

                            while ($row = $stmt->fetch()) {
                                echo "<li class=\"is-size-8\"><a href=\"./Pages/Composants.php?composant=".$row['id_comp']."&type=composants_boitier\"><b>".$row['brand']."</b> - ".$row['NAME'].$row['type']."</a></li>";
                                
                            }   
                        } }
                    ?>
          </ol>

        </li>
        <li>
          <div class="title-3">stockage</div>
          <img class="composant-child" src="./images/icons/hdd.png">
          <ol>
            <?php
                        if(isset($_SESSION['mail'])){
                            if($_SESSION['statut']=='A'){
                            // Connexion à la base de données
                             

                            $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                            $stmt = $pdo->prepare("SELECT NAME,brand FROM composants_stockage WHERE is_selected=1;");

                            $stmt->execute();
                            
                            
                            while ($row = $stmt->fetch()) {
                            
                            echo "<form class=\"form_compte\" action=\"./Pages/selection.php?type=stockage\" method=\"POST\">";
                                echo "<div class=\"select\">
                                <select id=\"mySelect\" name=\"selectedOption\"><option class=\"is-size-8\"><b>".$row['NAME']."</option>";

                                $stmt2 = $pdo->prepare("SELECT NAME,brand FROM composants_stockage WHERE is_selected=0");

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
                            <div class=\"control\">
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"answer\" value=\"supprimer\">
                                Supprimer
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"answer\" value=\"ajouter\">
                                Ajouter
                            </label>
                            <button class=\"button is-primary\" onclick=\"displaySelectedIndex()\">Submit</button>

                            </div>
                            </div></form> ";
                        }

                            }else{
                        

                            $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                            $stmt = $pdo->prepare("SELECT id_comp,NAME,brand FROM composants_stockage WHERE is_selected=1;");

                            $stmt->execute();

                            while ($row = $stmt->fetch()) {
                                echo "<li class=\"is-size-8\"><a href=\"./Pages/Composants.php?composant=".$row['id_comp']."&type=composants_stockage\"><b>".$row['brand']."</b> - ".$row['NAME']."</a></li>";
                                
                            }   
                        } }
                    ?>
          </ol>


        </li>
        <li>
          <div class="title-3">Refroidissement</div>
          <img class="composant-child" src="./images/icons/cooling-fan.png">
          <ol>
            <?php
                        if(isset($_SESSION['mail'])){
                            if($_SESSION['statut']=='A'){
                            // Connexion à la base de données
                             

                            $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                            $stmt = $pdo->prepare("SELECT NAME,brand FROM composants_cooler WHERE is_selected=1;");

                            $stmt->execute();
                            
                            
                            while ($row = $stmt->fetch()) {
                            
                            echo "<form class=\"form_compte\" action=\"./Pages/selection.php?type=cooler\" method=\"POST\">";
                                echo "<div class=\"select\">
                                <select id=\"mySelect\" name=\"selectedOption\"><option class=\"is-size-8\"><b>".$row['NAME']."</option>";

                                $stmt2 = $pdo->prepare("SELECT NAME,brand FROM composants_cooler WHERE is_selected=0");

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
                            <div class=\"control\">
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"answer\" value=\"supprimer\">
                                Supprimer
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"answer\" value=\"ajouter\">
                                Ajouter
                            </label>
                            <button class=\"button is-primary\" onclick=\"displaySelectedIndex()\">Submit</button>

                            </div>
                            </div></form> ";
                        }

                            }else{
                        

                            $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                            $stmt = $pdo->prepare("SELECT id_comp,NAME,brand FROM composants_cooler WHERE is_selected=1;");

                            $stmt->execute();

                            while ($row = $stmt->fetch()) {
                                echo "<li class=\"is-size-8\"><a href=\"./Pages/Composants.php?composant=".$row['id_comp']."&type=composants_cooler\"><b>".$row['brand']."</b> - ".$row['NAME']."</a></li>";
                                
                            }   
                        } }
                    ?>
          </ol>


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
            <a href="https://www.apple.com/fr/ios/app-store/"><img class="appstr" src="./images/appstore.png"></a>
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
      <p class="copyright">Copyright 2022 - DIGGIT.ME</p>
    </div>
  </div>


  <script src="./scripts/index.js"></script>
  <script src="./scripts/main.js"></script>
  <script src="./scripts/recherche.js"></script>
</body>

</html>