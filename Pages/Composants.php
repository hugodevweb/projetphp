<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link href="../style/main.css" rel="stylesheet">
    <link href="../style/fondsvg.css" rel="stylesheet">
    <link href="../style/composant.css" rel="stylesheet">
    <link rel = "icon" href = "../images/logo_diggit.png" 
        type = "image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>DIGGIT.ME- Composant</title>
</head>
<?php
$type=$_GET['type'];
$compo=$_GET['composant'];

$pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
$stmt = $pdo->prepare("select * from composants_".$type." where id_comp= ? ");
$stmt->execute([$compo]);
$row = $stmt->fetch(pdo::FETCH_ASSOC);
$price = $row['price'];
$rating = $row['rating'];
$brand = $row['brand'];
$name = $row['name'];
$img = $row['img'];
$is_available = $row['is_available'];
$wattage = $row['wattage'];
$nbcore = $row['nbcore'];
$puissance = $row['puissance'];

?>

<body>
    <!-- -----------Premiere ligne du navbar------ -->
    <header>
        <div class="header-main">
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item" href="#">
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
                            <div class="field has-addons">
                                <div class="control">
                                    <input id="rech" class="input" type="text" placeholder="Chercher un composant ">
                                </div>
                                <div class="control">
                                    <button class="button" type="submit"><img type="sub" class="loupe"
                                            src="../images/loupe.png" alt="loupe"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="navbar-end">
                        <div class="navbar-item has-text-centered">
                          
                                <div class="dropdown">
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
                                            <a href="#" class="dropdown-item">
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
                        <div class="navbar-start" >
                            <a class="navbar-item" href="#" style="border-left: 1px solid white;">
                                Acceuil
                            </a>

                            <a class="navbar-item" href="#">
                                Creer une configuration
                            </a>

                            <a class="navbar-item" href="#">
                                Communaut??
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

        

<!---------------------composant--------------------------------->


<section class="hero">
        <div class="background--custom">

            
        <div id="pres" class="box has-text-centered has-background-white ">
        <div class="columns">
                    <div class="column ">
                    <img class="image_compo"  src="<?php echo $img;?>">
                    </div>
                    <div class="column is-four-fifths">
                    <h1 style="font-family: 'Montserrat', sans-serif;" class="title is-2"><b style="color:blue;"><?php echo $brand;?></b> - <?php echo $name;?>
            </h1>
            </div>
                    </div>
           
            

        </div>
      
        
    </div>
    </section>
<!-------------Footer--------------> 
<div class="footer">
    <div class="container">
        <div class="rang">
            <div class="footer_col1">
                <h3>T??l??charger notre application</h3>
                <p>T??l??charger notre application maintenant sur Android et IOS</p>
                <div class="app_logo">
                    <a href="https://play.google.com/store/search?q=footprint"><img class="playstr" src="../images/playstore.png" ></a>
                    <a href="https://www.apple.com/fr/ios/app-store/"><img class="appstr" src="../images/appstore.png"></a>
                </div>
            </div>
            <div class="footer_col2">
                <img src="../images/diggit.png">
                <p>Notre objectif est de rendre agr??able et accessible l'achat et le montage d'ordinateurs
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