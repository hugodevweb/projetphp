<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link href="../style/ConfigPc.css" rel="stylesheet">
    <link href="../style/main.css" rel="stylesheet">
    <link href="../style/index.css" rel="stylesheet">
    <link href="../style/commu.css" rel="stylesheet">
    <link href="../style/btn.css" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <?php
    $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
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

                                            <form class="form_compte" action="./connexion_action.php" method="POST">
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


    <!----contenu---->


    <!---------------------Création pc--------------------------------->


    <?php
    $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

    $_SESSION['id_config'] = null;

    $mail = $_SESSION['mail'] ;
   
    $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
    $req = $pdo->prepare("SELECT id_config, nomconfig FROM configurations WHERE id_client = ? ");
    $req->execute(array($mail));
  
    $_SESSION['mail'] = $mail;

    while ($donne = $req->fetch()) {
   
    $_SESSION['id_config']=$donne['id_config'];
   echo '<form method="POST" action="./Pages/CréationPc.php">
    <div class="select">
    <select id="select_config" name="config" onchange="this.form.submit()">
    <option class="is-size-8"><b>' .$donne['nomconfig']. '</b></option>
    ';
      
    }

    echo '</select></div></form>

</div>
</div>';
    ?>
            <?php 
            if ($_SESSION['id_config'] == null && $_SESSION['mail'] == null){
                echo'';
                                           
                                        
            
            }else{
                echo '    
                <div class="columns">
                <div class="column">
                    <button id="btn_compo" class="button is-link" data-target="#modalId" data-toggle="modal" >Modifier</button>';
             $id =  $_SESSION['id_config'];
             $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
             $req = $pdo->prepare("SELECT name FROM tj_config_comp t , composants_cpu c WHERE c.id_comp = t.id_cpu AND t.id_config = ?");
             $req->execute(array($id));
            $_SESSION['id_config'] = $id ;
            $donne = $req->fetch(); 
        
             if (isset($_SESSION['cpu']))
            {
                echo $_SESSION['cpu'];
            }else{
                echo $donne['name'];
            };                
                
             echo'   
             
             <div class="modal " id="modalId"  >
             <div class="modal-dialog modal-1500">
                 <div class="modal-background" ></div>
                 <div class="modal-content" >
                     <div id="container">
                         <form>
                             <table>
                                 <thead>
                                     <tr>
                                         <td>Nom</td>
                                         <td>Prix</td>
                                         <td>brand</td>
                                         <td>ram</td>
                                         <td></td>
                                     </tr>
                                 </thead>
                                 <tbody>';
         
                                 $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                                 $sql = "SELECT * FROM composants_cpu";
                                 $req = $bdd->prepare($sql);
                                 $req->execute();

                                 while ($donne = $req->fetch()) {
                                     echo "<tr>";
                                     echo "<td>" . $donne['name'] . "</td> ";
                                     echo "<td>" . $donne['price'] . "</td> ";
                                     echo "<td>" . $donne['brand'] . "</td> ";
                                     echo "<td>" . $donne['puissance'] . "</td> ";
                                     echo "<td>   <form method='post' action='CréationPc_action.php?id_cpu=" . $donne['name'] . "'>
                     <div id='btn_inscription' class='field'>
                         <button style='all: unset;'type='submit'><a class='fancy' >
                         <span class='top-key'></span>
                         <span class='text'> Modifié</span>
                         <span class='bottom-key-1'></span>
                         <span class='bottom-key-2'></span>
                       </a>   </button>
                            </div>
                         </form> </td>";
                        } } 
            ?>


                                    <?php


                                    ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <button class="modal-close is-large" aria-label="close"> </button>
                </div>
            </div>
            </div>
        </div>
    </div>
    
    <?php 
            if ($_SESSION['id_config'] == null){
              
                                echo '';           
                                        
            
            }else{
                echo '    
                <div class="columns">
                <div class="column">
                    <button id="btn_compo2" class="button is-link" data-target="#modalId2" data-toggle="modalId2" >Modifier</button>';
             $id =  $_SESSION['id_config'];
             $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
             $req = $pdo->prepare("SELECT name FROM tj_config_comp t , composants_ram c WHERE c.id_comp = t.id_ram AND t.id_config = ?");
             $req->execute(array($id));
            $_SESSION['id_config'] = $id ;
            $donne = $req->fetch(); 
        
             if (isset($_SESSION['ram']))
            {
                echo $_SESSION['ram'];
            }else{
                echo $donne['name'];
            };                
                
            echo'
         
    
                <div class="modal" id="modalId2">
                    <div class="modal-background"></div>
                    <div class="modal-content">
                        <div id="container">
                            <form>
                                <table>
                                    <thead>
                                        <tr>
                                            <td>Nom</td>
                                            <td>Prix</td>
                                            <td>brand</td>
                                            <td>modules</td>
                                            <td>capacite</td>
                                            <td>speed</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>';
            
                            
                                    $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                                $sql = "SELECT * FROM composants_ram ";
                                $req = $bdd->prepare($sql);
                                $req->execute();

                                while ($donne = $req->fetch()) {

                                    echo "<tr>";
                                    echo "<td>" . $donne['name'] . "</td> ";
                                    echo "<td>" . $donne['price'] . "</td> ";
                                    echo "<td>" . $donne['brand'] . "</td> ";
                                    echo "<td>" . $donne['modules'] . "</td> ";
                                    echo "<td>" . $donne['capacite'] . "</td> ";
                                    echo "<td>" . $donne['speed'] . "</td> ";
                                    echo "<td>   <form method='post' action='CréationPc_action.php?id_ram=" . $donne['name'] . "'>
                    <div id='btn_inscription' class='field'>
                        <button style='all: unset;'type='submit'><a class='fancy' >
                        <span class='top-key'></span>
                        <span class='text'> Ajouter</span>
                        <span class='bottom-key-1'></span>
                        <span class='bottom-key-2'></span>
                      </a>   </button>
                           </div>
                        </form> </td>";
                                       
                                    
                        } } 
            
            ?>


                                    <?php


                                    ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <button class="modal-close is-large" aria-label="close"> </button>
                </div>
            </div>
            </div>
        </div>
        </div>

            <?php 
            if ($_SESSION['id_config'] == null && $_SESSION['mail'] == null){
                echo'';

            }else{
                echo '    
                <div class="columns">
                <div class="column">
                    <button id="btn_compo3" class="button is-link" data-target="#modalId3" data-toggle="modalId3" >Modifier</button>';
             $id =  $_SESSION['id_config'];
             $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
             $req = $pdo->prepare("SELECT name FROM tj_config_comp t , composants_gpu c WHERE c.id_comp = t.id_gpu AND t.id_config = ?");
             $req->execute(array($id));
            $_SESSION['id_config'] = $id ;
            $donne = $req->fetch(); 
        
             if (isset($_SESSION['gpu']))
            {
                echo $_SESSION['gpu'];
            }else{
                echo $donne['name'];
            };                
                
             echo'   
             
          
            <div class="gpu">
            </div>
            <div class="modal" id="modalId3">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <div id="container">
                        <form>
                            <table>
                                <thead>
                                    <tr>
                                        <td>Nom</td>
                                        <td>Prix</td>
                                        <td>brand</td>
                                        <td>ram</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>';
         
                                $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                                $sql = "SELECT * FROM composants_gpu";
                                $req = $bdd->prepare($sql);
                                $req->execute();

                                while ($donne = $req->fetch()) {

                                    echo "<tr>";
                                    echo "<td>" . $donne['name'] . "</td> ";
                                    echo "<td>" . $donne['price'] . "</td> ";
                                    echo "<td>" . $donne['brand'] . "</td> ";
                                    echo "<td>" . $donne['ram'] . "</td> ";
                                    echo "<td>   <form method='post' action='CréationPc_action.php?id_gpu=" . $donne['name'] . "'>
                    <div id='btn_inscription' class='field'>
                        <button style='all: unset;'type='submit'><a class='fancy' >
                        <span class='top-key'></span>
                        <span class='text'> Ajouter</span>
                        <span class='bottom-key-1'></span>
                        <span class='bottom-key-2'></span>
                      </a>   </button>
                           </div>
                        </form> </td>";
                        } } 
            ?>


                                    <?php


                                    ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <button class="modal-close is-large" aria-label="close"> </button>
                </div>
            </div>
            </div>
        </div>
    </div>



    <?php 
            if ($_SESSION['id_config'] == null && $_SESSION['mail'] == null){
                echo'';

            }else{
                echo '    
                <div class="columns">
                <div class="column">
                    <button id="btn_compo4" class="button is-link" data-target="#modalId4" data-toggle="modalId4" >Modifier</button>';
             $id =  $_SESSION['id_config'];
             $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
             $req = $pdo->prepare("SELECT name FROM tj_config_comp t , composants_alim c WHERE c.id_comp = t.id_alim AND t.id_config = ?");
             $req->execute(array($id));
            $_SESSION['id_config'] = $id ;
            $donne = $req->fetch(); 
        
             if (isset($_SESSION['alim']))
            {
                echo $_SESSION['alim'];
            }else{
                echo $donne['name'];
            };                
                
             echo'   
                 <div class="modal" id="modalId4">
                     <div class="modal-background"></div>
                     <div class="modal-content">
                         <div id="container">
                             <form>
                                 <table>
                                     <thead>
                                         <tr>
                                             <td>Nom</td>
                                             <td>Prix</td>
                                             <td>brand</td>
                                             <td>ram</td>
                                             <td></td>
                                         </tr>
                                     </thead>
                                     <tbody>';
                                         
     $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

     $sql = "SELECT * FROM composants_alim";
     $req = $bdd->prepare($sql);
     $req->execute();

     while ($donne = $req->fetch()) {

         echo "<tr>";
         echo "<td>" . $donne['name'] . "</td> ";
         echo "<td>" . $donne['price'] . "</td> ";
         echo "<td>" . $donne['brand'] . "</td> ";
         echo "<td>" . $donne['wattage'] . "</td> ";
         echo "<td>   <form method='post' action='CréationPc_action.php?id_alim=" . $donne['name'] . "'>
<div id='btn_inscription' class='field'>
<button style='all: unset;'type='submit'><a class='fancy' >
<span class='top-key'></span>
<span class='text'> Ajouter</span>
<span class='bottom-key-1'></span>
<span class='bottom-key-2'></span>
</a>   </button>
</div>
</form> </td>";     

                        } } 
            ?>


                                    <?php


                                    ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <button class="modal-close is-large" aria-label="close"> </button>
                </div>
            </div>
            </div>
        </div>
    </div>




    <?php 
            if ($_SESSION['id_config'] == null && $_SESSION['mail'] == null){
                echo'';

            }else{
                echo '    
                <div class="columns">
                <div class="column">
                    <button id="btn_compo5" class="button is-link" data-target="#modalId5" data-toggle="modalId5" >Modifier</button>';
             $id =  $_SESSION['id_config'];
             $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
             $req = $pdo->prepare("SELECT name FROM tj_config_comp t , composants_stockage c WHERE c.id_comp = t.id_stockage AND t.id_config = ?");
             $req->execute(array($id));
            $_SESSION['id_config'] = $id ;
            $donne = $req->fetch(); 
        
             if (isset($_SESSION['stockage']))
            {
                echo $_SESSION['stockage'];
            }else{
                echo $donne['name'];
            };                
                
             echo'   
             <div class="modal" id="modalId5">
             <div class="modal-background"></div>
             <div class="modal-content">
                 <div id="container">
                     <form>
                         <table>
                             <thead>
                                 <tr>
                                     <td>Nom</td>
                                     <td>Prix</td>
                                     <td>brand</td>
                                     <td>capacite</td>
                                     <td>Type de stockage</td>
                                     <td>Vitesse</td>
                                     <td></td>
                                 </tr>
                             </thead>
                             <tbody>';
                                         
                             $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                             $sql = "SELECT * FROM composants_stockage";
                             $req = $bdd->prepare($sql);
                             $req->execute();

                             while ($donne = $req->fetch()) {

                                 echo "<tr>";
                                 echo "<td>" . $donne['name'] . "</td> ";
                                 echo "<td>" . $donne['price'] . "</td> ";
                                 echo "<td>" . $donne['brand'] . "</td> ";
                                 echo "<td>" . $donne['capacite'] . "</td> ";
                                 echo "<td>" . $donne['type_comp'] . "</td> ";
                                 echo "<td>" . $donne['speed'] . "</td> ";
                                 echo "<td>   <form method='post' action='CréationPc_action.php?id_stockage=" . $donne['name'] . "'>
                 <div id='btn_inscription' class='field'>
                     <button style='all: unset;'type='submit'><a class='fancy' >
                     <span class='top-key'></span>
                     <span class='text'> Ajouter</span>
                     <span class='bottom-key-1'></span>
                     <span class='bottom-key-2'></span>
                   </a>   </button>
                        </div>
                     </form> </td>";     

                        } } 
            ?>


                                    <?php


                                    ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <button class="modal-close is-large" aria-label="close"> </button>
                </div>
            </div>
            </div>
        </div>
    </div>


    <?php 
            if ($_SESSION['id_config'] == null && $_SESSION['mail'] == null){
                echo'';

            }else{
                echo '    
                <div class="columns">
                <div class="column">
                    <button id="btn_compo6" class="button is-link" data-target="#modalId6" data-toggle="modalId6" >Modifier</button>';
             $id =  $_SESSION['id_config'];
             $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
             $req = $pdo->prepare("SELECT name FROM tj_config_comp t , composants_board c WHERE c.id_comp = t.id_board AND t.id_config = ?");
             $req->execute(array($id));
            $_SESSION['id_config'] = $id ;
            $donne = $req->fetch(); 
        
             if (isset($_SESSION['board']))
            {
                echo $_SESSION['board'];
            }else{
                echo $donne['name'];
            };                
                
             echo'   
             <div class="modal" id="modalId6">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <div id="container">
                        <form>
                            <table>
                                <thead>
                                    <tr>
                                        <td>Nom</td>
                                        <td>Prix</td>
                                        <td>brand</td>
                                        <td>Ram</td>
                                        <td>socket</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>';
                                         
      
                                $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                                $sql = "SELECT * FROM composants_board ";
                                $req = $bdd->prepare($sql);
                                $req->execute();

                                while ($donne = $req->fetch()) {
                                    echo "<tr>";
                                    echo "<td>" . $donne['name'] . "</td> ";
                                    echo "<td>" . $donne['price'] . "</td> ";
                                    echo "<td>" . $donne['brand'] . "</td> ";
                                    echo "<td>" . $donne['ram'] . "</td> ";
                                    echo "<td>" . $donne['socket'] . "</td> ";
                                    echo "<td>   <form method='post' action='CréationPc_action.php?id_board=" . $donne['name'] . "'>
                    <div id='btn_inscription' class='field'>
                        <button style='all: unset;'type='submit'><a class='fancy' >
                        <span class='top-key'></span>
                        <span class='text'> Ajouter</span>
                        <span class='bottom-key-1'></span>
                        <span class='bottom-key-2'></span>
                      </a>   </button>
                           </div>
                        </form> </td>";    

                        } } 
            ?>


                                    <?php


                                    ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <button class="modal-close is-large" aria-label="close"> </button>
                </div>
            </div>
            </div>
        </div>
    </div>


    
    <?php 
            if ($_SESSION['id_config'] == null && $_SESSION['mail'] == null){
                echo'';

            }else{
                echo '    
                <div class="columns">
                <div class="column">
                    <button id="btn_compo7" class="button is-link" data-target="#modalId7" data-toggle="modalId7" >Modifier</button>';
             $id =  $_SESSION['id_config'];
             $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
             $req = $pdo->prepare("SELECT name FROM tj_config_comp t , composants_boitier c WHERE c.id_comp = t.id_boitier AND t.id_config = ?");
             $req->execute(array($id));
            $_SESSION['id_config'] = $id ;
            $donne = $req->fetch(); 
        
             if (isset($_SESSION['boitier']))
            {
                echo $_SESSION['boitier'];
            }else{
                echo $donne['name'];
            };                
                
             echo'   
             <div class="modal" id="modalId7">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <div id="container">
                        <form>
                            <table>
                                <thead>
                                    <tr>
                                        <td>Nom</td>
                                        <td>Prix</td>
                                        <td>brand</td>
                                        <td>Type</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>';
                                         
      
                              
                                $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                                $sql = "SELECT * FROM composants_boitier";
                                $req = $bdd->prepare($sql);
                                $req->execute();

                                while ($donne = $req->fetch()) {
                                    echo "<tr>";
                                    echo "<td>" . $donne['name'] . "</td> ";
                                    echo "<td>" . $donne['price'] . "</td> ";
                                    echo "<td>" . $donne['brand'] . "</td> ";
                                    echo "<td>" . $donne['type'] . "</td> ";
                                    echo "<td>   <form method='post' action='CréationPc_action.php?id_boitier=" . $donne['name'] . "'>
                    <div id='btn_inscription' class='field'>
                        <button style='all: unset;'type='submit'><a class='fancy' >
                        <span class='top-key'></span>
                        <span class='text'> Ajouter</span>
                        <span class='bottom-key-1'></span>
                        <span class='bottom-key-2'></span>
                      </a>   </button>
                           </div>
                        </form> </td>";    

                        } } 
            ?>


                                    <?php


                                    ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <button class="modal-close is-large" aria-label="close"> </button>
                </div>
            </div>
            </div>
        </div>
    </div>


    <?php 
            if ($_SESSION['id_config'] == null && $_SESSION['mail'] == null){
                echo'';

            }else{
                echo '    
                <div class="columns">
                <div class="column">
                    <button id="btn_compo8" class="button is-link" data-target="#modalId8" data-toggle="modalId8" >Modifier</button>';
             $id =  $_SESSION['id_config'];
             $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
             $req = $pdo->prepare("SELECT name FROM tj_config_comp t , composants_cooler c WHERE c.id_comp = t.id_cooler AND t.id_config = ?");
             $req->execute(array($id));
            $_SESSION['id_config'] = $id ;
            $donne = $req->fetch(); 
        
             if (isset($_SESSION['cooler']))
            {
                echo $_SESSION['cooler'];
            }else{
                echo $donne['name'];
            };                
                
             echo'   
             <div class="modal" id="modalId8">
             <div class="modal-background"></div>
             <div class="modal-content">
                 <div id="container">
                     <form>
                         <table>
                             <thead>
                                 <tr>
                                     <td>Nom</td>
                                     <td>Prix</td>
                                     <td>brand</td>
                                     <td>taille</td>
                                     <td>son</td>
                                     <td>speed</td>
                                     <td></td>
                                 </tr>
                             </thead>
                             <tbody>';
                                         
      
                             $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');

                             $sql = "SELECT * FROM composants_cooler";
                             $req = $bdd->prepare($sql);
                             $req->execute();

                             while ($donne = $req->fetch()) {
                                 echo "<tr>";
                                 echo "<td>" . $donne['name'] . "</td> ";
                                 echo "<td>" . $donne['price'] . "</td> ";
                                 echo "<td>" . $donne['brand'] . "</td> ";
                                 echo "<td>" . $donne['taille'] . "</td> ";
                                 echo "<td>" . $donne['son'] . "</td> ";
                                 echo "<td>" . $donne['speed'] . "</td> ";
                                 echo "<td>   <form method='post' action='CréationPc_action.php?id_cooler=" . $donne['name'] . "'>
                 <div id='btn_inscription' class='field'>
                     <button style='all: unset;'type='submit'><a class='fancy' >
                     <span class='top-key'></span>
                     <span class='text'> Ajouter</span>
                     <span class='bottom-key-1'></span>
                     <span class='bottom-key-2'></span>
                   </a>   </button>
                        </div>
                     </form> </td>";  

                        } } 
            ?>


                                  
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <button class="modal-close is-large" aria-label="close"> </button>
                </div>
            </div>
            </div>
           
        </div>

    </div>


    </div>
        <?php
 if (isset($_SESSION['cooler']))
 {
    $id_cooler = $_SESSION['cooler'];
    $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
    $req2 = $bdd->prepare("SELECT id_comp FROM composants_cooler where name = '$id_cooler' ");
    $req2->execute();
    $donne2 = $req2->fetch();
    $idcooler = $donne2['id_comp']; 
 }else{
    $id =  $_SESSION['id_config'];
    $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
    $req = $pdo->prepare("SELECT id_comp FROM tj_config_comp t , composants_cooler c WHERE c.id_comp = t.id_cooler AND t.id_config = ?");
    $req->execute(array($id));
   $_SESSION['id_config'] = $id;
   $donne = $req->fetch(); 
   $idcooler = $donne['id_comp'];
 };    
 ?>
 
 <?php
 if (isset($_SESSION['cpu']))
 {
    $id_cooler = $_SESSION['cpu'];
    $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
    $req2 = $bdd->prepare("SELECT id_comp FROM composants_cpu where name = '$id_cooler' ");
    $req2->execute();
    $donne2 = $req2->fetch();
    $idcpu = $donne2['id_comp']; 
 }else{
    $id =  $_SESSION['id_config'];
    $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
    $req = $pdo->prepare("SELECT id_comp FROM tj_config_comp t , composants_cpu c WHERE c.id_comp = t.id_cpu AND t.id_config = ?");
    $req->execute(array($id));
   $_SESSION['id_config'] = $id;
   $donne = $req->fetch(); 
   $idcpu = $donne['id_comp'];
 };    
 ?>

<?php
 if (isset($_SESSION['alim']))
 {
    $id_alim = $_SESSION['alim'];
    $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
    $req2 = $bdd->prepare("SELECT id_comp FROM composants_alim where name = '$id_alim' ");
    $req2->execute();
    $donne2 = $req2->fetch();
    $idalim = $donne2['id_comp']; 
 }else{
    $id =  $_SESSION['id_config'];
    $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
    $req = $pdo->prepare("SELECT id_comp FROM tj_config_comp t , composants_alim c WHERE c.id_comp = t.id_alim AND t.id_config = ?");
    $req->execute(array($id));
   $_SESSION['id_config'] = $id;
   $donne = $req->fetch(); 
   $idalim = $donne['id_comp'];
 };    
 ?>
 <?php
 if (isset($_SESSION['board']))
 {
    $id_board = $_SESSION['board'];
    $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
    $req2 = $bdd->prepare("SELECT id_comp FROM composants_board where name = '$id_board' ");
    $req2->execute();
    $donne2 = $req2->fetch();
    $idboard = $donne2['id_comp']; 
 }else{
    $id =  $_SESSION['id_config'];
    $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
    $req = $pdo->prepare("SELECT id_comp FROM tj_config_comp t , composants_board c WHERE c.id_comp = t.id_board AND t.id_config = ?");
    $req->execute(array($id));
   $_SESSION['id_config'] = $id;
   $donne = $req->fetch(); 
   $idboard = $donne['id_comp'];
 };    
 ?>

<?php
 if (isset($_SESSION['boitier']))
 {
    $id_boitier = $_SESSION['boitier'];
    $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
    $req2 = $bdd->prepare("SELECT id_comp FROM composants_boitier where name = '$id_boitier' ");
    $req2->execute();
    $donne2 = $req2->fetch();
    $idboitier = $donne2['id_comp']; 
 }else{
    $id =  $_SESSION['id_config'];
    $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
    $req = $pdo->prepare("SELECT id_comp FROM tj_config_comp t , composants_boitier c WHERE c.id_comp = t.id_boitier AND t.id_config = ?");
    $req->execute(array($id));
   $_SESSION['id_config'] = $id;
   $donne = $req->fetch(); 
   $idboitier = $donne['id_comp'];
 };    
 ?>

<?php
 if (isset($_SESSION['gpu']))
 {
    $id_gpu = $_SESSION['gpu'];
    $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
    $req2 = $bdd->prepare("SELECT id_comp FROM composants_gpu where name = '$id_gpu' ");
    $req2->execute();
    $donne2 = $req2->fetch();
    $idgpu = $donne2['id_comp']; 
 }else{
    $id =  $_SESSION['id_config'];
    $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
    $req = $pdo->prepare("SELECT id_comp FROM tj_config_comp t , composants_gpu c WHERE c.id_comp = t.id_gpu AND t.id_config = ?");
    $req->execute(array($id));
   $_SESSION['id_config'] = $id;
   $donne = $req->fetch(); 
   $idgpu = $donne['id_comp'];
 };    
 ?>

<?php
 if (isset($_SESSION['ram']))
 {
    $id_ram = $_SESSION['ram'];
    $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
    $req2 = $bdd->prepare("SELECT id_comp FROM composants_ram where name = '$id_ram' ");
    $req2->execute();
    $donne2 = $req2->fetch();
    $idram = $donne2['id_comp']; 
 }else{
    $id =  $_SESSION['id_config'];
    $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
    $req = $pdo->prepare("SELECT id_comp FROM tj_config_comp t , composants_ram c WHERE c.id_comp = t.id_ram AND t.id_config = ?");
    $req->execute(array($id));
   $_SESSION['id_config'] = $id;
   $donne = $req->fetch(); 
   $idram = $donne['id_comp'];
 };    
 ?>

<?php
 if (isset($_SESSION['stockage']))
 {
    $id_stockage= $_SESSION['stockage'];
    $bdd = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
    $req2 = $bdd->prepare("SELECT id_comp FROM composants_stockage where name = '$id_stockage' ");
    $req2->execute();
    $donne2 = $req2->fetch();
    $idstockage = $donne2['id_comp']; 
 }else{
    $id =  $_SESSION['id_config'];
    $pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
    $req = $pdo->prepare("SELECT id_comp FROM tj_config_comp t , composants_stockage c WHERE c.id_comp = t.id_stockage AND t.id_config = ?");
    $req->execute(array($id));
   $_SESSION['id_config'] = $id;
   $donne = $req->fetch(); 
   $idstockage = $donne['id_comp'];
 };    
 ?>



 <?php
 echo "   <form method='post' action='CréationPc_Update.php?cooler=".$idcooler.'&cpu='.$idcpu.'&alim='.$idalim.'&board='.$idboard.'&boitier='.$idboitier.'&gpu='.$idgpu.'&stockage='.$idstockage.'&ram='.$idram."'>
                    <div id='btn_inscription' class='field'>
                        <button style='all: unset;'type='submit'><a class='fancy' >
                        <span class='top-key'></span>
                        <span class='text'> Ajouter</span>
                        <span class='bottom-key-1'></span>
                        <span class='bottom-key-2'></span>
                      </a>   </button>
                           </div>
                        </form>
                        <br> ";

 ?>
    <!-------------Footer-------------->
    <div class="footer">
        <div class="container">
            <div class="rang">
                <div class="footer_col1">
                    <h3>Télécharger notre application</h3>
                    <p>Télécharger notre application maintenant sur Android et IOS</p>
                    <div class="app_logo">
                        <a href="https://play.google.com/store/search?q=footprint"><img class="playstr" src="../images/playstore.png"></a>
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
            <p class="copyright">Copyright 2022 - DIGIT.ME</p>
        </div>
    </div>
    <script src="../scripts/Compo.js"></script>
    <script src="../scripts/index.js"></script>
  <script src="../scripts/main.js"></script>
  <script src="../scripts/recherche2.js"></script>
  <script src="../scripts/like.js"></script>

</body>

</html>