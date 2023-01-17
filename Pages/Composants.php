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
session_start();


$type=$_GET['type'];
$compo=$_GET['composant'];

$pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');
$stmt = $pdo->prepare("select * from ".$type." where id_comp= ? ");
$stmt->execute([$compo]);
$row = $stmt->fetch(pdo::FETCH_ASSOC);
$price = $row['price'];
$rating = $row['rating'];
$brand = $row['brand'];
$name = $row['name'];
$img = $row['img'];
$is_available = $row['is_available'];






?>

<body>
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
                            <a class="navbar-item" href="../index.php" style="border-left: 1px solid white;">
                                Acceuil
                            </a>

                            <a class="navbar-item" href="./CréationPc.php">
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

        

<!---------------------composant--------------------------------->


<section class="hero">
        <div class="background--custom">

            
        <div id="pres" class="box has-text-centered has-background-white ">
        <div class="columns">
    <div class="column">
        <img class="image_compo" alt="image composant" src="<?php echo $img;?>">
       
    </div>
    <div class="column is-four-fifths">
        <h1 style="font-family: 'Montserrat', sans-serif;" class="title is-2">
            <b style="color:blue;"><?php echo $brand;?></b> - <?php echo $name;?> 
        </h1>
        <?php if($is_available==1){
            echo '<div class="icon-text ">
            <div class="imgcompo">
                <span class="icon has-text-success">
                    <img src="../images/available.png">
                </span>
                <span id="detailscompo" class="is-size-3">disponible</span>
                </div>
                <p  class="is-size-3"><b>Prix:</b> '; echo $price.'$</p>
                <p  class="is-size-3"><b>Note:</b>'; echo $rating.'/5</p>
                 
            </div>';
        }else {
            echo'<div class="icon-text ">
            <div class="imgcompo">
                <span class="icon has-text-danger">
                    <img src="../images/out-stock.png">
                </span>
                <span id="detailscompo" class="is-size-3" >Indisponible</span>
                </div>
                <p  class="is-size-3"><b>Prix:</b> '; echo $price.'$</p>
                <p  class="is-size-3"><b>Note:</b>'; echo $rating.'/5</p>
                
            </div>';
        }
        ?>
        <div class="content" style="display: flex;justify-content: space-around;">
            
            <?php if($type=="composants_cpu"){ 
                $wattage = $row['wattage'];
                $nbcore = $row['nbcore'];
                $puissance = $row['puissance'];?>
                <p><b>Type:</b> Processeur</p>
                <p><b>Wattage:</b> <?php echo $wattage; ?> W</p>
                <p><b>Nombre de coeurs:</b> <?php echo $nbcore; ?></p>
                <p><b>Puissance:</b> <?php echo $puissance; ?> GHz</p>
            <?php } ?>
            <?php if($type=="composants_alim"){ 
                $wattage = $row['wattage']; ?>
                <p><b>Type:</b> Alimentation</p>
                <p><b>Wattage:</b> <?php echo $wattage; ?> W</p>
            <?php } ?>
            <?php if($type=="composants_board"){ 
            $ram = $row['ram'];
            $socket = $row['socket'];?>
            <p><b>Type:</b> Carte Mère</p>
            <p><b>RAM supportée:</b> <?php echo $ram; ?> GB</p>
            <p><b>Socket:</b> <?php echo $socket; ?></p>
             <?php } ?>
             <?php if($type=="composants_boitier"){ 
                $type = $row['type']; ?>
                <p><b>Type:</b> Boitier</p>
                <p><b>Type:</b> <?php echo $type; ?></p>
                
            <?php } ?>
            <?php if($type=="composants_cooler"){ 
            $taille = $row['taille'];
            $son = $row['son'];
            $type = $row['type'];
            $speed = $row['speed'];?>
            <p><b>Type:</b> Refroidissement de processeurs</p>
            <p><b>Taille:</b> <?php echo $taille; ?> </p>
            <p><b>Niveau sonore:</b> <?php echo $son; ?> dB</p>
            <p><b>Type:</b> <?php echo $type; ?></p>
            <p><b>Vitesse:</b> <?php echo $speed; ?> RPM</p>
            <?php } ?>
            <?php if($type=="composants_gpu"){ 
            $ram = $row['ram'];
            $clock = $row['clock'];?>
            <p><b>Type:</b> Carte Graphique</p>
            <p><b>RAM:</b> <?php echo $ram; ?> GB</p>
            <p><b>Fréquence du GPU:</b> <?php echo $clock; ?> MHz</p>
            <?php } ?>
            <?php if($type=="composants_ram"){ 
            $modules = $row['modules'];
            $capacite = $row['capacite'];
            $speed = $row['speed']; ?>
            <p><b>Type:</b> RAM</p>
            <p><b>Nombre de modules:</b> <?php echo $modules; ?></p>
            <p><b>Capacité:</b> <?php echo $capacite; ?> GB</p>
            <p><b>Vitesse:</b> <?php echo $speed; ?> MHz</p>
        <?php } ?>
        <?php if($type=="composants_stockage"){ 
            $capacite = $row['capacite'];
            $type_comp = $row['type_comp'];
            $speed = $row['speed'];?>
            <p><b>Type:</b> Stockage</p>
            <p><b>Type de stockage:</b> <?php echo $type_comp; ?></p>
            <p><b>Capacité:</b> <?php echo $capacite; ?> GB</p>

            <p><b>Vitesse:</b> <?php echo $speed; ?> MB/s</p>
            
        <?php } ?>


        

        </div>
        
    </div>
    
</div>

<?php 
if(isset($_SESSION['mail'])){
if($is_available==1){
    echo'
    <form  action ="./Pages/ajout_compo_config.php" > 
    <button value="'.$compo.'" id="btnajout" class="button is-success is-fullwidth">+ Ajouter a ma configuration</button>
    </form>
    <!-------------Message succès-------------->
    <div class="notification is-success" id="msg_success">
        Le composant a été ajouté avec succes !
    </div>
    <div class="notification is-danger" id="msg_error">
        Le composant n\'a pas été ajouté !

    </div>';
}else echo' <button  class="button is-danger is-fullwidth" disabled>Article en rupture de stock </button>';
}?>
           
            

        </div>
      
        
    </div>
    </section>
<!-------------Footer--------------> 
<div class="footer">
    <div class="container">
        <div class="rang">
            <div class="footer_col1">
                <h3>Télécharger notre application</h3>
                <p>Télécharger notre application maintenant sur Android et IOS</p>
                <div class="app_logo">
                    <a href="https://play.google.com/store/search?q=footprint"><img class="playstr" src="../images/playstore.png" ></a>
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
        <p class="copyright">Copyright 2022 -DIGGIT.me</p>
    </div>
 </div>
</body>
</html>