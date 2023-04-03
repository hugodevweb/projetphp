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
        
        <div id="nav_menu1" class="navbar-menu">

       
          <div class="navbar-brand">
          <a class="navbar-item" href="../index.php">
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
                            <div class="dropdown-menu is-dark" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content">
                                    
                                    <a href="#" class="dropdown-item">
                                        Mon compte
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Mes configurations
                                    </a>';

                                    if($_SESSION['statut']=='A'){
                                      echo'<a href="../Pages/new_compo.php" class="dropdown-item">+ Composants 
                                  </a>';}
                                  echo'
                                    <hr class="dropdown-divider">
                                    <a href="../Pages/deconnexion.php" class="dropdown-item">
                                        Se Deconnecter
                                    </a>
                                </div>
                            </div>
                        </div>
                        <button style="margin-left:2%" id="btnpanier" class="button is-white">
                        <span id="kart" class="icon has-text-dark">
                          <img src="../images/cart.gif" alt="cart">
                        </span>
                        <span href="">Panier</span>';
            if(isset($_SESSION['count'])){
              if($_SESSION['count']>=1){
                       echo' <span id="count" class="badge">
                          '; echo $_SESSION['count']; 
                        echo'  
                        </span>
                      </button>';
              }}
                   
              echo'</div>';
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



  <!---------------------config prefaites--------------------------------->

  <div class="background--custom">
    <section class="hero">
      <div class="hero-body">
             <div id="pres" class="box has-text-centered has-background-white ">
                <div class="title-1">Les configurations de la Communauté:</div>
                <hr class="dropdown-divider">
                <div style ="margin-top:2vh;" class="columns">
                <!-- Filtre -->
                  <div class="column is-2" >
                  <form method="post" action="tri.php">
                      <div class="field">
                          <label class="label" for="tri">Trier par :</label>
                          <div class="control">
                              <div class="select">
                                  <select name="tri" id="tri">
                                      <option value="likes_Deroissant">likes Deroissant</option>
                                      <option value="likes_Croissant">likes Croissant</option>                                
                                      <option value="prix_total_Croissant">Prix total <b>Croissant</b></option>
                                      <option value="prix_total_Decroissant">Prix total <b>Decroissant</b></option>
                                  </select>
                              </div>
                          </div>
                      </div>
                     
                      <div class="tri_prix">
    <label class="label" for="prix">Filtrer par prix :</label>
   
        <p class="control">
            <a class="button is-static is-small" id="prix_min_display">Min:  <?php if(isset($_GET['prix_min'])){
              echo $_GET['prix_min'];
            }
            else{
              echo "100";
            }
?>€</a>
        </p>
        <p>
            <input  type="range" name="prix_min" id="prix_min" min="100" max="5000" step="50" value="<?php if(isset($_GET['prix_min'])){
              echo $_GET['prix_min'];
            }
            else{
              echo "100";
            }
?>"
        </p>
        <p>
            <input  type="range" name="prix_max" id="prix_max" min="100" max="5000" step="50" value="<?php if(isset($_GET['prix_max'])){
              echo $_GET['prix_max'];
            }
            else{
              echo "5000";
            }
?>">
        </p>
        <p>
            <a class="button is-static is-small" id="prix_max_display">Max:  <?php if(isset($_GET['prix_max'])){
              echo $_GET['prix_max'];
            }
            else{
              echo "5000";
            }
?>€</a>
        </p>
       
  
        
        <div class="control">
                          <input class="button is-info" type="submit" value="Trier">
                      </div>
                      </div>
</form>
<script>
    $(document).ready(function(){
        // Afficher la valeur sélectionnée pour le curseur "prix_min"
        $("#prix_min").on("input change", function(){
            var prix_min = $(this).val();
            $("#prix_min_display").text("Min: " + prix_min + "€");
        });

        // Afficher la valeur sélectionnée pour le curseur "prix_max"
        $("#prix_max").on("input change", function(){
            var prix_max = $(this).val();
            $("#prix_max_display").text("Max: " + prix_max + "€");
        });
    });
</script>

                    



                  </div> 
                  <!-- Filtre -->
                  <hr class="is-divider-vertical">
                                    <div class="column" >
                    <div class="columns">

                      <?php
                       $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
                      if(isset($_GET['order'],$_GET['prix_min'],$_GET['prix_max'])){
                        
                        $order=$_GET['order'];
                        $prix_max = $_GET['prix_max'];
                        $prix_min = $_GET['prix_min'];

                      $stmt = $pdo->prepare("SELECT (SELECT COUNT(*) FROM likes WHERE likes.id_config = configurations.id_config) AS likes,client.statut AS statut, SUM(composants_alim.price + composants_board.price+composants_boitier.price+composants_cooler.price+composants_cpu.price+composants_gpu.price+composants_ram.price+composants_stockage.price) as prix_total, users.pseudo AS pseudo,composants_cpu.name AS cpu, composants_gpu.name AS gpu,composants_boitier.name as boitier,composants_boitier.img as boitierimg,composants_gpu.img as gpuimg,composants_cpu.img as cpuimg, configurations.nomconfig AS nom, configurations.id_config AS id_config
                      FROM configurations
                      JOIN tj_config_comp ON configurations.id_config = tj_config_comp.id_config
                      JOIN composants_alim ON tj_config_comp.id_alim = composants_alim.id_comp
                      JOIN composants_board ON tj_config_comp.id_board = composants_board.id_comp
                      JOIN composants_boitier ON tj_config_comp.id_boitier = composants_boitier.id_comp
                      JOIN composants_cooler ON tj_config_comp.id_cooler = composants_cooler.id_comp
                      JOIN composants_cpu ON tj_config_comp.id_cpu = composants_cpu.id_comp
                      JOIN composants_gpu ON tj_config_comp.id_gpu = composants_gpu.id_comp
                      JOIN composants_ram ON tj_config_comp.id_ram = composants_ram.id_comp
                      JOIN composants_stockage ON tj_config_comp.id_stockage = composants_stockage.id_comp
                      JOIN users ON configurations.id_client = users.mailu
                      JOIN client  ON configurations.id_client = client.mailc


                      WHERE (composants_alim.price + composants_board.price+composants_boitier.price+composants_cooler.price+composants_cpu.price+composants_gpu.price+composants_ram.price+composants_stockage.price) 
                      BETWEEN $prix_min AND $prix_max
                      GROUP BY configurations.id_config ".$order.";");


                      }
                      else{
                        $stmt = $pdo->prepare("SELECT (SELECT COUNT(*) FROM likes WHERE likes.id_config = configurations.id_config) AS likes,client.statut AS statut, SUM(composants_alim.price + composants_board.price+composants_boitier.price+composants_cooler.price+composants_cpu.price+composants_gpu.price+composants_ram.price+composants_stockage.price) as prix_total, users.pseudo AS pseudo,composants_cpu.name AS cpu, composants_gpu.name AS gpu,composants_boitier.name as boitier,composants_boitier.img as boitierimg,composants_gpu.img as gpuimg,composants_cpu.img as cpuimg, configurations.nomconfig AS nom, configurations.id_config AS id_config
                      FROM configurations
                      JOIN tj_config_comp ON configurations.id_config = tj_config_comp.id_config
                      JOIN composants_alim ON tj_config_comp.id_alim = composants_alim.id_comp
                      JOIN composants_board ON tj_config_comp.id_board = composants_board.id_comp
                      JOIN composants_boitier ON tj_config_comp.id_boitier = composants_boitier.id_comp
                      JOIN composants_cooler ON tj_config_comp.id_cooler = composants_cooler.id_comp
                      JOIN composants_cpu ON tj_config_comp.id_cpu = composants_cpu.id_comp
                      JOIN composants_gpu ON tj_config_comp.id_gpu = composants_gpu.id_comp
                      JOIN composants_ram ON tj_config_comp.id_ram = composants_ram.id_comp
                      JOIN composants_stockage ON tj_config_comp.id_stockage = composants_stockage.id_comp
                      JOIN users ON configurations.id_client = users.mailu
                      JOIN client  ON configurations.id_client = client.mailc
                      GROUP BY configurations.id_config order by likes DESC;");
                      }
                        


                      
                      





                      $stmt->execute();
                      $index = 0;
                      while ($row = $stmt->fetch()) {
                        $index +=1;
                        echo'
                        <div id="config" class="column is-3" >
                          <div class="head">';
                          if($row['statut']=='A'){
                            echo'<span class="user">
                            <img  class="icon" src="../images/logo_diggit.png">
                           <p class="has-text-white" >DIGGIT.ME</p>
                        </span>  ';
                          }else{
                            echo'<span class="user">
                            <img  class="icon" src="../images/avatar.png">
                           <p class="has-text-white" >'.$row['pseudo'].'</p>
                        </span>  ';

                          }
                          

                            
                        
                        echo'</div>
                          <div class="img">
  
                          <ul class="grille">
                            <li  class="g1"> <img  src="'.$row['boitierimg'].'"></li>
                            <li class="g2"><img  src="'.$row['cpuimg'].'"></li>
                            <li class="g3"><img   src="'.$row['gpuimg'].'"></li>
                            
                          </ul>
                        </div>
                          <div class="body"> 
                            <b>'.$row['nom'].'</b>
                            <span>
                                    <span class="liste">
                                    <img class="icon" src="../images/icons/desktop.png">  <p>'.$row['boitier'].'</p>
                                    </span>
                                    <span class="liste">
                                    <img  class="icon" src="../images/icons/cpu.png">
                                        <p> '.$row['cpu'].'</p>
                                    </span>
                                    <span class="liste">
                                    <img class="icon" src="../images/icons/video-card.png">  <p> '.$row['gpu'].'</p>
                                    </span>
            
                                </span>
  
                          </div>
                          <div class="foot">
                          <p class="has-text-white" >'.$row['prix_total'].'€</p>
                          <div class="prix">';
                          if(isset($_SESSION['mail'])){
                      
                      $stmt2 = $pdo->prepare("SELECT likes.id_client AS client , likes.id_config AS config
                      FROM likes WHERE likes.id_config = ? AND likes.id_client = ? ");

                      $stmt2->execute(array($row['id_config'],$_SESSION['mail']));
                      
                            if($stmt2->rowCount()==1 ){

                              echo' 
                              <form class="Like" action="../Pages/like.php?id_config='.$row['id_config'].'&id_client='.$_SESSION['mail'].'" method="post">
                              <button name="like_button"><img  class="icon" style="-webkit-filter: invert(100%); /* Safari/Chrome * filter: invert(100%);" src="../images/like.png">
                              </button>
                              </form>
                                    <p>'.$row['likes'].'</p>
                                    </div>';


                            }
                            else{
                              echo' 
                              <form class="Like" action="../Pages/like.php?id_config='.$row['id_config'].'&id_client='.$_SESSION['mail'].'" method="post">
                              <button name="like_button"><img  class="icon" style="-webkit-filter: invert(100%); /* Safari/Chrome * filter: invert(100%);" src="../images/unlike.png">
                              </button>
                              </form>
                                    <p>'.$row['likes'].'</p>
                                    </div>';
                            }
                    }
                    else{
                      echo' <img  class="icon" style="-webkit-filter: invert(100%); /* Safari/Chrome * filter: invert(100%);" src="../images/unlike.png">
                               <p>'.$row['likes'].'</p>
                               </div>';
                    }
                               
                            
                       echo' </div></div>';

                     
                      
                      if($index==4){
                        echo'</div>
                        <div class="columns">';
                      }
                    }
                    echo'</div>';
                      
                      ?>

                      
                        

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
  <script src="../scripts/recherche2.js"></script>
  <script src="../scripts/like.js"></script>
  
</body>

</html>