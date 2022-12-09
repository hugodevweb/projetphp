

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link href="../style/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../scripts/script.js"></script>
    </head> 
 <body>
  <!-- -----------Premiere ligne du navbar------ -->
  <header>
    <div class="header-main">
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="#">
        <img id="logo" src="../images/diggit.png" width="200px" height="auto" alt="Bulma logo" >
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
                <button class="button" type="submit"><img type="sub" class="loupe" src="../images/loupe.png" alt="loupe" ></button>
              </div>
            </div>
          </div>
        </div>

    <div class="navbar-end">
      <div class="navbar-item has-text-centered">
        <div class="buttons">
          <button class="button is-dark">
            <span class="icon">
              <i class="fa fa-user"></i>
              
            </span>
            <span>Mon compte</span>
          </button>
          <button class="button is-white">
            <span class="icon has-text-dark">
              <img src="../images/cart.gif" alt="cart">
              
            </span>
            <span href="">Panier</span>
          </button>
        </div>
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
  
      <a class="navbar-item" href="#">
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
  <!----contenu---->
  <section class="hero " style="background: url('../images/gradient.gif') center/cover no-repeat;" >
    <div class="hero-body" >
        <div class="container" >
            <h1 class="title has-text-white">
                Bonjour //////ADMIN/////
            </h1>
            <h2 class="subtitle has-text-white">
               Ici vous pouvez ajouter des composants
            </h2>
            <!-- <img class="is-right" src="../images/pc.gif" style="width: 250px ;height:200px;"> -->
        </div>
    </div>
</section>

<!---------------------ajout composant--------------------------------->
<div class="hero is-fullheight" style="background: url('../images/banner.jpg') center/cover no-repeat;">


  <div id="pres"class="box has-text-centered has-background-white ">
  <h1 style="font-family: 'Montserrat', sans-serif;" class="title is-2">Completer le formulaire ci-dessous:</h1>
  <form action="./modif_mdp_action.php" method="post">

    
    <div class="field">
    
        <div class="control ">
        <label for="type" class="choixtype" ><b >Type de composant:</b></label>
            <div class="select">
            <select  id="type" onchange="showDiv()">
                <option value="erreur_choix_composant" selected>Choisir</option>
                <option value="cooler" >Refroidissement de CPU</option>
                <option value="stockage">Stockage</option>
                <option value="board">Carte mère</option>
                <option value="alim">Alimentation</option>
                <option value="gpu">Carte Graphique</option>
                <option value="boiter">Le boitier</option>
                <option value="cpu">cpu</option>
            </select>
            </div>
        </div>
 </div>
 
 <div class="field">       
    <label for="name"><b class="is-pulled-left">Nom du composant:</b></label>
    <input  class="input" placeholder="Repetez le nom du composant" name="name" required>
</div>
 <div class="field">   
    <label for="price"><b class="is-pulled-left">Prix:</b></label>
    <input  class="input" placeholder="Entrez le prix du composant" name="prixe" required>
    </div>
<div class="field">    
    <label for="brand"><b class="is-pulled-left">Marque:</b></label>
    <input  class="input" placeholder="Repetez la marque" name="brand" required>
    </div>
<div class="field">
    <label for="rating"><b class="is-pulled-left">La note:</b></label>
    <input  class="input" placeholder="Entrez la note /5" name="rating"  required>
    </div>


    <div class="field">
    <label class="label ">Est-il disponible ? :</label>
    <div class="control">
      <label class="radio">
        <input type="radio" name="is_available" value="1">
        Oui
      </label>
      <label class="radio">
        <input type="radio" name="is_available" value="0">
        Non
      </label>
    </div>
  </div>
    <hr>

    <!-- <div id="cpuDiv" style="display:none">
       

    </div> -->
   

<!-- Div qui apparaît si l'option "cooler" est choisie -->
<div id="cooler" style="display: none;">
  <h3>Refroidissement de CPU</h3>
  <p>Informations sur le refroidissement de CPU...</p>
</div>
<!-- Div qui apparaît si l'option "stockage" est choisie -->
<div id="stockage" style="display: none;">
  <h3>Stockage</h3>
  <p>Informations sur le stockage...</p>
</div>
<!-- Div qui apparaît si l'option "board" est choisie -->
<div id="board" style="display: none;">
  <h3>Carte mère</h3>
  <p>Informations sur la carte mère...</p>
</div>
<!-- Div qui apparaît si l'option "alim" est choisie -->
<div id="alim" style="display: none;">
  <h3>Alimentation</h3>
  <p>Informations sur l'alimentation...</p>
</div>
<!-- Div qui apparaît si l'option "gpu" est choisie -->
<div id="gpu" style="display: none;">
  <h3>Carte Graphique</h3>
  <p>Informations sur la carte graphique...</p>
</div>
<!-- Div qui apparaît si l'option "boiter" est choisie -->
<div id="boiter" style="display: none;">
  <h3>Le boitier</h3>
  <p>Informations sur le boitier...</p>
</div>
<!-- Div qui apparaît si l'option "cpu" est choisie -->
<div id="cpu" style="display: none;">
  <h3>Le CPU</h3>
  <label><b class="is-pulled-left">Puissance:</b></label>
        <input  class="input" placeholder="Entrez la  puissance" name="cpu_puiss"  required>

        <label><b class="is-pulled-left">Le nombre de Cores:</b></label>
        <input  class="input" placeholder="Entrez le nombre de cores" name="cpu_nbr_core"  required>

        <label><b class="is-pulled-left">La conssomation:</b></label>
        <input  class="input" placeholder="Entrez la consommation en W" name="cpu_conso"  required>
</div>
    <button type="submit" class="button is-info is-medium is-fullwidth">Ajouter +</button>

  

</form>
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
                    <a href="https://play.google.com/store/search?q=footprint"><img class="playstr" src="Images/playstore.png" ></a>
                    <a href="https://www.apple.com/fr/ios/app-store/"><img class="appstr" src="Images/appstore.png"></a>
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
        <p class="copyright">Copyright 2022 - Foot-Print</p>
    </div>
 </div>
</body>
</html>