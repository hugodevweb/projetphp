

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link href="./style/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head> 
 <body>
  <!-- -----------Premiere ligne du navbar------ -->
  <header>
    <div class="header-main">
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="#">
        <img id="logo" src="./images/diggit.png" width="200px" height="auto" alt="Bulma logo" >
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
                <button class="button" type="submit"><img type="sub" class="loupe" src="./images/loupe.png" alt="loupe" ></button>
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
              <img src="./images/cart.gif" alt="cart">
              
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
  <section class="hero " style="background: url('.//images/gradient.gif') center/cover no-repeat;" >
    <div class="hero-body" >
        <div class="container" >
            <h1 class="title has-text-white">
                Bienvenu sur digit.me 
            </h1>
            <h2 class="subtitle has-text-white">
               Votre configurateur de PC personnalisé
            </h2>
            <!-- <img class="is-right" src="./images/pc.gif" style="width: 250px ;height:200px;"> -->
        </div>
    </div>
</section>

<!---------------------config prefaites--------------------------------->
<div class="hero is-fullheight" style="background: url('./images/banner.jpg') center/cover no-repeat;">


  <div id="pres"class="box has-text-centered has-background-white ">
    <div class="title-1">Les configurations recommandées:</div>
  <div class="columns">
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
<div id="pres"class="box has-text-centered has-background-white ">
  <div class="title-1">Les composants populaires:</div>
  <ul class="composants">
    <li>
      <div class="title-3">Carte Mere</div>
      <img class="composant-child" src="./images/icons/cpu.png"> 
      <ol>
        <li>composant 1 </li>
        <li>composant 1 </li>
        <li>composant 1 </li>
      </ol>
    
    </li>
    <li>
      <div class="title-3">Carte Mere</div>
      <img class="composant-child" src="./images/icons/cpu.png"> 
      <ol>
        <li>composant 1 </li>
        <li>composant 1 </li>
        <li>composant 1 </li>
      </ol>
    
    </li>
    <li>
      <div class="title-3">Carte Mere</div>
      <img class="composant-child" src="./images/icons/cpu.png"> 
      <ol>
        <li>composant 1 </li>
        <li>composant 1 </li>
        <li>composant 1 </li>
      </ol>
    
    </li>
    <li>
      <div class="title-3">Carte Mere</div>
      <img class="composant-child" src="./images/icons/cpu.png"> 
      <ol>
        <li>composant 1 </li>
        <li>composant 1 </li>
        <li>composant 1 </li>
      </ol>
    
    </li>
    <li>
      <div class="title-3">Carte Mere</div>
      <img class="composant-child" src="./images/icons/cpu.png"> 
      <ol>
        <li>composant 1 </li>
        <li>composant 1 </li>
        <li>composant 1 </li>
      </ol>
    
    </li>
    <li>
      <div class="title-3">Carte Mere</div>
      <img class="composant-child" src="./images/icons/cpu.png"> 
      <ol>
        <li>composant 1 </li>
        <li>composant 1 </li>
        <li>composant 1 </li>
      </ol>
    
    </li>
    <li>
      <div class="title-3">Carte Mere</div>
      <img class="composant-child" src="./images/icons/cpu.png"> 
      <ol>
        <li>composant 1 </li>
        <li>composant 1 </li>
        <li>composant 1 </li>
      </ol>
    
    </li>
    <li>
      <div class="title-3">Carte Mere</div>
      <img class="composant-child" src="./images/icons/cpu.png"> 
      <ol>
        <li>composant 1 </li>
        <li>composant 1 </li>
        <li>composant 1 </li>
      </ol>
    
    </li>
  </ul> 
  
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
        <p class="copyright">Copyright 2022 - Foot-Print</p>
    </div>
 </div>
</body>
</html>